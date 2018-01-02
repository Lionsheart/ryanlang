<?php $__env->startSection('content'); ?>
    
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Contact</h2>

            <form action="">
                <input type="text" name="name">
                <textarea name="comments" id="" cols="30" rows="10"></textarea>
            </form>
        </div>
        
        
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>