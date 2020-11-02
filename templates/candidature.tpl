<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Candidature</title>
    </head>
    <main>
        <header>
            

        </header>
        <body>
            <h1>Candidature</h1>
            <section>

            {*
            Clés:
                nom_groupe
                id_departement
                id_scene
                id_representant
                id_style

            A saisir:
                annee_creation
                presentation
                experience
                site_web
                soundcloud
                youtube
                statut_assoc
                is_sacem
                have_producteur
                membres
            *}
            
                <form action="./candidature" method="POST">
                    <div>
                        <label for="nom">Nom</label>
                        <input name="nom" type="text" value="{$old_form['nom']}" required> 
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
        </body>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </main>




</html>