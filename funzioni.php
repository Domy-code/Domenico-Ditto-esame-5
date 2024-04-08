<?php
function creaInizioPagina($title)
{
    $str =
        '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./MINCSS/style.min.css">
        <title>' . $title . '</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/f820ac8088.js" crossorigin="anonymous"></script>
    </head>
    
    <body>';
    return $str;
}
function creaNavbar($accesso)
{
    if ($accesso == false) {
        $str = '
    <header class="bg-dark sticky-top">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand pe-3 border-end" href="#" title="Mio logo">LOGO</a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
                <span class="navbar-toggler-icon" data-bs-target="#navbarOffcanvas"></span>
            </button>
            <div class="offcanvas offcanvas-start " data-bs-hideresize="true" id="navbarOffcanvas">
                <div class="offcanvas-header bg-primary text-light">
                    <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <ul class="navbar-nav justify-content-end me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Pagina iniziale</a>
                        </li>
                    </ul>
                    <ul class="d-flex navbar-nav">
                        <button type="button" class="btn btn-primary" id="regButton">Registrati</button>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>';
    } else if ($accesso == true) {
        $str = '
        <header class="bg-dark sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand pe-3 border-end" href="#" title="Mio logo">LOGO</a>
                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvas">
                    <span class="navbar-toggler-icon" data-bs-target="#navbarOffcanvas"></span>
                </button>
                <div class="offcanvas offcanvas-start " data-bs-hideresize="true" id="navbarOffcanvas">
                    <div class="offcanvas-header bg-primary text-light">
                        <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
                        <button type="button" class="btn-close text-reset btn-close-white"
                            data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body bg-dark">
                        <ul class="navbar-nav justify-content-end me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Pagina iniziale</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" title="Categorie" role="button"
                                    data-bs-toggle="dropdown">Tipologia</a>
                                <ul class="dropdown-menu dropdown-menu-dark bg-darkGray">
                                    <li>
                                        <a href="#" class="dropdown-item text-white"
                                            title="Vai alla categoria Animazione">Film</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item text-white"
                                            title="Vai alla categoria fantascienza">Serie Tv</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" title="Categorie" role="button"
                                    data-bs-toggle="dropdown">Categorie</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a href="#" class="dropdown-item"
                                            title="Vai alla categoria Animazione">Animazione</a></li>
                                    <li><a href="#" class="dropdown-item"
                                            title="Vai alla categoria fantascienza">fantascienza</a></li>
                                    <li><a href="#" class="dropdown-item" title="Vai alla categoria horro">Horror</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> 

                        <ul class="d-flex navbar-nav">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2 bg-mediumGray border-0 rounded-1 rounded-0 inputSearch" type="search"  id="navBarSearchItem" placeholder="Cerca" aria-label="Search">
                                <button class="btn btn-outline-primary border-0" type="submit">
                                    <i class="fas fa-search"></i> 
                                </button>
                            </form>
                            
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle text-white" href="#" title="Profilo" role="button"
                                    data-bs-toggle="dropdown"><i class="fas fa-user"></i> Profilo</a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                    <li><a href="#" class="dropdown-item text-white"
                                            title="Vai alla pagina dei dati personali">Dati
                                            personali</a></li>
                                    <li><a href="#" class="dropdown-item text-white"
                                            title="Vai alla pagina di modifica password">Modifica password</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a href="#" class="dropdown-item text-white"
                                            title="Vai alla pagina dei crediti">Crediti</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>';
    }

    return $str;
}

function creaFooter()
{
    $str = '
    <footer>
    <div class="row justify-content-center pt-4 pb-4 bg-dark">
        <div class="col-4 col-lg-3 d-flex justify-content-center">
            <ul class="list-unstyled mb-0">
                <li>
                    <a class="text-body text-muted" href="#!">Link 1</a>
                </li>
                <li>
                    <a class="text-body text-muted" href="#!">Link 2</a>
                </li>
                <li>
                    <a class="text-body text-muted" href="#!">Crediti</a>
                </li>
            </ul>
        </div>

        <div class="col-4 col-lg-3 d-flex justify-content-center">
            <ul class="list-unstyled mb-0">
                <li>
                    <a class="text-body text-muted" href="#!">Link 1</a>
                </li>
                <li>
                    <a class="text-body text-muted" href="#!">Link 2</a>
                </li>

            </ul>
        </div>

        <div class="col-4 col-lg-3 d-flex justify-content-center">
            <ul class="list-unstyled mb-0">
                <li>
                    <a class="text-body text-muted" href="#!">Link 1</a>
                </li>
                <li>
                    <a class="text-body text-muted" href="#!">Link 2</a>
                </li>

            </ul>
        </div>
    </div>

</footer>

</body>

</html>';
    return $str;
}
