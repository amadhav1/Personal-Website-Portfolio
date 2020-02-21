<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    
                
    <link rel="stylesheet" type="text/css" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/css/style.css">
  
    <script 
        src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=6LdXatQUAAAAAN9ryst7BSmFF-WCDCqFXZWwFyxt"></script>


        <?php 
                if($_SERVER['SCRIPT_NAME'] == "/index.php"){
                        $site_title = "website";
                } 
                elseif($_SERVER['SCRIPT_NAME'] == "/skills/index.php"){
                        $site_title = "skills";
                }
                elseif($_SERVER['SCRIPT_NAME'] == "/resume/index.php"){
                        $site_title = "resume";
                }
                elseif($_SERVER['SCRIPT_NAME'] == "/portfolio/index.php"){
                        $site_title = "portfolio";
                }
                elseif($_SERVER['SCRIPT_NAME'] == "/contact/index.php"){
                        $site_title = "contact form";
                }
                else {
                        $site_title = "website";
                }

        ?>
        
    <title>Aaron Madhavan's <?php echo $site_title; ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9114046-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-9114046-1');
</script>

</head>
<body>
    <div class="container">
        <div class="block block--header">
            <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                            <a class="navbar-item" href="https://<?php echo $_SERVER['SERVER_NAME'];?>">
                                    <h1 class="title is-3 has-text-white">Aaron Madhavan</h1>
                            </a>
                            
                            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                            </a>
                    </div>
                                    
                    <div id="navbarBasic" class="navbar-menu">
                            <div class="navbar-start">
                                    <a class="navbar-item" href="/">
                                    Home
                                    </a>
                            
                                    <a class="navbar-item" href="/resume">
                                    Resume
                                    </a>
                            
                                    <a class="navbar-item" href="/skills">
                                    Skills
                                    </a>
                                    <a class="navbar-item" href="/portfolio">
                                    Website Examples
                                    </a>
                                    <a class="navbar-item" href="/contact">
                                    Contact
                                    </a>
 
                            </div>                     
                    </div>
            </nav>
        </div>
        <div class="block block--content">