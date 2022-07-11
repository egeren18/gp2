<body class="blue-grey font-13">

    <div class="flexbox">
        <div class="card hoverable m-t-100 b-r-7 width-270">
            <form id="form_validation" action="../c/main.php?m=sessionStart&c=<?php echo $c; ?>" method="post">
                <div class="p-l-10 p-r-10">
                    <div class="center p-t-20">
                        <img class="responsive-img center" src="../images/logoGG.svg" width="170">
                    </div>
                    <div class="row">
                        <div class="col s12 m-t-10">
                            <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                                <input name="userPassword" placeholder="" id="icon_prefix" type="password" class="validate" required>
                                <label for="icon_prefix">Contrase&ntilde;a</label>
                                <span class="helper-text" data-error="" data-success=""></span>
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
