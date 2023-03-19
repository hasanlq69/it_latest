<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trouble;
use Auth;
use Mail;

class TroubleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troub = Trouble::orderBy('created_at', 'desc')
        ->paginate(10);
        return view('itdesk.troubleshoot.troubleshoot', compact('troub'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itdesk.troubleshoot.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tro = new Trouble;
        $tro->department = $request['department'];
        $tro->trouble_type = $request['trouble_type'];
        $tro->client_name = $request['client_name'];
        $tro->trouble_name = $request['trouble_name'];
        $troname = $request['trouble_name'];
        $tro->trouble_req = $request['trouble_req'];
        $tro->start = $request['start'];
        $tro->finish = $request['finish'];
        $tro->cause = $request['cause'];
        $tro->solution = $request['solution'];
        $tro->note = $request['note'];
        $tro->status = $request['status'];

        if ($request->hasFile('file_1')){
            $file=$request->file('file_1');
            $path='trouble/';
            $name=$troname.'1'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path,$name);
            $tro->file_1=$name;
        }else{
            $tro->file_1='nofile.png';
        }

        if ($request->hasFile('file_2')){
            $file=$request->file('file_2');
            $path2='trouble/';
            $name2=$troname.'2'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path2,$name2);
            $tro->file_2=$name2;
        }else{
            $tro->file_2='nofile.png';
        }


        if ($request->hasFile('file_3')){
            $file=$request->file('file_3');
            $path3='trouble/';
            $name3=$troname.'3'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path3,$name3);
            $tro->file_3=$name3;
        }else{
            $tro->file_3='nofile.png';
        }

        $status = $request['status'];

        if ($status == "Done") {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = Auth::user()->fullname;
            $tro->save();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note, 'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/problem')->with('alert-success','Berhasil Kirim Email');
            
        }
        else 
        {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = "Not Yet";
            $tro->save();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note,'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/')->with('alert-success','Berhasil Kirim Email');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tr = Trouble::where('id', $id)->first();
        return view('itdesk.troubleshoot.detail', compact('tr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tr = Trouble::where('id', $id)->first();
        return view('itdesk.troubleshoot.edit', compact('tr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tro = Trouble::where('id', $id)->first();
        $tro->department = $request['department'];
        $tro->trouble_type = $request['trouble_type'];
        $tro->client_name = $request['client_name'];
        $tro->trouble_name = $request['trouble_name'];
        $troname = $request['trouble_name'];
        $tro->trouble_req = $request['trouble_req'];
        $tro->finish = $request['finish'];
        $tro->cause = $request['cause'];
        $tro->solution = $request['solution'];
        $tro->note = $request['note'];
        $tro->status = $request['status'];

        if ($request->hasFile('file_1')){
            $file=$request->file('file_1');
            $path='trouble/';
            $name=$troname.'1'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path,$name);
            $tro->file_1=$name;
        } else{
            $tro->file_1=$tro->file_1;
        }

//         Potongan kode di atas digunakan untuk menangani file yang diunggah dari sebuah form di aplikasi Laravel.

// Pertama, pernyataan if ($request->hasFile('file_1')) digunakan untuk memeriksa apakah file yang diunggah dari form telah diterima oleh aplikasi. Jika file telah diterima, maka blok kode di dalam if akan dieksekusi. Jika tidak, blok kode di dalam else akan dieksekusi.

// Di dalam blok kode if, variabel $file diinisialisasi sebagai file yang diunggah dari form dengan menggunakan $request->file('file_1'). Kemudian, variabel $path diinisialisasi sebagai 'trouble/' yang merupakan lokasi di mana file akan disimpan. Variabel $name diinisialisasi sebagai nama file yang digunakan untuk menyimpan file, yang terdiri dari nama file yang ditentukan oleh $troname, '1' dan timestamp yang ditentukan oleh time() serta ekstensi file yang diunggah dengan menggunakan $file->getClientOriginalExtension().

// Selanjutnya, perintah $file->move($path,$name); digunakan untuk memindahkan file yang diunggah ke lokasi yang ditentukan oleh $path dengan nama file yang ditentukan oleh $name.

// Terakhir, $tro->file_1 diinisialisasi sebagai $name yang merupakan nama file yang disimpan.

// Di dalam blok kode else, $tro->file_1 diinisialisasi sebagai $tro->file_1 yang merupakan nama file yang sebelumnya digunakan. Ini digunakan jika tidak ada file baru yang diunggah dari form, sehingga file yang sebelumnya digunakan tetap digunakan.

// Ini digunakan untuk mengupdate data file yang diupload dari form, jika tidak ada file yang diunggah maka file yang sebelumnya digunakan tetap digunakan.

        if ($request->hasFile('file_2')){
            $file=$request->file('file_2');
            $path2='trouble/';
            $name2=$troname.'2'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path2,$name2);
            $tro->file_2=$name2;
        } else{
            $tro->file_2=$tro->file_2;
        }


        if ($request->hasFile('file_3')){
            $file=$request->file('file_3');
            $path3='trouble/';
            $name3=$troname.'3'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path3,$name3);
            $tro->file_3=$name3;
        } else{
            $tro->file_3=$tro->file_3;
        }
        $status = $request['status'];

        if ($status == "Done") {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = Auth::user()->fullname;
            $tro->update();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note, 'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/problem')->with('alert-success','Berhasil Kirim Email');
            
        }
        else 
        {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = "Not Yet";
            $tro->update();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note, 'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/')->with('alert-success','Berhasil Kirim Email');
        }
    }

    // Potongan program di atas adalah sebuah fungsi "store" yang didefinisikan dalam sebuah controller di Laravel. 
    // Fungsi ini digunakan untuk menyimpan data baru yang diterima dari form yang dikirimkan ke server.
    // Fungsi ini menerima input dari form yang dikirimkan sebagai objek "Request" dan menyimpan data tersebut ke dalam tabel "Trouble" menggunakan Eloquent ORM dari Laravel.


    // Pada baris pertama, dibuat objek baru dari model Trouble yang nantinya akan digunakan untuk menyimpan data ke dalam tabel Trouble. 
    // Kemudian, data yang diterima dari form di assign ke properti yang ada pada objek tersebut.
    
    // Kemudian, di cek apakah file dengan nama 'file_1', 'file_2' dan 'file_3' di upload dan jika diupload maka akan digunakan untuk menyimpan file tersebut dan jika tidak,
    //  maka akan digunakan default file 'nofile.png'
    
    // Kemudian di cek status dari form yang diterima, jika statusnya Done maka Jika status yang diterima dari form adalah "Done", 
    // maka akan mengirim email menggunakan Laravel Mail. Fungsi Mail::send akan mengirim email ke alamat yang ditentukan dengan menggunakan template 'email' dan data yang diterima dari form sebagai parameter.
    //  Kemudian, akan menyimpan data ke dalam tabel Trouble dengan mengisi reporter dan problem_solver dengan fullname dari user yang sedang login saat ini, yang di ambil dari Auth::user()->fullname. Dan akan redirect ke halaman '/problem' dengan pesan alert success 'Berhasil Kirim Email'.
    //   Namun jika status yang diterima dari form adalah "Not Yet", maka akan menyimpan data tanpa mengirim email dan mengisi problem_solver dengan "Not Yet"
    
    // Dan pada baris terakhir, objek yang sudah diisi dengan data dari form akan disimpan ke dalam tabel Trouble menggunakan Eloquent ORM dari Laravel.
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
