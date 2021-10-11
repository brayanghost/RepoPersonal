<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brayan Rodriguez - Portafolio</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="estilo.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<body>
    <!-- Barra del Menu -->
    <header>
        <a href="#" class="logo">Brayan Rodríguez.</a>

        <div class="bx bx-menu" id="menu-icon"></div>

    </header>
    <!-- Home -->

    <section class="home" id="home">
        <div class="social">
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-dribbble' ></i></a>
            <a href="#"><i class='bx bxl-behance' ></i></a>
        </div>
        <div class="home-img">
            <img src="img/profile.png" alt="">
        </div>
        <div class="home-text">
            <span>Hola, yo soy</span>
            <h1>Brayan Rodríguez</h1>
            <h2>Desarrollador Back-Front End</h2>
            <p>Soy estudiante, desarrollador y programador Junior. <br> Me encantan los diseños minimalistas, <br> ¿Quieres saber mas acerca de mi?</p>
            <a href="#contact" class="btn">Contáctame</a>
        </div>

        <div class="scroll-down">
            <a href="#about">
                <i class='bx bx-mouse' ></i>
                <span>Más acerca de mí</span>
                <i class='bx bxs-down-arrow-alt' ></i>
            </a>
        </div>
    </section>

    <!-- Acerca de -->
    <section class="about" id="about">
        <div class="heading">
            <h2>¿Quien soy yo?</h2>
            <span>Una pequeña introducción acerca de mi</span>
        </div>

        <!-- Contenido Acerca de -->
        <div class="about-container">
            <div class="about-img">
                <img src="img/about.jpg" alt="">
            </div>
            <div class="about-text">
                <p>Para mi es un gusto tenerte aquí, parece que en relidad si quieres saber acerca de mí... Bueno, me llamo Brayan, soy estudiante de ADSI, tengo 19. Hace un año y medio aproximadamente conocí el mundo de la programación y el desarrollo web, se me da muy bien la verdad, he aprendido acerca del manejo y sintaxis de varios lenguajes de programación. Aquí encontraras algunas cositas que he realizado a lo largo de mi carrera y proyectos que ire desarrollando. Me mantengo despierto con algunos vasos de Pepsi cuando programo, por cierto, me encantan los videojuegos. </p>
                <div class="information">

                    <!-- Caja 1 -->
                    <div class="info-box">
                        <i class='bx bxs-user' ></i>
                        <span>Brayan Andres Rodríguez</span>
                    </div>

                    <!-- Caja 2 -->
                    <div class="info-box">
                        <i class='bx bxs-phone' ></i>
                        <span>+57 321 9666787</span>
                    </div>

                    <!-- Caja 3 -->
                    <div class="info-box">
                        <i class='bx bxs-envelope' ></i>
                        <span>barodriguez2857@misena.edu.co</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
        <div class="heading">
            <h2>Mis servicios</h2>
            <span>Y algunas de mis habilidades</span>
        </div>
        <div class="services-content">

            <!-- Caja 1 -->
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>JavaScript. Algunos conceptos y ejercicios.</h3>
                <a href="Lenguajes/javascriptdef.php">Mira lo que sé de JS</a>
            </div>

            <!-- Caja 2
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>PHP. Algunos conceptos y ejercicios.</h3>
                <a href="#">Mira lo que sé de PHP</a>
            </div> -->

            <!-- Caja 3 -->
            <div class="services-box">
                <i class='bx bx-server' ></i>
                <h3>¿Manuales de aplicación? Yo podria ayudarte con eso.  </h3>
                <a href="UserManual/indexmanual.php">Saber más</a>
            </div>

            <!-- Caja 4 -->
            <div class="services-box">
                <i class='bx bx-brush' ></i>
                <h3>¿Sabes que es un CRUD? Yo he desarrollado uno.</h3>
                <a href="/MiPortafolio/CRUD/juego.php">Echemosle un vistazo</a>
            </div>

        </div>
    </section>

    <!-- Contacto -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Mi Contacto</h2>
            <span>¿Enserio te gustaría contactar conmigo!?</span>
        </div>
        <div class="contact-form">
            <form action="">
                <input type="text" placeholder="Tu nombre aquí">
                <input type="email" name="" id="" placeholder="Tu E-mail aquí">
                <textarea name="" id="" cols="30" rows="10" placeholder="Escribe aquí tu mensaje..."></textarea>
                <input type="button" value="ENVIAR" class="contact-button">
            </form>
        </div>
    </section>

    <!-- Pie de Pagina -->
    <div class="footer">
        <h2>Brayan</h2>
        <div class="footer-social">
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
           
        </div>

    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; Soy Brayan All Right Reserved.</p>
    </div>



    <!-- Link To JS -->
    <script src="main.js"></script>
</body>
</html>