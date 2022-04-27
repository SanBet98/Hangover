<?php $__env->startSection('titolo', 'Hangover\'s Management - Primo Accesso'); ?>

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
        <img class="img-fluid d-block w-100" src="images/admin/<?php echo e(trans('images.nuovoEvento')); ?>" alt="Hangover">
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="row">
        <center><h2><b><?php echo e(trans('labels.datiNuovoEvento')); ?></b></h2></center>
        <form action="eventiAdmin.php" method="post" style="margin-top: 2em">
            <?php echo csrf_field(); ?>
            <label for="inputNome"  class="visually-hidden">Nome</label>
            <input type="text" name="nome" id="inputNome" class="form-control" placeholder="<?php echo e(trans('labels.nome')); ?>" required>
            <br>
            <label for="inputData"  class="visually-hidden">Data</label>
            <input type="text" name="data" id="inputData" class="form-control" placeholder="<?php echo e(trans('labels.data')); ?> (dd/mm/aaaa)" required>
            <br>
            <label for="inputLocation"  class="visually-hidden">Location</label>
            <input type="text" name="location" id="inputLocation" class="form-control" placeholder="Location" required>
            <br>
            <label for="inputDj"  class="visually-hidden">DJs</label>
            <input type="text" name="dj" id="inputDj" class="form-control" placeholder="DJs" required>
            <br>
            <label for="inputVocalist"  class="visually-hidden">Vocalis</label>
            <input type="text" name="voice" id="inputVoice" class="form-control" placeholder="Vocalist">
            <br>
            <label for="inputGuest"  class="visually-hidden">Guest</label>
            <input type="text" name="guest" id="inputGuest" class="form-control" placeholder="Guest <?php echo e(trans('labels.opzionale')); ?>">
            <br>
            <button class="w-100 btn btn-lg btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg> <?php echo e(trans('labels.salvaNuovoEvento')); ?> </button>

        </form>
    </div>
    <br>
    <hr class="featurette-divider">
    <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/AdminSection/nuovoEventoAdmin.blade.php ENDPATH**/ ?>