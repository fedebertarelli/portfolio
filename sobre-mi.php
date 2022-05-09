<?php
$titulo = "Sobre Mi";
$pagina = "sobre-mi";

include_once ("header.php");

?>
        <main>  
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-12 mt-4 mb-4">
                        <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                        <p class="pb-sm-5">Licienciado en admisnitración, estoy a cargo de la administración de un Hosptial y actualmente me encuentro estudiando programación Full Stack.</p>
                        <a href="https://github.com" target="_blank" title="Github">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href class="btn btn-rojo text-left offset-4"> Descargar mi CV
                            <i class="fas fa-download"></i>
                        </a>
                    </div>    
                    <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                        <img src="images/foto-cv.jpg" alt="foto cv" class="foto-cv">
                    </div>
                </div>  
            </div>
            <section id= "tegnologia" class="color-gradiente pb-5">
                <div class="container">
                    <div class=row>
                        <div class="col-12 my-5">
                            <h2>Tecnologías de programación</h2>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>Javascript</h3>
                                <img src="images/javascript.jpeg" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>PHP</h3>
                                <img src="images/php.jpg" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>HTML5</h3>
                                <img src="images/html.png" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>React.js</h3>
                                <img src="images/react.js" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>jQuery</h3>
                                <img src="images/jquery.jpg" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>Botstrap</h3>
                                <img src="images/bootstrap.png" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2 col-6">
                            <div class="card py-5 px-4 mx-0">
                                <h3>Laravel</h3>
                                <img src="images/laravel.png" width="90" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>MySQL</h3>
                                <img src="images/mysql.png" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>CSS</h3>
                                <img src="images/css.png" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>Git</h3>
                                <img src="images/git.png" width="60" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>Apache</h3>
                                <img src="images/apache.png" width="110" class="img-fluid d-block mx-auto apache">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="card py-5 px-4 mx-0">
                                <h3>MercadoPago</h3>
                                <img src="images/mercadopago.jpg" width="62" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id= "idiomas">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-sm-6 col-12 my-4">  
                            <div class="row mr-sm-1 bg-white card-idioma shadow">                                              
                                <div class="col-4 card text-center py-5">               
                                        <i class="fas fa-comment-alt"></i>
                                </div>
                                <div class="col-8 align-self-center">                
                                        <h3>IDIOMAS</h3>
                                        <p>INGLES: Intermedio
                                        <br>ESPAÑOL: Nativo
                                        <br>PORTUGUES: Basico</p>                                 
                                </div>
                            </div>   
                        </div>    
                        <div class="col-sm-6 col-12 my-sm-4">  
                            <div class="row ml-sm-1 bg-white card-idioma shadow">                                              
                                <div class="col-4 card text-center py-5">               
                                        <i class="fas fa-star"></i>
                                </div>
                                <div class="col-8 align-self-center">                
                                        <h3>HOBBIS</h3>
                                        <p>Futbol
                                        <br>Tenis
                                        <br>Salir</p>                                                   
                                </div>
                            </div>   
                        </div>    
                    </div>
                </div>
            </section>
            <section id= "experiencia">
                <div class="container">
                    <div class="row">
                            <div class="col-sm-1 col-4 my-sm-4 ml-sm-5">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="col-sm-3 col-8 align-self-center">    
                                <h2>Experiencia Laboral</h2>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12 my-4">
                            <div class="row mr-1 ministerio card-experiencia bg-white shadow">
                                <div class="col-4 py-4 pl-5">
                                    <img src="images/ministerio.jpg" alt="">
                                </div>
                                <div class="col-8 my-4 pl-0">
                                    <h3>Jefe de admisnitración</h3>
                                    <h4>Hospital Misericorida</h4>
                                    <p>NOV 2018 - PRESENTE</p>
                                    <ul class="pl-0 ml-3">
                                        <li>A cargo area de Tesoreria</li>
                                        <li>A cargo area de Contable</li>
                                        <li>A cargo area de Compras</li>
                                        <li>A cargo aera de Recupero del Gasto</li>
                                    </ul>
                                    <div class="text-right">
                                        <a href="https://www.cba.gov.ar/reparticion/ministerio-de-salud/" target="_blank" class="btn"> ver empresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 my-4">
                            <div class="row ml-1 ministerio card-experiencia bg-white shadow">
                                <div class="col-4 py-4 pl-5">
                                    <img src="images/ministerio.jpg" alt="">
                                </div>
                                <div class="col-8 my-4 pl-0">
                                    <h3>Administrtivo</h3>
                                    <h4>Hospital de Niños</h4>
                                    <p>SEP 2015- NOV 2018</p>
                                    <ul class="pl-0 ml-3">
                                        <li>Tareas de Tesoreria</li>
                                        <li>Tareas de Compras</li>
                                    </ul>
                                    <div class="text-right">
                                        <a href="https://www.cba.gov.ar/reparticion/ministerio-de-salud/" target="_blank" class="btn mt-4"> ver empresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 my-4">
                            <div class="row mr-1 ministerio card-experiencia bg-white shadow">
                                <div class="col-4 py-4 pl-5">
                                    <img src="images/ministerio.jpg" alt="">
                                </div>
                                <div class="col-8 my-4 pl-0">
                                    <h3>Administrtivo</h3>
                                    <h4>Hospital Tránsito Cáseres</h4>
                                    <p>Ago 2011- Sep 2015</p>
                                    <ul class="pl-0 ml-3">
                                        <li>Tareas de Tesoreria</li>
                                        <li>Tareas de Compras</li>
                                    </ul>
                                    <div class="text-right">
                                        <a href="https://www.cba.gov.ar/reparticion/ministerio-de-salud/" target="_blank" class="btn mt-4"> ver empresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 my-4">
                            <div class="row ml-1 ministerio card-experiencia bg-white shadow">
                                <div class="col-4 py-4 pl-5">
                                    <img src="images/allus.jpg" alt="">
                                </div>
                                <div class="col-8 my-4 pl-0">
                                    <h3>Antencion al Cliente</h3>
                                    <h4>ALLUS </h4>
                                    <p>Sep 2009- Dic 2009</p>
                                    <ul class="pl-0 ml-3">
                                        <li>Atención telefonica al cliente</li>
                                        <li>Facturación</li>
                                    </ul>
                                    <div class="text-right">
                                        <a href="https://www.grupokonecta.com/?fbclid=IwAR1IrOSBklQomyfhITqyB0y_9KxLBy7ap1GheKj6lXSRooucvj1fOqkkYOo" target="_blank" class="btn mt-4"> ver empresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id= "estudios">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1 col-4 my-4 ml-5">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="col-3 align-self-center">    
                            <h2>Estudios</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12 my-4">
                            <div class="row mr-1 ministerio card-experiencia bg-white shadow">
                                <div class="col-4 py-4 pl-5">
                                    <img src="images/photo.png" alt="">
                                </div>
                                <div class="col-8 my-4 pl-0">
                                    <h3>Programación Web php Full Stack</h3>
                                    <h4>DePCSuite</h4>
                                    <p>NOV 2020 - PRESENTE</p>
                                    <ul class="pl-0 ml-3">
                                        <li>HTML & CSS, Bootstrap, Repositorio Git/Github.</li>
                                        <li>Lenguaje PHP.</li>
                                        <li>Base de datos y SQL.</li>
                                        <li>Framework PHP Laravel.</li>
                                    </ul>
                                    <div class="text-right">
                                        <a href="https://depcsuite.com/curso-programacion-web-full-stack/?v=d72a48a8ebd2" target="_blank" class="btn"> ver empresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 my-4">
                            <div class="row ml-1 ministerio card-experiencia bg-white shadow">
                                <div class="col-4 py-4 pl-5">
                                    <img src="images/logo_fce.png" alt="">
                                </div>
                                <div class="col-8 my-4 pl-0">
                                    <h3>Lic en Administrtivo</h3>
                                    <h4>Facultad de Cs Eco UNC</h4>
                                    <p>Mar 2008- Mar 2014</p>
                                    <ul class="pl-0 ml-3">
                                        <li>Competencias para conducir, las organizaciones hacia sus objetivos.</li>
                                        <li>Su actuación profesional estará orientada por principios éticos y criterios de responsabilidad social.</li>
                                    </ul>
                                    <div class="text-right">
                                        <a href="https://www.cba.gov.ar/reparticion/ministerio-de-salud/" target="_blank" class="btn"> ver empresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-12 txt-sm-left text-center pb-sm-0 pb-3">
                        <a href="https://github.com" target="_blank" title="Github">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="col-sm-3 col-12 txt-sm-left text-center pb-sm-0 pb-3 sponsor-sobre-mi"> 
                        Sponsor <a href="https://depcsuite.com/" target="_blank" title="DEPCSUITE">DePC Suite</a>
                    </div>
                    <div class="col-sm-3 col-12 txt-sm-left text-center pb-sm-0 pb-3"> 
                        <a href="mailto:fedebertarelli@gmail.com">fedebertarelli@gmail.com.ar</a>
                    </div>
                    <div class="col-sm-3 col-12 text-right">
                        <a href="https://api.whatsapp.com/send?phone=" title="Whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>