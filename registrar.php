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
    <div class="container-fluid">

        <header>
            <nav class="top-bar">
                <div class="row">
                    <div class="col"><a class="logo" href="./index.php">TuTicket</a></div>
                </div>
            </nav> 
            
            <section class="registrar-background">
                <div class="row">
                    <div class="col-sm">
                        <img src="./img/imagen07.png" alt="" class="event-img">
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm"><h1 class="detalle-tittle">Evento 1</h1></div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h2 class="registrar-subtittle">Tipo de entrada</h2>
                            </div>
                            <div class="col-sm">
                                <h2 class="registrar-subtittle">Cantidad</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="tipo-entrada">Menor ¢2500</p>
                            </div>
                            <div class="col-sm">
                                <p class="cantidad"><span class="sumar-restar">-</span> # <span class="sumar-restar">+</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="tipo-entrada">Adulto ¢3500</p>
                            </div>
                            <div class="col-sm">
                                <p class="cantidad"><span class="sumar-restar">-</span> # <span class="sumar-restar">+</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h3>Cantidad de entradas: <span>#</span></h2>
                            </div>
                            <div class="col-sm">
                                <h3>Total: <span>#</span></h2>
                            </div>
                        </div>
                        <div class="btn-container">
                            <div class="row">
                                <div class="col-3">
                                    <button class="regresar-btn" type="submit">
                                        <a href="./detalle.php" class="button-text">Regresar</a>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="confirmar-btn" type="submit">
                                        <a href="./confirmar.php" class="btn-text">Confirmar</a>
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