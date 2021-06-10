<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>TuTicket</title>
</head>
<body>
    <body>
        <div class="container-fluid">
    
            <header>
                <nav class="top-bar">
                    <div class="row">
                        <div class="col"><a class="logo" href="./index.php">TuTicket</a></div>
                    </div>
                </nav>  
                
                <section class="confirmar-background">
                    <div class="row">
                        <div class="col-sm">
                            <img src="./img/imagen07.png" alt="" class="event-img">
                        </div>
                        <div class="col-sm">
                            <div class="row">
                                <div class="col-sm"><h1 class="confirmar-tittle">Datos personales</h1></div>
                            </div>
                            <div class="subtittle-container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="confirmar-subtittle">Nombre</h2>
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" placeholder="Ingrese su nombre" class="confirmar-input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="confirmar-subtittle">Apellidos</h2>
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" placeholder="Ingrese sus apellidos" class="confirmar-input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="confirmar-subtittle">Email</h2>
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" placeholder="Ingrese su correo electrónico" class="confirmar-input">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="btn-container">
                                <div class="row">
                                    <div class="col-3">
                                        <button class="regresar-btn" type="submit">
                                            <a href="./registrar.php" class="button-text">Regresar</a>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="confirmar-btn" type="submit">
                                            <a href="./resumen.php" class="btn-text">Confirmar</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </section>
            </header>

            <footer>

                <div class="row">
                    <div class="col">
                        <p class="footer-logo" href="#">TuTicket</p>
                    </div>
                    <div class="col">
                        <p class="phone-paragraph"><span><img src="./img/svg/phone.svg" class="placephone-icon" alt=""></span>26369999</p>
                    </div>
                    <div class="col">
                        <nav>
                            <ul class="social-ul">
                                <li class="facebook"><a href="#" aria-label="facebook" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
    
            </footer>
        </div>
</body>
</html>