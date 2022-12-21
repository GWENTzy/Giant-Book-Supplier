<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <h3>Book Detail</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards justify-content-center">
        <div class="col w-100">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo e(asset('img/'.$data->book->image)); ?>" onerror="this.onerror=null; this.src='<?php echo e($data->book->image); ?>'">
                <div class="card-body">
                    <h5 class="card-title">Title : <?php echo e($data->book->title); ?></h5>
                    <h5 class="card-title">Author : <?php echo e($data->book->author); ?></h5>
                    <h5 class="card-title">Publisher : <?php echo e($data->book->publisher->name); ?></h5>
                    <h5 class="card-title">Year : <?php echo e($data->book->year); ?></h5>
                    <h5 class="card-title">Synopsis : <?php echo e($data->book->synopsis); ?></h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LibraryUTS\resources\views/detail.blade.php ENDPATH**/ ?>