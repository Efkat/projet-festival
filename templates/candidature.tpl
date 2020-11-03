<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Candidature</title>
    </head>
    <body>
        <header>
            

        </header>
        <main>
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
                        <label for="annee_creation">Année de Création</label>
                        <input name="annee_creation" type="number" value="{$old_form['annee_creation']}"> 
                    </div>
                    <div>
                        <label for="presentation">Présentation</label>
                        <textarea name="presentation"></textarea>
                    </div>
                    <div>
                        <label for="experience">Expérience</label>
                        <textarea name="experience"></textarea>
                    </div>
                    <div>
                        <label for="site_web">Site Web</label>
                        <input name="site_web" type="text">
                    </div>
                    <div>
                        <label for="soundcloud">Soundcloud*</label> {*NULLABLE*}
                        <input name="soundcloud" type="text">
                    </div>
                    <div>
                        <label for="youtube">Youtube*</label> {*NULLABLE*}
                        <input name="youtube" type="text">
                    </div>
                    <div>
                        <label for="statut_assoc">Statut Association</label>
                        <input name="statut_assoc" type="checkbox">
                    </div>
                    <div>
                        <label for="is_sacem">Sacem</label>
                        <input name="is_sacem" type="checkbox">
                    </div>
                    <div>
                        <label for="have_producteur">Producteur</label>
                        <input name="have_producteur" type="checkbox">
                    </div>
                    <div> {*Préciser orthographe à suivre ? Vérification ?*}
                        <label for="membres">Membres</label>
                        <textarea name="membres"></textarea>
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