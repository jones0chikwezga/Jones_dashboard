<?php if(session($key ?? 'status')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session($key ?? 'status')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/alerts/success.blade.php ENDPATH**/ ?>