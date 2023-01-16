<?php $__env->startSection('isi'); ?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h3>ALL TASK TODAY</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo e(url('/')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard Index</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                <?php $__currentLoopData = $troub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                            <div class="courses-title">
                                <b><i class="text-danger">
                                <a href="<?php echo e(route('problem.edit', $tr->id)); ?>" data-toggle="tooltip" title="Edit <?php echo e($tr->trouble_name); ?> Trouble"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <?php echo e($tr->trouble_name); ?> "<?php echo e($tr->trouble_type); ?>" 
                                </i></b>                                
                            </div>
                            <div class="courses-alaltic pull-right">
                                <img src="trouble/<?php echo e($tr->file_1); ?>" height="50" width="50">
                            </div>
                            <div class="course-des ">
                                <p ><span class="text-info"> <b>Client  :</b> <?php echo e($tr->client_name); ?> @ <?php echo e($tr->department); ?> </span> </p>
                                <p><span class="text-warning"> <b>Cause :</b> <?php echo e($tr->cause); ?></span></p>
                                <p><span></span> <b>Note:</b><br> <small><?php echo e($tr->note); ?></small></p>
                            </div>
                            <div class="product-buttons">
                                <small class="text-info">
                                    <span class="cr-ic-r"><span class="course-icon"> Reported by <?php echo e($tr->reporter); ?> </span>
                                    <span class="cr-ic-r"><span class="course-icon"> at <?php echo e($tr->created_at->format('d-m-Y h:i A')); ?> </span> 
                                </small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <div class="product-buttons">
                            <a href="<?php echo e(route('problem.create')); ?>" data-toggle="tooltip" title="Add Troubleshoot" class="btn btn-warning btn-lg btn-block"><i  class="fa fa-plus-square" aria-hidden="true"></i> Troubleshoot</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                <?php $__currentLoopData = $troday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <div class="courses-title">
                            <b><i class="text-success">
                            <a href="<?php echo e(route('problem.show', $trd->id)); ?>" data-toggle="tooltip" title="Show <?php echo e($trd->trouble_name); ?> Trouble"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <?php echo e($trd->trouble_name); ?> "<?php echo e($trd->trouble_type); ?>" 
                            </i></b>
                        </div>
                        <div class="courses-alaltic pull-right">
                            <img src="trouble/<?php echo e($trd->file_1); ?>" height="50" width="50">
                        </div>
                        <div class="course-des">
                            <p ><span class="text-info"> <b>Client     :</b> <?php echo e($trd->client_name); ?> @ <?php echo e($trd->department); ?> </span> </p>
                            <p><span class="text-success"> <b>Solution :</b> <?php echo e($trd->solution); ?></span></p>
                            <p><span></span> <b>Note:</b><br> <small><?php echo e($trd->note); ?></small></p>
                        </div>
                        <div class="product-buttons">
                            <small class="text-info">
                                <span class="cr-ic-r"><span class="course-icon"> Solved by <?php echo e($trd->reporter); ?> </span>
                                <span class="cr-ic-r"><span class="course-icon"> at <?php echo e($trd->updated_at->format('d-m-Y h:i A')); ?> </span> 
                            </small>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        
        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3>Cheklist Activity  <?php echo e($today->format('d-m-Y')); ?></h3>
                            <table class="table">
                                <tr>
                                    <th >Maintenace Name</th>
                                    <th>Setting </th>
                                </tr>
                                <?php $__currentLoopData = $main; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><b>  <?php echo e($a->name); ?>  </b> </td>
                                    <td>
                                            
                                        <a href="<?php echo e(route('daily.create', $a->id)); ?>" data-toggle="tooltip" title="Cheklist Activity" class="btn btn-success pd-setting-ed"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                                    </td>
                                        
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                <?php $__currentLoopData = $taskundone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                            <div class="courses-alaltic text-danger">
                                <a href="<?php echo e(route('task.edit', $tud->id)); ?>" data-toggle="tooltip" title="Edit <?php echo e($tud->name); ?> Task"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <?php echo e($tud->name); ?> <br>
                                <b class="text-warning"> 
                                    <a href="<?php echo e(route('task.create', $tud->Project->id)); ?>" data-toggle="tooltip" title="Add Task <?php echo e($tud->Project->name); ?> Project    "><i  class="fa fa-plus-square" aria-hidden="true"></i></a>
                                    <a href="<?php echo e(route('project.show', $tud->Project->id)); ?>"> "<?php echo e($tud->Project->name); ?> Project" </a>
                                </b>
                            </div>
                            <div class="course-des ">
                                <p>By <b class="text-danger"> <?php echo e($tud->developer); ?> </b>  <b class="text-warning"> -> <?php echo e($tud->status); ?></b> <i class="text-info">  from <?php echo e(date('d-M-y', strtotime($tud->start))); ?></i>   </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        
        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                <?php $__currentLoopData = $taskday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                            <div class="courses-alaltic text-success">
                                <a href="<?php echo e(route('task.show', $tda->id)); ?>" data-toggle="tooltip" title="Detail <?php echo e($tda->name); ?> Task"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <?php echo e($tda->name); ?> "<b><?php echo e($tda->status); ?></b>" <br>
                                <b class="text-warning"> 
                                <a href="<?php echo e(route('task.show', $tda->id)); ?>" data-toggle="tooltip" title="Detail <?php echo e($tda->name); ?> Task">
                                    <a href="<?php echo e(route('task.create', $tda->Project->id)); ?>" data-toggle="tooltip" title="Add Task <?php echo e($tda->Project->name); ?> Project    "><i  class="fa fa-plus-square" aria-hidden="true"></i></a>
                                    <a href="<?php echo e(route('project.show', $tda->Project->id)); ?>"> "<?php echo e($tda->Project->name); ?> Project" </a>  
                                </b>
                            </div>
                            <div class="course-des ">
                                <p>By <b class="text-success"> <?php echo e($tda->developer); ?> </b> <i class="text-info"> @ <?php echo e(date('d M', strtotime($tda->start))); ?> - <?php echo e($today->format('d M y')); ?></i> <i class="text-success"> </i> </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('itdesk.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>