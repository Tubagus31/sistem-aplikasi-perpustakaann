
<?php $__env->startSection('title', 'List Member'); ?>
<?php $__env->startSection('content_header'); ?>
    <h1 class="m-0 text-dark">List Member</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo e(route('member.create')); ?>" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NIK</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><?php echo e($member->Nama); ?></td>
                                <td><?php echo e($member->NIK); ?></td>
                                <td>
                                    <a href="<?php echo e(route('member.edit', $member)); ?>" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="<?php echo e(route('member.destroy', $member)); ?>" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <form action="" id="delete-form" method="post">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistem-aplikasi-perpustakaann\resources\views/member/index.blade.php ENDPATH**/ ?>