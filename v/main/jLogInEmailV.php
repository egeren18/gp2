<body class="blue-grey font-13">

    <div class="flexbox">
        <div class="card hoverable m-t-100 b-r-7 width-270">
            <form id="form_validation" action="../c/main.php?m=validateEmail" method="post">
                <div class="p-l-10 p-r-10">
                    <div class="center p-t-20">
                        <img class="responsive-img center" src="../images/logoGG.svg" width="170">
                    </div>
                    <div class="row">
                        <div class="col s12 m-t-10">
                            <div class="input-field">
                                <i class="material-icons prefix blue-text">email</i>
                                <input name="userEmail" placeholder="" id="icon_prefix" type="email" class="validate" required>
                                <label for="icon_prefix">Correo Electr&oacute;nico:</label>
                                <span class="helper-text" data-error="Escriba una direcci&oacute;n v&aacute;lida" data-success=""></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4 m-t--20">
                            <button type="submit" class="waves-effect waves-light btn blue btn-small">Continuar</button>
                        </div>
                        <div class="col s8 m-t--20 m-b-20">
                            <a href="../c/main.php?m=forgotPassword" class="font-14 right">¿Olvidó su contraseña?</a><br />
                            <a href="../c/main.php?m=logInProblems" class="font-14 right">¿Problemas de autenticación?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="flexbox">
        <div class="p-t-20">
            <a class="white-text" href="../c/main.php?m=cookies">Cookies</a>
            <span class="white-text">|</span>
            <a class="white-text" href="../c/main.php?m=privacy">Privacidad</a>
            <span class="white-text">|</span>
            <a class="white-text" href="../c/main.php?m=responsibility">Responsabilidad</a>
            <span class="white-text">|</span>
            <a class="white-text" href="../c/main.php?m=aboutUs">Nosotros</a>
        </div>
    </div>

    <div class="flexbox">
        <div class="p-t-20">
            <a class="p-r-5" target="_blank" href="http://www.twitter.com/GpSagra">
                <img src="../images/social/twitter_white.svg" width="25">
            </a>
            <a class="p-r-5" target="_blank" href="http://www.facebook.com/SagraGestiondeProyectos">
                <img src="../images/social/facebook_white.svg" width="25">
            </a>
            <a class="p-r-5" target="_blank" href="http://www.linkedin.com/showcase/sagragp">
                <img src="../images/social/linkedin_white.svg" width="25">
            </a>
            <a class="p-r-5" target="_blank" href="http://www.instagram.com/Sagra_GP">
                <img src="../images/social/instagram_white.svg" width="25">
            </a>
            <a class="" target="_blank" href="">
                <img src="../images/social/youtube_white.svg" width="25">
            </a>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        var css = 'table td:hover{ background-color: #00ff00 }';
        var style = document.createElement('style');
        if (style.styleSheet) {
            style.styleSheet.cssText = css;
        }
        else {
            style.appendChild(document.createTextNode(css));
        }
        document.getElementsByTagName('head')[0].appendChild(style);
    });
    </script>