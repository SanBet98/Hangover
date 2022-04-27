@extends('layouts.master')

@section('titolo', 'Hangover\'s Management - Contatti')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bianco-opaco bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/logoNavbar.png" height="40px" width="90px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="storia.php">La nostra storia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contatti.php">Contatti</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Eventi
                            </a>
                            <ul class="dropdown-menu bg-dark-dropdown" aria-labelledby="navbarDropdown">
                                <li><center><b>Prossimi eventi</b></center></li>
                        <li><a class="dropdown-item bianco-opaco" href="#"><center>Stay Tuned</center></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><center><b>Eventi passati</b></center></li>
                        <li><a class="dropdown-item bianco-opaco" href="hangoverAttoI.php"><center>Hangover Atto I</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="hangoverAttoII.php"><center>Hangover Atto II</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="hangoverAttoIII.php"><center>Hangover Atto III</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="FDFEI.php"><center>FDFE 1° Edizione</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="hangoverAttoIV.php"><center>Hangover Atto IV</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="hangoverAttoV.php"><center>Hangover Atto V</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="Carnival.php"><center>Carnival Party</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="hangoverAttoVI.php"><center>Hangover Atto VI</center></a></li>
                        <li><a class="dropdown-item bianco-opaco" href="FDFE2.php"><center>FDFE 2° Edizione</center></a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>Cerca</button>
                    </form>
                </div>
            </div>
        </nav>
@endsection

@section('corpo')
<br>
        <div class="container">
            <div class="row">
                <a href="index.php"><img class="img-fluid d-block w-100" src="images/welcome.jpg" alt="Hangover"></a>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/numeriUtili.png" class="img-fluid">
                    <hr class="featurette-divider">
                    <center>
                        <h1><b>PREVENDITE E TAVOLI</b></h1>
                        <h3><b>ALESSANDRO BETTINZANA</b></h3>
                        <h5> Cell. 366 343 11 08 </h5>
                        <br>
                        <h1><b>INFO GENERALI</b></h1> 
                        <h2><b>CRISTIANO BELLANCA</b></h2>
                        <h5> Cell. 328 461 82 83 </h5>
                    </center>    
                    <br><br>

                </div>
                <div class="col-md-6">
                    <img src="images/famiglia.png" class="img-fluid">
                    <hr class="featurette-divider">
                    <center><h1><b>SCRIVI ALLO STAFF</b></h1></center>
                    <div class="mb-3">
                        <label for="famiglia1" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" id="famiglia1" placeholder="nome@esempio.com">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="famiglia2" class="form-label">Messaggio</label>
                        <textarea class="form-control" id="famiglia2" rows="3" placeholder="Scrivi allo staff"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-light" type="submit" width=><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                </svg> Invia</button></div>
                    </div>
                </div>

            </div>

            <hr class="featurette-divider">
@endsection



