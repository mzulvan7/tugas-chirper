<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-6">Chirps</h1>

                    <!-- Tombol Add Chirp -->
                    <a href="<?php echo e(route('chirps.create')); ?>" 
                    class="inline-block mb-6 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Add Chirp
                    </a>

                    <?php $__currentLoopData = $chirps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chirp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-4 border-b border-gray-700 pb-4">
                            <p><strong><?php echo e($chirp->user->name); ?></strong></p>
                            <p><?php echo e($chirp->content); ?></p>
                            <p class="text-sm text-gray-500">Posted <?php echo e($chirp->created_at->diffForHumans()); ?></p>
                    
                            <?php if(Auth::id() === $chirp->user_id): ?>
                                <div class="flex space-x-2">
                                    <!-- Tombol Edit -->
                                    <a href="<?php echo e(route('chirps.edit', $chirp)); ?>" 
                                        class="text-blue-500 hover:underline">Edit</a>
                                    
                                    <!-- Tombol Delete -->
                                    <form action="<?php echo e(route('chirps.destroy', $chirp)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-red-500 hover:underline"
                                                onclick="return confirm('Are you sure you want to delete this chirp?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

                    <?php if($chirps->isEmpty()): ?>
                        <p class="text-gray-500">No chirps yet. Be the first to post one!</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\Pekerjaan\2025\website\011425\tugas-chirper\resources\views/dashboard.blade.php ENDPATH**/ ?>