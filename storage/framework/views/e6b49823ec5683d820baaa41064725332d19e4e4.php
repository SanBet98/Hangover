<?php $__env->startSection('titolo', 'Hangover\'s Management - Promoter Admin'); ?>

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
                    <a class="nav-link" href="homeAdmin.php"> <?php echo e(trans('labels.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="eventiAdmin.php"><?php echo e(trans('labels.eventi')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="promoterAdmin.php">Promoter</a>
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
        <img class="img-fluid d-block w-100" src="images/admin/<?php echo e(trans('images.listaPromoter')); ?>" alt="Hangover">
    </div>
    <br>
    <hr class="featurette-divider">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col"><?php echo e(trans('labels.nome')); ?><?php echo e(trans('labels.cognome')); ?></th>
                <th scope="col"><?php echo e(trans('labels.referente')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $listReferente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><a href="dettaglioPromoterAdmin.php <?php echo e($pr->id); ?>" > <?php echo e($pr->nome); ?> <?php echo e($pr->cognome); ?></a></td>
                <?php if($pr->referente==""): ?>
                <td> <?php echo e(trans('labels.staffHangover')); ?> </td>
                <?php else: ?>
                <td> <?php echo e($pr->referente); ?> </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <br>
    <hr class="featurette-divider">
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/AdminSection/promoterAdmin.blade.php ENDPATH**/ ?>