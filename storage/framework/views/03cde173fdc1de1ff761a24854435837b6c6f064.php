<div>
    
</div>
<?php $__env->startPush('js'); ?>
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        function toast_show(icon, message) {
            Toast.fire({
                icon: icon,
                title: message
            })
        }
        function success_message(message)
        {
            toast_show('success', message);
        }
        function info_message(message)
        {
            toast_show('info', message);
        }
        function error_message(message)
        {
            toast_show('error', message);
        }
        function warning_message(message)
        {
            toast_show('warning', message);
        }
    </script>
    <?php if($message = \Illuminate\Support\Facades\Session::get('success_message')): ?>
        <?php if(is_iterable($message)): ?>
            <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script>
                    success_message('<?php echo e(addslashes($m)); ?>');
                </script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <script>
                success_message('<?php echo e(addslashes($message)); ?>');
            </script>
        <?php endif; ?>
    <?php endif; ?>
    <?php if($message = \Illuminate\Support\Facades\Session::get('info_message')): ?>
        <?php if(is_iterable($message)): ?>
            <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script>
                    info_message('<?php echo e(addslashes($m)); ?>');
                </script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <script>
                info_message('<?php echo e(addslashes($message)); ?>');
            </script>
        <?php endif; ?>
    <?php endif; ?>
    <?php if($message = \Illuminate\Support\Facades\Session::get('warning_message')): ?>
        <?php if(is_iterable($message)): ?>
            <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script>
                    warning_message('<?php echo e(addslashes($m)); ?>');
                </script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <script>
                warning_message('<?php echo e(addslashes($message)); ?>');
            </script>
        <?php endif; ?>
    <?php endif; ?>
    <?php if($message = \Illuminate\Support\Facades\Session::get('error_message')): ?>
        <?php if(is_iterable($message)): ?>
            <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script>
                    error_message('<?php echo e(addslashes($m)); ?>');
                </script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <script>
                error_message('<?php echo e(addslashes($message)); ?>');
            </script>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopPush(); ?><?php /**PATH D:\Aplikasi\Xampp\htdocs\sistem-perpustakaan\resources\views/components/notification-component.blade.php ENDPATH**/ ?>