<?php $__env->startSection('titolo', 'Hangover\'s Management - Squadra PR'); ?>

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
                    <a class="nav-link"  href="eventiPR.php"><?php echo e(trans('labels.eventi')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="squadraPR.php"><?php echo e(trans('labels.team')); ?></a>
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
        <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.team')); ?>" alt="Hangover">
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="row">
        <?php if(!($team==NULL)): ?>
        <div class="col-md-6">
            <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.membriTeam')); ?>" alt="Hangover">
            <hr class="featurette-divider">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.nome')); ?></th>
                        <th scope="col"><?php echo e(trans('labels.cognome')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pr->nome); ?></td>
                        <td><?php echo e($pr->cognome); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.dettaglioVendite')); ?>" alt="Hangover">
            <?php $__currentLoopData = $listaEventi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <hr class="featurette-divider">                
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col"><?php echo e($evento->nome); ?></th>
                        <th scope="col"> <?php echo e(trans('labels.data')); ?>: <?php echo e($evento->data); ?></th>
                        <th scope="col"><?php echo e(trans('labels.bigliettiVenduti')); ?></th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <?php $__currentLoopData = $listaVendite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($evento->evento_id==$vendita->evento_id): ?>
                    <tr>
                        <td><?php echo e($vendita->nome); ?></td>
                        <td><?php echo e($vendita->cognome); ?></td>
                        <td><?php echo e($vendita->biglietti_venduti); ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php else: ?>
        <h3> <center> <?php echo e(trans('labels.vantaggiTeam')); ?>  </center></h3>
        <?php endif; ?>
    </div>
    <br>
    <hr class="featurette-divider">
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/PRSection/squadraPR.blade.php ENDPATH**/ ?>