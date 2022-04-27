<?php $__env->startSection('titolo', 'Hangover\'s Management - Home Admin'); ?>

<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-expand-md navbar-dark bianco-opaco bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="homeAdmin.php"><img src="images/logoNavbar.png" height="40px" width="90px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="homeAdmin.php"> <?php echo e(trans('labels.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="eventiAdmin.php"><?php echo e(trans('labels.eventi')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="promoterAdmin.php">Promoter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="anagraficaAdmin.php"><?php echo e(trans('labels.anagrafica')); ?></a>
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
        </div>
    </div>
</nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
<div class="container">
    <div class="row">
        <img class="img-fluid d-block w-100" src="images/admin/<?php echo e(trans('images.panoramica')); ?>" alt="Hangover">
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="row">
        <div class="col-md-5">
            <img class="img-fluid d-block w-100" src="images/admin/<?php echo e(trans('images.prossimiEventi')); ?>" alt="Hangover">
            <?php $__currentLoopData = $nextEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <hr class="featurette-divider">
            <h3><b> <?php echo e($event->nome); ?> </b></h3>
            <table class="table table-striped table-dark">
                <tbody>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.nome')); ?></th>
                        <td scope="col"><?php echo e($event->nome); ?></td>
                    </tr>

                    <tr>
                        <th scope="col"><?php echo e(trans('labels.data')); ?></th>
                        <td><?php echo e($event->data); ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Location</th>
                        <td><?php echo e($event->location); ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Resident DJs</th>
                        <td><?php echo e($event->dj); ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Vocalist</th>
                        <td><?php echo e($event->voice); ?></td>
                    </tr>

                </tbody>
            </table>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <img class="img-fluid d-block w-100" src="images/admin/<?php echo e(trans('images.nuoviUtenti')); ?>" alt="Hangover">

            <?php $__currentLoopData = $newPromoter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promoter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <hr class="featurette-divider">
            <h3><b> <?php echo e($promoter->nome); ?> <?php echo e($promoter->cognome); ?> </b></h3>
            <table class="table table-striped table-dark">
                <tbody>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.nome')); ?> <?php echo e(trans('labels.cognome')); ?></th>
                        <td><?php echo e($promoter->nome); ?> <?php echo e($promoter->cognome); ?></td>
                    </tr>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.dataNascita')); ?></th>
                        <td><?php echo e($promoter->dataNascita); ?></td>
                    </tr>

                    <tr>
                        <th scope="col"><?php echo e(trans('labels.comuneResidenza')); ?></th>
                        <td><?php echo e($promoter->comuneResidenza); ?></td>
                    </tr>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.telefono')); ?></th>
                        <td><?php echo e($promoter->telefono); ?></td>
                    </tr>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.indirizzoMail')); ?></th>
                        <td><?php echo e($promoter->email); ?></td>
                    </tr>


                </tbody>
            </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/AdminSection/homeAdmin.blade.php ENDPATH**/ ?>