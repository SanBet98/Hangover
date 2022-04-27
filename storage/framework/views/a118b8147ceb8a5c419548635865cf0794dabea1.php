<?php $__env->startSection('titolo', 'Hangover\'s Management - Hangover Atto V'); ?>

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
                    <a class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link" href="login.php"><?php echo e(trans('labels.accedi')); ?></a>
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
        <div class="container">
           <div class="row">
                <img class="img-fluid d-block w-100" src="images/hangover5.png" alt="Hangover">
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="images/<?php echo e(trans('images.galleria')); ?>">
                    <hr class="featurette-divider">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/atto5/1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto V</h5>
                                    <p class="ombra">26/01/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/atto5/2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto V</h5>
                                    <p class="ombra">26/01/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/atto5/3.jpg" class="d-block w-100" alt="...">             
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto V</h5>
                                    <p class="ombra">26/01/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/atto5/4.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto V</h5>
                                    <p class="ombra">26/01/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/atto5/5.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto V</h5>
                                    <p class="ombra">26/01/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/atto5/6.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto V</h5>
                                    <p class="ombra"> 26/01/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>    
                </div>  
               
                <div class="col-md-6">
                    <img src="images/<?php echo e(trans('images.numeriEvento')); ?>" class="img-fluid">
                    <hr class="featurette-divider">
                    <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <th scope="col"><?php echo e(trans('labels.data')); ?></th>
                                        <td>26/01/2019</td>
                                    </tr>
                                
                                    <tr>
                                        <th scope="col">Location</th>
                                        <td>Social Club</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Special Guests</th>
                                        <th scope="col">LUDOVICA PAGANI</th>
                                    </tr>
                                   
                                    <tr>
                                        <th scope="col">Resident DJs</th>
                                        <td>10q <br> Mark Andrews <br> Wonik <br> Kintexa <br> STIGM4N <br> Siro <br> Jacopo Bertini</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Vocalist</th>
                                        <td>Enzo Bettari</td>
                                    </tr>
                                    <tr>
                                        <th scope="col"><?php echo e(trans('labels.partecipanti')); ?></th>
                                        <td>1000</td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                       
                    <br><br>
                </div>
            </div>
           
            <hr class="featurette-divider">
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/publicSection/hangoverAttoV.blade.php ENDPATH**/ ?>