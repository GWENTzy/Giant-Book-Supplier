<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-group-cards">
    <div class="card-header d-inline-block py-3">
        <h6 class="m-0 font-weight-bold text-primary">Publisher List</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo e(asset('img/'.$data->image)); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($data->name); ?></h5>
                            <a href="<?php echo e(route('publisherDetail', ['id'=> $data->id])); ?>" class="btn btn-primary">Publisher Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LibraryUTS\resources\views/publisher.blade.php ENDPATH**/ ?>