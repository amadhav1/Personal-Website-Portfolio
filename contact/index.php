<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script 
        src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
    <title>Aaron's website</title>
</head>
<body>
    <div class="container">
        <div class="block block--header">
            <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                            <a class="navbar-item">
                                    <h1 class="title is-3 has-text-white">Aaron Media</h1>
                            </a>
                            
                            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                            </a>
                    </div>
                                    
                    <div id="navbarBasic" class="navbar-menu">
                            <div class="navbar-start">
                                    <a class="navbar-item" href="index.html">
                                    Home
                                    </a>
                            
                                    <a class="navbar-item" href="resume.html">
                                    Resume
                                    </a>
                            
                                    <a class="navbar-item" href="skills.html">
                                    Skills
                                    </a>
                                    <a class="navbar-item" href="portfolio.html">
                                    Website examples
                                    </a>
                                    <a class="navbar-item">
                                            Conact
                                    </a>
                            </div>                     
                    </div>
            </nav>
        </div>
        <div class="block block--content">
            <h1 class="title is-1 has-text-left is-uppercase">Contact form</h1>

            <form action="#" method="post">
                <div class="columns">
                    <div class="column is-half">
                            <div class="field">
                                <label class="label">First Name</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="First Name" name="fname">
                                </div>
                            </div>   
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Last Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Last Name" name="lname">
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="columns">
                    <div class="column is-half">
                            <div class="field">
                                <label class="label">E-mail Address</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Enter your Email" name="email">
                                </div>
                            </div>   
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Reason for Contact</label>
                            <div class="control">
                                <div class="select">
                                <select>
                                    <option>General contact</option>
                                    <option>Job offer</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Message</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Textarea" name="message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field is-grouped">
                            <p class="control">
                                <button type="submit" value="Submit" class="button is-primary">
                                Submit
                                </button>
                            </p>
                            <p class="control">
                                <button type="reset" value="Reset" class="button is-light">
                                Cancel
                                </button>
                            </p>
                        </div>
                    </div>
                </div>


            </form>
        </div>
        <div clas="block">  
            <footer class="footer is-dark">
                <div class="content has-text-white">
                    <h2 class="is-2 has-text-centered has-text-white">U.S. Marine Corps veteran</h2>

                    <p class="has-text-centered">&copy; 2019 Aaron Madhavan

                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script>
            $(document).ready(function() {
            (function() {
              var burger = document.querySelector('.burger');
              var nav = document.querySelector('#'+burger.dataset.target);
             
              burger.addEventListener('click', function(){
                burger.classList.toggle('is-active');
                nav.classList.toggle('is-active');
              });
            })();
            });
            </script>
</body>
</html>