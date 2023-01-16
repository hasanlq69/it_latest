<?php $__env->startSection('isi'); ?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Activity </span>
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
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4><?php echo e($main->name); ?> <?php echo e($today->format('d-m-Y')); ?> Cheklist Activities</h4>
                            <div class="add-product">
                                
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>Activities</th>
                                    </tr>
                                    <?php
                                        $i=1;
                                        $ia=1;
                                    ?>
                                    <?php $__currentLoopData = $groupday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <strong><?php echo e($i++); ?>. <?php echo e($t->name); ?></strong> <br>
                                        <?php $__currentLoopData = $t->activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <form action="<?php echo e(route('daily.store')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                    <input type="checkbox" name="act[]" value="<?php echo e($ag->id); ?>"> <?php echo e($ag->name); ?> <br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                                    <input type="text" class="form-control" name="note" placeholder="Note">
                                                    <div class="input-group custom-go-button">
                                                        <input type="text" class="form-control" name="pic" placeholder="PIC">
                                                        <span class="input-group-btn"><button type="type" class="btn btn-primary">Checked </button></span>
                                                    </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $daily; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <small>
                                            <input type="checkbox" checked disabled> <?php echo e($day->activity->name); ?><strong> <?php echo e($day->activity->group->name); ?></strong> <br>
                                            <?php echo e($day->status); ?> by <?php echo e($day->maintener); ?>

                                            </small>

                                        </td>
                                    </tr>                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('itdesk.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>