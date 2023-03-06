 <html>
    <head>
    <link rel="stylesheet" href="../../css/portefolio.css">
    <link rel="stylesheet" href="../../css/portefolio.css">
    
    </head>
    <body>
        <script src="../../js/portefolio.js"></script>
        <div class="cotn_principal">
        <div class="cont_centrar">

        <div class="cont_login">
        <div class="cont_info_log_sign_up">
            <div class="col_md_login">
        <div class="cont_ba_opcitiy">
                <h2>se connecter </h2>  
        <button class="btn_login" onclick="cambiar_login()">se connecter </button>
        </div>
        </div>
        <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
        <h2>S'enregistrer</h2>

        

        <button class="btn_sign_up" onclick="cambiar_sign_up()">S'enregistrer</button>
        </div>
        </div>
            </div>

            
            <div class="cont_back_info">
            
            </div>
        <div class="cont_forms" >
        <div class="cont_form_login">
        <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
        <h2>se connecter </h2>
        <form action= "../controleur/connexion.php" method="post">
            <input id="user" type ="text" class="text-primary" name="user" placeholder="nom utilisateur" required>
            <input id="password" type ="password" name="password" placeholder="Password" required>
            <button class="btn_login" type="submit" onclick="cambiar_login()">se connecter </button>
        </form>
        </div>
        
        <div class="cont_form_sign_up">
        <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
            <h2>S'enregistrer</h2>
            <form action= "../controleur/enregistrer.php" method="post">
                <input id="user" type ="text" class="text-primary" name="user" placeholder="nom utilisateur" required>
                <input id="password" type ="password" name="password" placeholder="Password" required>
                <button class="btn_sign_up" onclick="cambiar_sign_up()">S'enregistrer</button>
            <form>

        </div>

            </div>
            
        </div>
        </div>
        </div>
    </body>
</html>