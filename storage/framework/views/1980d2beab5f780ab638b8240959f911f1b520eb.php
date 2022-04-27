

<?php $__env->startSection('titolo', 'Hangover\'s Management - Login'); ?>

<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-expand-md navbar-dark bianco-opaco bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/logoNavbar.png" height="40px" width="90px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/"><?php echo e(trans('labels.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="storia.php"><?php echo e(trans('labels.storia')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contatti.php"><?php echo e(trans('labels.contatti')); ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(trans('labels.eventi')); ?>

                    </a>
                    <ul class="dropdown-menu bg-dark-dropdown" aria-labelledby="navbarDropdown">
                        <li><center><b><?php echo e(trans('labels.prossimiEventi')); ?></b></center></li>
                <li><a class="dropdown-item bianco-opaco" href="#"><center><?php echo e(trans('labels.restateConnessi')); ?></center></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><center><b><?php echo e(trans('labels.eventiPassati')); ?></b></center></li>
                <li><a class="dropdown-item bianco-opaco" href="hangoverAttoI.php"><center>Hangover Atto I</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="hangoverAttoII.php"><center>Hangover Atto II</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="hangoverAttoIII.php"><center>Hangover Atto III</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="FDFEI.php"><center>FDFE 1° Edizione</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="hangoverAttoIV.php"><center>Hangover Atto IV</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="hangoverAttoV.php"><center>Hangover Atto V</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="carnival.php"><center>Carnival Party</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="hangoverAttoVI.php"><center>Hangover Atto VI</center></a></li>
                <li><a class="dropdown-item bianco-opaco" href="FDFE2.php"><center>FDFE 2° Edizione</center></a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php"><?php echo e(trans('labels.accedi')); ?></a>
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
<br>
        <br>
        <div class="container">
            <div class="row">
                <a href="index.php"><img class="img-fluid d-block w-100" src="images/welcome.jpg" alt="Hangover"></a>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <img src="images/<?php echo e(trans('images.accedi')); ?>" class="img-fluid">
                    <hr class="featurette-divider">
                            
                    <form action="login.php" method="post" style="margin-top: 2em">
                        <?php echo csrf_field(); ?>
                        <label for="inputNomeUtente" class="visually-hidden"><?php echo e(trans('labels.nomeUtente')); ?></label>
                        <input type="text" name="nomeUtente" id="inputNomeUtente1" class="form-control" placeholder="<?php echo e(trans('labels.nomeUtente')); ?>" required>
                        <br>
                        <label for="inputPassword" class="visually-hidden">Password</label>
                        <input type="password" name="password" id="inputPassword1" class="form-control" placeholder="Password" required>
                        <br>
                        <button class="w-100 btn btn-lg btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg> <?php echo e(trans('labels.accedi')); ?></button>
                        <br> <br>
                    </form>

                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <img src="images/<?php echo e(trans('images.registrati')); ?>" class="img-fluid">
                    <hr class="featurette-divider">

                    <form action="register.php" name="registrazione" method="post" style="margin-top: 2em">
                        <?php echo csrf_field(); ?>
                        <label for="inputNomeUtente"  class="visually-hidden"><?php echo e(trans('labels.nomeUtente')); ?></label>
                        <input type="text" name="nomeUtente" id="inputNomeUtente" class="form-control" placeholder="<?php echo e(trans('labels.nomeUtente')); ?>" required>
                        <span class="invalid-input" name="invalid-input" id="invalid-input">
                            
                        </span>
                        <br>
                        <label for="inputEmail" class="visually-hidden"><?php echo e(trans('labels.indirizzoMail')); ?></label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="<?php echo e(trans('labels.indirizzoMail')); ?>" >
                        <br>
                        <label for="inputEmail" class="visually-hidden"><?php echo e(trans('labels.confermaIndirizzoMail')); ?></label>
                        <input type="email" id="inputEmailC"  class="form-control" placeholder="<?php echo e(trans('labels.confermaIndirizzoMail')); ?>" >
                        <br>
                        <label for="inputPassword" class="visually-hidden">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
                        <br>
                        <label for="inputPassword" class="visually-hidden"><?php echo e(trans('labels.confermaPassword')); ?></label>
                        <input type="password" id="inputPasswordC" class="form-control" placeholder="<?php echo e(trans('labels.confermaPassword')); ?>" >
                        <br>
                        <button class="w-100 btn btn-lg btn-outline-light" type="submit"> <!--onclick="event.preventDefault(); checkNomeUtente()"-->  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg> <?php echo e(trans('labels.registrati')); ?> </button>
                        
                    </form>
                </div>
            </div>
      
            <hr class="featurette-divider">
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/publicSection/login.blade.php ENDPATH**/ ?>