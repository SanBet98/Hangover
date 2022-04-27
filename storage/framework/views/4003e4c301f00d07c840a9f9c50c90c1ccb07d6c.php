

<?php $__env->startSection('titolo', 'Hangover\'s Management - Dettaglio Evento Admin'); ?>

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
                    <a class="nav-link active" aria-current="page" href="eventiAdmin.php"><?php echo e(trans('labels.eventi')); ?></a>
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
        <img class="img-fluid d-block w-100" src="images/admin/<?php echo e(trans('images.abilitaPromoter')); ?>" alt="Hangover">
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="row">
        <center><h2><b><?php echo e(trans('labels.abilitaPromoterDomanda')); ?></b></h2></center>
        <form action="dettaglioEventoAdmin.php <?php echo e($evento->nome); ?>" method="post" style="margin-top: 2em">
            <?php echo csrf_field(); ?>
            <label for="inputNome"  class="visually-hidden">Nome</label>
            <input type="text" name="nome" id="inputNome" class="form-control" placeholder="<?php echo e(trans('labels.nome')); ?>" required>
            <br>
            <label for="inputCognome"  class="visually-hidden">cognome</label>
            <input type="text" name="cognome" id="inputCognome" class="form-control" placeholder="<?php echo e(trans('labels.cognome')); ?>" required>
            <br>

            <button class="w-100 btn btn-lg btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg> <?php echo e(trans('labels.abilitaPromoter')); ?> </button>

        </form>
    </div>
    <br>
    <hr class="featurette-divider">
    <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/AdminSection/abilitaEventoPromoter.blade.php ENDPATH**/ ?>