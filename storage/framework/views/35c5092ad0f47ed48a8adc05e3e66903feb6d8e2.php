<?php if(session($key ?? 'status')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session($key ?? 'status')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?><?php /**PATH /home/u289533873/domains/yodep.org/public_html/resources/views/alerts/success.blade.php ENDPATH**/ ?>