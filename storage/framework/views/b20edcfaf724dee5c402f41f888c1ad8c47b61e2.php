<?php $__env->startSection('titolo', 'Hangover\'s Management - Home PR'); ?>

<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bianco-opaco bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/logoNavbar.png" height="40px" width="90px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="homePR.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eventiPR.php">Eventi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="squadraPR.php">Il Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="anagraficaPR.php">Anagrafica</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
<div class="container">
            <div class="row">
                <img class="img-fluid d-block w-100" src="images/pr/areaPersonale.png" alt="Hangover">
            </div>
            <br>
            <hr class="featurette-divider">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid d-block w-100" src="images/pr/panoramicaVendite.png" alt="Hangover">
                    <hr class="featurette-divider">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Evento</th>
                                <th scope="col">Biglietti Venduti</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hangover Atto VII</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>Carnival Party II</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>School Is Over</td>
                                <td>8</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-6">
                    <img class="img-fluid d-block w-100" src="images/pr/prossimoEvento.png" alt="Hangover">
                     <hr class="featurette-divider">
                    <table class="table table-striped table-dark">
                    <tbody>
                        <tr>
                            <th scope="col">Nome</th>
                            <td scope="col">Hangover Atto VII</td>
                        </tr>

                        <tr>
                            <th scope="col">Data</th>
                            <td>30/09/2021</td>
                        </tr>
                        <tr>
                            <th scope="col">Location</th>
                            <td>Social Club</td>
                        </tr>
                        <tr>
                            <th scope="col">Resident DJs</th>
                            <td>10q <br> Mark Andrews <br> Wonik <br> Kintexa <br> STIGM4N <br> Siro <br> Jacopo Bertini</td>
                        </tr>
                        <tr>
                            <th scope="col">Voice</th>
                            <td>Enzo Bettari</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <br>
            <hr class="featurette-divider">
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hangover\resources\views/PRSection/homepr.blade.php ENDPATH**/ ?>