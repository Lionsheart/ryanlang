<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row hero">
        <div class="col-md-8 center">
            <p>The internet is ever evolving, with standards and trends that are constantly changing, so it is important to stay current on today’s web technology. I strive for excellence in my work, and am always tweaking my projects to make them better.</p>
            <p>I have been in the web design industry for about 12 years now, and I really enjoy learning new things, whether it be a new framework or just some CSS tricks.</p>

        </div>
        <div class="col-md-4">
            <img class="featurette-image img-responsive img-rounded" style="" src="/images/portfolio-pic.jpg" >
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <h2>TECHNOLOGIES USED:</h2>
            <p>HTML5, CSS3, Sass, jQuery, Git, Photoshop, Adobe XD, Linux, Mac, Magento Enterprise, and others.</p>

        </div>
    </div>

    <div class="row featurette center">
        <div class="col-md-12 profiles">
            <a href="https://www.linkedin.com/in/ryanflang"><i class="fa fa-linkedin-square fa-2x"></i> LinkedIn Profile</a>
            <a href="https://github.com/Lionsheart"><i class="fa fa-github fa-2x"></i> GitHub</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>