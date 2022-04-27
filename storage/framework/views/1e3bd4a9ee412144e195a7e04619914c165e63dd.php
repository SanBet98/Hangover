

<?php $__env->startSection('titolo', 'Hangover\'s Management - Eventi PR'); ?>

<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-expand-md navbar-dark bianco-opaco bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="homePR.php"><img src="images/logoNavbar.png" height="40px" width="90px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="homePR.php"><?php echo e(trans('labels.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="eventiPR.php"><?php echo e(trans('labels.eventi')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="squadraPR.php"><?php echo e(trans('labels.team')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="anagraficaPR.php"><?php echo e(trans('labels.anagrafica')); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><?php echo e(trans('labels.esci')); ?></a>
                </li>

                <li>
                    <a href="lang.php en" class="nav-link"><img src="<?php echo e(url('/')); ?>/images/flags/en.png" width="30" class="img-rounded"/></a>
                </li>
                <li>
                    <a href="lang.php it" class="nav-link"><img src="<?php echo e(url('/')); ?>/images/flags/it.png" width="24" class="img-rounded"/></a>
                </li>
            </ul>
            </ul>
        </div>
    </div>
</nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
<div class="container">
    <div class="row">
        <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.tuoiEventi')); ?>" alt="Hangover">
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.eventiAttivi')); ?>" alt="Hangover">
            <hr class="featurette-divider">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.evento')); ?></th>
                        <th scope="col"><?php echo e(trans('labels.data')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $activeEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($event->nome); ?></td>
                        <td><?php echo e($event->data); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
        <div class="col-md-6">
            <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.eventiDisponibili')); ?>" alt="Hangover">
            <hr class="featurette-divider">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.evento')); ?></th>
                        <th scope="col"><?php echo e(trans('labels.data')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $freeEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($event->nome); ?></td>
                        <td><?php echo e($event->data); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/PRSection/eventiPR.blade.php ENDPATH**/ ?>