<?php $__env->startSection('title', 'Publisher'); ?>

<?php $__env->startSection('content'); ?>
        <div class="publisher-info">
            <div class="row">
                <div class="col publisher-detail">
                    <h4>Address - <?php echo e($publisher->address); ?></h4>
                    <h4>Phone - <?php echo e($publisher->phone); ?></h4>
                    <h4>Email - <?php echo e($publisher->email); ?></h4>
                </div>
                <div class="col d-flex flex-row-reverse logo-image">
                    <img src= "<?php echo e(asset('img/'.$publisher->image)); ?>" onerror="this.onerror=null; this.src='<?php echo e($publisher->image); ?>'" width="200" height="auto">
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards">
            <?php $__currentLoopData = $publisher->book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo e(asset('img/'.$data->image)); ?>" onerror="this.onerror=null; this.src='<?php echo e($data->image); ?>'" width="200" height="400">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($data->title); ?></h5>
                        <p class="card-text">By <?php echo e($data->author); ?></p>
                        <a href="<?php echo e(route('detail', ['id'=> $data->id])); ?>" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LibraryUTS\resources\views/publisherDetail.blade.php ENDPATH**/ ?>