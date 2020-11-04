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
                        <label for="annee_creation-input">Année de Création</label>
                        <input id="annee_creation-input" name="annee_creation" type="number" value="{$old_form['annee_creation']}" required>
                    </div>
                    <div>
                        <label for="presentation-input">Présentation</label>
                        <textarea id="presentation-input" name="presentation" maxlength="500" required></textarea>
                    </div>
                    <div>
                        <label for="experience-input">Expérience</label>
                        <textarea id="experience-input" name="experience" maxlength="500" required></textarea>
                    </div>
                    <div>
                        <label for="site_web-input">Site Web</label>
                        <input id="site_web-input" name="site_web" type="text" required>
                    </div>
                    <div>
                        <label for="soundcloud-input">Soundcloud*</label> {*NULLABLE*}
                        <input id="soundcloud-input" name="soundcloud" type="text">
                    </div>
                    <div>
                        <label for="youtube-input">Youtube*</label> {*NULLABLE*}
                        <input id="youtube-input" name="youtube" type="text">
                    </div>
                    <div>
                        <label for="statut_assoc-input">Statut Association</label>
                        <input id="statut_assoc-input" name="statut_assoc" type="checkbox" required>
                    </div>
                    <div>
                        <label for="is_sacem-input">Sacem</label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox" required>
                    </div>
                    <div>
                        <label for="have_producteur-input">Producteur</label>
                        <input id="have_producteur-input" name="have_producteur" type="checkbox" required>
                    </div>
                    <div> {*Préciser orthographe à suivre ? Vérification ?*}
                        <label for="membres-input">Membres</label>
                        <textarea id="membres-input" name="membres" maxlength="500"></textarea>
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