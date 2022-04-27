

<?php $__env->startSection('titolo', 'Hangover\'s Management - Home'); ?>

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
                    <a class="nav-link active" aria-current="page" href="/"><?php echo e(trans('labels.home')); ?></a>
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
                <a href="index.php"><img class="img-fluid d-block w-100" src="images/welcome.jpg" alt="Hangover"></a>
            </div>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <a href="contatti.php"><img src="images/<?php echo e(trans('images.famiglia')); ?>" class="img-fluid"></a>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
            <hr class="featurette-divider">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/<?php echo e(trans('images.nostriEventi')); ?>">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="hangoverAttoI.php" ><img src="images/I.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto I</h5>
                                    <p class="ombra">09/12/17 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="hangoverAttoII.php"><img src="images/II.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto II</h5>
                                    <p class="ombra">03/03/18 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="hangoverAttoIII.php"><img src="images/III.jpg" class="d-block w-100" alt="..."></a>                
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto III</h5>
                                    <p class="ombra">19/05/18 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="FDFEI.php"><img src="images/FDFE1.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">FDFE - Prima edizione</h5>
                                    <p class="ombra">09/09/18 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="hangoverAttoIV.php"><img src="images/IV.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto IV</h5>
                                    <p class="ombra">24/11/18 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="hangoverAttoV.php"><img src="images/V.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto V</h5>
                                    <p class="ombra">26/01/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="Carnival.php"><img src="images/Carnival.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Carnival Party</h5>
                                    <p class="ombra">03/03/19 - Circus Beatclub.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="hangoverAttoVI.php"><img src="images/VI.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Hangover Atto VI</h5>
                                    <p class="ombra">11/05/19 - Social Club.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="FDFE2.php"><img src="images/FDFE2.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">FDFE - Seconda edizione</h5>
                                    <p class="ombra">08/09/19 - Social Club.</p>
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

                <div class="col-lg-6">
                    <img class="img-fluid" src="images/<?php echo e(trans('images.staff')); ?>">
                    <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/cristiano.jpg" class="d-block w-100" alt="Cristiano Bellanca - Founder & CEO.">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Cristiano Bellanca</h5>
                                    <p class="ombra">Founder & CEO.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/sanbet.jpg" class="d-block w-100" alt="Alessandro Bettinzana - Founder & CFO.">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Alessandro Bettinzana</h5>
                                    <p class="ombra">Founder & CFO.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/genna.jpg" class="d-block w-100" alt="Alessandro Gennari - Founder & Graphic Designer.">             
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Alessandro Gennari</h5>
                                    <p class="ombra">Founder & Graphic Designer.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/mark.jpg" class="d-block w-100" alt="Marco Andreoli - Founder, Social Media Manager & DJ">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Marco Andreoli</h5>
                                    <p class="ombra">Founder, Social Media Manager & DJ.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/elia.jpg" class="d-block w-100" alt="Elia Gobbi - Founder, Public Relations Manager & DJ">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="ombra">Elia Gobbi</h5>
                                    <p class="ombra">Founder, Public Relation Manager & DJ.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>    
                </div>
            </div>
             <hr class="featurette-divider">
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/index.blade.php ENDPATH**/ ?>