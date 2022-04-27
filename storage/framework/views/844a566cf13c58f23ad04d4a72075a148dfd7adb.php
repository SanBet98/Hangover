<?php $__env->startSection('titolo', 'Hangover\'s Management - Home PR'); ?>

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
                    <a class="nav-link active" aria-current="page" href="homePR.php"><?php echo e(trans('labels.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="eventiPR.php"><?php echo e(trans('labels.eventi')); ?></a>
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
        <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.areaPersonale')); ?>" alt="Hangover">
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.panoramicaVendite')); ?>" alt="Hangover">
            <hr class="featurette-divider">
            <?php if(!($vendite==NULL)): ?>
            <table class="table table-striped table-dark">
                <thead>
                <col width='40%'>
                <col width='25%'>
                <col width='10%'>
                <col width='25%'>
                <tr>
                    <th scope="col"><?php echo e(trans('labels.evento')); ?></th>
                    <th scope="col" colspan="3"><?php echo e(trans('labels.bigliettiVenduti')); ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $vendite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($vendita->nome); ?></td>
                        <td>
                            <a href="homePR.php <?php echo e($vendita->evento_id); ?> <?php echo e($vendita->promoter_id); ?> <?php echo e($vendita->biglietti_venduti); ?> togli">  <button class="w-100 btn btn-lg btn-outline-light" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button></a> </td>
                        <td class="align-middle"> <center>   <?php echo e($vendita->biglietti_venduti); ?></center></td>
                <td>   

                    <a href="homePR.php <?php echo e($vendita->evento_id); ?> <?php echo e($vendita->promoter_id); ?> <?php echo e($vendita->biglietti_venduti); ?> aggiungi">  <button class="w-100 btn btn-lg btn-outline-light" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg></button></a>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>


            <?php else: ?>
            <h5> <center> <?php echo e(trans('labels.chiediAbilitazioneVendita')); ?></center> </h5>
            <?php endif; ?>

        </div>
        <div class="col-md-6">
            <img class="img-fluid d-block w-100" src="images/pr/<?php echo e(trans('images.prossimoEvento')); ?>" alt="Hangover">
            <hr class="featurette-divider">
            <?php $__currentLoopData = $nextEvent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nE): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table class="table table-striped table-dark">
                <tbody>
                    <tr>
                        <th scope="col"><?php echo e(trans('labels.nome')); ?></th>
                        <td scope="col"><?php echo e($nE->nome); ?></td>
                    </tr>

                    <tr>
                        <th scope="col"><?php echo e(trans('labels.data')); ?></th>
                        <td><?php echo e($nE->data); ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Location</th>
                        <td><?php echo e($nE->location); ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Resident DJs</th>
                        <td><?php echo e($nE->dj); ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Vocalist</th>
                        <td><?php echo e($nE->voice); ?></td>
                    </tr>
                </tbody>
            </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/PRSection/homePR.blade.php ENDPATH**/ ?>