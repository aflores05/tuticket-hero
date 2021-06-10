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
        
            <section class="detalle-background">
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
                                <p class="subtittle">Lugar: <span class="subtittle-paragraph">Sitio</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="subtittle">Fecha y hora: <span class="subtittle-paragraph">dd/mm/yyyy - 00:00</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="subtittle">Categoría: <span class="subtittle-paragraph">Categoría</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="subtittle">Modalidad: <span class="subtittle-paragraph">Gratuita o de pago</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="subtittle">Censura: <span class="subtittle-paragraph">Mayores de 18 o todo público</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="subtittle">Descripción: <span class="subtittle-paragraph">Lorem ipsum Loren ipsum Loren ipsum Loren ipsum</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <a class="reservar-link" href="./registrar.php"><button class="reservar-submit" type="submit">
                                    <p class="reservar-txt">RESERVAR</p>
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
        </header>

        <section class="relacionados-section">
            
            <h2>Eventos relacionados</h2>
            <div class="relacionados-container">

                <div class="row">
                    <div class="col-sm-3">
                        <img src="./img/imagen02.png" class="img-relacionados" alt="">
                        <p class="img-relacionados-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-btn" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                    <div class="col-sm-3">
                        <img src="./img/imagen06.png" class="img-relacionados" alt="">
                        <p class="img-relacionados-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-btn" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                    <div class="col-sm-3">
                        <img src="./img/imagen04.png" class="img-relacionados" alt="">
                        <p class="img-relacionados-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-btn" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                    <div class="col-sm-3">
                        <img src="./img/imagen03.png" class="img-relacionados" alt="">
                        <p class="img-relacionados-name">Nombre</p>
                        <a href="./detalle.php"><button class="detalle-btn" type="submit">
                            <p class="detalle-text">DETALLE</p>
                        </button></a>
                    </div>
                </div>

        </section>

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