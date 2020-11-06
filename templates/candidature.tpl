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
            
                <form action="./candidature" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="nom_groupe-input">Nom du groupe</label>
                        <input id="nom_groupe-input" name="nom_groupe" type="text" value="{$old_form['nom_groupe']}" required>
                    </div>
                    <div>
                        <label for="departement-input">Département d'origine</label>
                        <select name="departement" id="departement-input">
                            {foreach from=$nom_depts item=nom_dept}
                                
                                <option value="{$nom_dept}" 
                                {if $nom_dept==$old_form['departement']} 
                                    selected        {*à tester*}
                                {/if}>{$nom_dept}</option>

                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label for="style-input">Style du groupe</label>
                        <select name="style" id="style-input">
                             {foreach from=$styles item=style}
                                
                                <option value="{$style}" 
                                {if $style==$old_form['style']} 
                                    selected        {*à tester*}
                                {/if}>{$style}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label for="scene-input">Scène du groupe</label>
                        <select name="scene" id="scene-input">
                            {foreach from=$scenes item=scene}
                                
                                <option value="{$scene}" 
                                {if $scene==$old_form['scene']} 
                                    selected        {*à tester*}
                                {/if}>{$scene}</option>
                            {/foreach}
                        </select>
                        </select>
                    </div>


                    <div>
                        <label for="image1-input">Photo du groupe n°1</label>
                        <input type="file" id="image1-input" name="image1">
                    </div>
                    <div>
                        <label for="image2-input">Photo du groupe n°2</label>
                        <input type="file" id="image2-input" name="image2">
                    </div>
                    <div>
                        <label for="piste1-input">Piste MP3 n°1</label>
                        <input name="piste1" id="piste1-input" type="file">
                    </div>
                    <div>
                        <label for="piste2-input">Piste MP3 n°2</label>
                        <input name="piste2" id="piste2-input" type="file">
                    </div>
                    <div>
                        <label for="piste3-input">Piste MP3 n°3</label>
                        <input name="piste3" id="piste3-input" type="file">
                    </div>
                    <div>
                        <label for="annee_creation-input">Année de Création</label>
                        <input id="annee_creation-input" name="annee_creation" type="number" min=2000 max=2020 value="{$old_form['annee_creation']}" required>
                    </div>
                    <div>
                        <label for="presentation-input">Présentation</label>
                        <textarea id="presentation-input" name="presentation" maxlength="500" required>{$old_form['presentation']}</textarea>
                    </div>
                    <div>
                        <label for="experience-input">Expérience</label>
                        <textarea id="experience-input" name="experience" maxlength="500" required>{$old_form['experience']}</textarea>
                    </div>
                    <div>
                        <label for="site_web-input">Site Web</label>
                        <input id="site_web-input" name="site_web" type="text" required value="{$old_form['site_web']}">
                    </div>
                    <div>
                        <label for="soundcloud-input">Soundcloud*</label> {*NULLABLE*}
                        <input id="soundcloud-input" name="soundcloud" type="text" value="{$old_form['soundcloud']}">
                    </div>
                    <div>
                        <label for="youtube-input">Youtube*</label> {*NULLABLE*}
                        <input id="youtube-input" name="youtube" type="text" value="{$old_form['youtube']}">
                    </div>
                    <div>
                        <label for="statut_assoc-input">Statut Association</label>
                        <input id="statut_assoc-input" name="statut_assoc" type="checkbox">
                    </div>
                    <div>
                        <label for="is_sacem-input">Sacem</label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox">
                    </div>
                    <div>
                        <label for="have_producteur-input">Producteur</label>
                        <input id="have_producteur-input" name="have_producteur" type="checkbox">
                    </div>
                    <div> {*Préciser orthographe à suivre ? Vérification ?*}
                        <label for="membres-input">Membres</label>
                        <textarea id="membres-input" name="membres" maxlength="500">{$old_form['membres']}</textarea>
                    </div>
                    <div>
                        <label for="technique-input">Fiche technique</label>
                        <input type="file" id="technique-input" name="technique">
                    </div>
                    <div>
                        <label for="sacem-input">Document SACEM ou tracklist détaillée</label>
                        <input type="file" id="sacem-input" name="sacem">
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