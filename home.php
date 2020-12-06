<?php session_start();?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>CV | JEREMIE BENAICHA</title>
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <link rel="stylesheet" type="text/css" href="style/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="aos/aos.css"/>
    </head>
    
    <header id="navbar" class="">
        <div id="float left" class="content-center">
            <ul class="float left">
                <li><a href="#accueil">CV - JEREMIE BENAICHA</a></li>
            </ul>
            <!-- menu principale -->
            <div id="menu" class="float right">
                <ul>
                    <li class="float left" ><a href="#wia" class="js-scrollTo">Qui je suis</a><div class="line"></div></li>
                    <li class="float left"><a href="#xp" class="js-scrollTo">Expérience</a><div class="line"></div></li>            
                    <li class="float left"><a href="#skills" class="js-scrollTo">Competences</a><div class="line"></div></li>                
                    <li class="float left"><a href="#contact" class="js-scrollTo">Contact</a><div class="line"></div></li>
                </ul>
            </div>
            <!-- menu burger -->
            <div id="menu-mobile">
                <div class="header__icon float right" id="header__icon"></div>
                <div id="menu-m" class="menu-resp">
                    <ul>
                        <li class="float left"><a href="#wia" class="js-scrollTo">Qui je suis</a><div class="line"></div></li>
                        <li class="float left"><a href="#xp" class="js-scrollTo">Expérience</a><div class="line"></div></li>            
                        <li class="float left"><a href="#skills" class="js-scrollTo">Competences</a><div class="line"></div></li>                
                        <li class="float left"><a href="#contact" class="js-scrollTo">Contact</a><div class="line"></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <body>
        <!-- Video -->
        <section id="accueil" class="js-scrollTo dlt">
            <div class="video" id="video">
                <iframe width="100%"
                        height="0px"
                        src="https://www.youtube.com/embed/0rl04qmExoI?autoplay=1&controls=0&showinfo=0&autohide=1&loop=1&playlist=0rl04qmExoI"
                        frameborder="0"
                        allow="accelerometer; autoplay; gyroscope; picture-in-picture; loop; controls; modestbranding;showinfo;"
                        allowfullscreen=""
                        showinfo
                        controls
                        >
                 </iframe>
            </div>
            
        </section>
        
        <!-- Qui je suis -->        
        <section id="wia">
            <div class="content-center">
                <h2 class="align center">Qui je suis ?</h2>
                <p class="align center coll"  data-aos="fade-right" data-aos-offset="300" data-aos-duration="2000">Passionné par l’informatique, mon intérêt s’est porté vers
                le développement de site internet et de ses multiples langages.
                Autodidacte, plusieurs projets ont accompagnés mon apprentissage dans ce domaine.
                J’ai eu la chance de travailler avec un designer graphique avec lequel
                j’ai réalisé ces différents sites dont je suis l’administrateur</p>
                <div class="align center">
                    <a href="#contact" class="btn js-scrollTo">Me contacter</a>
                </div>
            </div>
        </section>
        
        <!-- Experience -->
        <section id="xp" class="clear space">
            <div class="content-center align center xp">
                <h2  data-aos="fade-right" data-aos-duration="1000">Expérience</h2>
                <div class="box">
                    <div class="thumb float left"  data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000">
                        <img src="img/cleanov_300.png">                    
                        <div class="alt">
                            <p class="thumb-title">www.cleanov.com</p>
                            <a href="http://www.cleanov.com" class="btn">S'y rendre</a>
                        </div>                    
                    </div>
                </div>
                <div class="thumb float left"  data-aos="zoom-out" data-aos-delay="1000" data-aos-duration="1000">
                    <img src="img/mehdi-c_300.png">
                    <div class="alt">
                        <p class="thumb-title">www.mehdi-c.com</p>
                        <a href="http://www.mehdi-c.com" class="btn">S'y rendre</a>
                    </div>
                </div>
                <div class="thumb float left"  data-aos="zoom-out" data-aos-delay="1500" data-aos-duration="1000">
                    <img src="img/b&b_300.png">
                    <div class="alt">
                        <p class="thumb-title">www.benjamin-benaicha.com</p>
                        <a href="http://www.benjamin-benaicha.com" class="btn">S'y rendre</a>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="para1" id="xp-para"></div>
        
        <!-- Compétences -->
        <section id="skills" class="clear">
            
            <div class="content-center space">
                <h2 class="align center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Mes compétences</h2>
                
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    
                        <p class="align left float left">HTML & CSS</p><p id="percent1" class="align right float right">0%</p>
                        <div class="progressBar float left"><div id="progress_bar_html"></div></div>
                        
                        <p class="align left float left">PHP & WordPress</p><p id="percent2" class="align right float right">0%</p>
                        <div class="progressBar float left"><div id="progress_bar_php"></div></div>
                 
                        <p class="align left float left">JavaScript</p><p id="percent3" class="align right float right">0%</p>
                        <div class="progressBar float left"><div id="progress_bar_js"></div></div>
                        
                        <p class="align left float left">jQuery</p><p id="percent4" class="align right float right">0%</p>
                        <div class="progressBar float left"><div id="progress_bar_jQuery"></div></div>
                        
                        <p class="align left float left">Photoshop</p><p id="percent5" class="align right float right">0%</p>
                        <div class="progressBar float left"><div id="progress_bar_ps"></div></div>
                   
                </div>
                
            </div>
        </section>
        
        <!-- Autres -->
        <!--<section id="autre">
            <div class="para2"></div>
            <div class="align center content-center">
                <h2>Quelques détails...</h2>
                <p></p>
            </div>
        </section>-->
        
        <!-- Contact -->
        <section id="contact" class="clear space">
            <div class="trigger" data-aos="fade-right" data-aos-anchor="#contact" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="info">
                    <h2>Contactez-moi</h2>
                    <p>
                        ADRESSE : 6 rue Charles le Payen<br>
                        PORT : 06 72 26 15 16<br>
                        MAIL : jeremie.benaicha@gmail.com<br>
                    </p>
                </div>
            </div>
            <div class="formulaire content-center align center">                
            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert-success">
                    Votre Email a bien était envoyé
                </div>
            <?php endif; ?>
                <div>
                    <form action="post_contact.php" method="POST">
                        <input required class="name float right" type="text" name="name" placeholder="Name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '';?>">
                    </form>
                    <form action="post_contact.php" method="POST">
                        <input required class="email float right" type="email" name="email" placeholder="E-mail" <?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>>
                    </form>
                </div>
                <div>
                    <form action="post_contact.php" method="POST">
                        <div>
                            <textarea required class="message float right" type="text" name="message" placeholder="Message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>
                        </div>
                    </form>
                </div>
                <div class ="float right" style="width:100%;">
                    <button type="submit" class="btn float right">Send message</button>
                </div>
            </div>
            <!--<div class="formulaire content-center align center ">
                <form>
                    <div>
                        <input class="name float right" required type="text" name="name" placeholder="Votre Nom" value="">
                    </div>
                    <div>
                        <input required class="email float right" type="email" name="email" placeholder="Votre Email">
                    </div>
                    <div>
                        <textarea class="message float right" type="text" name="subject" placeholder="Votre Message"></textarea>
                    </div>
                </form>
                <div class ="float right" style="width:100%;">
                    <button type="submit" class="btn float right">ENVOYER</button>
                </div>
            </div>-->
            
        </section>
        
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/progress.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/scroll.js"></script>
        <script type="text/javascript" src="js/icon-burger.js"></script>
        <script type="text/javascript" src="aos/aos.js"></script>
        <script>AOS.init({});</script>
        
        
    </body>
    
    <footer style="background-color: #f2f2f2; padding: 20px 60px;">
        <div class="content-center">
            <div class="align center">
                <p style="font-size: 13px; color: #a6a6a6;">Copyright © 2018 design by <a href="https://www.benjamin-benaicha.com" style="color: #a6a6a6;">Benjamin Benaicha</a> Code by <a href="https://www.benjamin-benaicha.com" style="color: #a6a6a6;">Jermie Benaicha</a>. All rights reserved.   |    <a href="mailto:benjamin.benaicha@gmail.com" style="color: #a6a6a6;">Contact Us</a></p>
            </div>
        </div>    
    </footer>
</html>