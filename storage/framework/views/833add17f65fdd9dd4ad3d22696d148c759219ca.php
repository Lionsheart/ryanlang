<?php $__env->startSection('content'); ?>
    
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Contact</h2>

            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php echo Form::open(['route' => 'contact.store', 'class' => 'form']); ?>


            <div class="form-group">
                <?php echo Form::label('name', 'Your Name'); ?>

                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('email', 'E-mail Address'); ?>

                <?php echo Form::text('email', null, ['class' => 'form-control required']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::textarea('msg', null, ['class' => 'form-control required']); ?>

            </div>

            <?php echo Form::submit('Submit', ['class' => 'btn btn-info']); ?>


            <?php echo Form::close(); ?>

        </div>
        
        
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>