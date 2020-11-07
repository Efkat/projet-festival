<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <title>Register</title>
    </head>
    <body>
        <header>
            

        </header>
        <main>
            <h1>S'enregistrer</h1>
            <section>
                <form action="./register" method="POST">
                    <div>
                        <label for="nom">Nom</label>
                        <input name="nom" type="text" value="{$old_form['nom']}"> 
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input name="email" type="text" value="{$old_form['email']}"> 
                    </div>
                    <div>
                        <label for="pswd">Mot De Passe:</label>
                        <input name="pswd" type="password">
                    </div>
                        <input type="submit" value="Envoyer">
                </form>
                <a class="cancel" href="./">Annuler</a>
                <p>{$erreurs}</p>

            </section>
        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html>