<!DOCTYPE html>
<html>
<head>
    <title>formulaire</title>
    <link href="../../bootstrap-5.2.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/portefolio.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <center>
                <article class="col-md-5">
                    <h5 class="d-inline p-2 text-bg-dark">maison des ligue</h5>
                    <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 15px">page de connexion</h6>
                </article>
            </center>
        </div>
        <hr class="my-5" />
 <center>
        <div>
            <article>
               
            <form action= "../controleur/connexion.php" method="post">
                    <label for="user">user :</label>
                    <input id="user" type ="text" class="text-primary" name="user" required><br/>
            </article>

            <article >
                    <label for="password">password :</label>
                    <input id="password" type ="password" name="password" required>
            </article>
            
        </div>
        </br>
        <div >
            <article>
             <button class="btn btn-danger" type ="submit">ok</button>
            </article>
        </form>

        </div></center>
    </div>
</body>
</html>    