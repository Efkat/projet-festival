{extends file="base.tpl"}
{block name="title"}
    Candidature | Saisie
{/block}
{block name="content"}
    <main>
        <section class="jumbotron w-50 mx-auto my-4">
            <h1 class="display-1 text-center m-0">Candidature</h1>
            <hr class="my-4"/>
            <p class="h3 text-primary font-weight-bold">{$erreurs}</p>
            <form action="./candidature" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="my-3">
                        <label for="nom_groupe-input">Nom du groupe : </label>
                        <input type="text" class="form-control" id="nom_groupe-input" placeholder="Entrez le nom du groupe" value="{$old_form['nom_groupe']}" name="nom_groupe" required>
                    </div>
                    <div class="my-3">
                        <label for="departement-input">Département d'origine : </label>
                        <select class="custom-select" name="departement" id="departement-input" required>
                            {foreach from=$depts item=dept}
                                <option value="{$dept['num_dept']}" {if $dept['num_dept']==$old_form['departement']} selected {/if}>{$dept['departement']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="codepostal-input">Code Postal : </label>
                        <input type="text" class="form-control" id="codepostal-input" placeholder="Entrez votre code postal" value="{$old_form['codepostal']}" name="codepostal" required>
                    </div>
                    <div class="my-3">
                        <label for="phone-input">Numéro de téléphone : </label>
                        <input type="text" class="form-control" id="phone-input" placeholder="Entrez votre téléphone" value="{$old_form['phone']}" name="phone" required>
                    </div>
                    <div class="my-3">
                        <label for="style-input">Style du groupe : </label>
                        <select class="custom-select" name="style" id="style-input" required>
                            {foreach from=$styles key=num item=nom}
                                <option value="{$num}" {if $num==$old_form['style']} selected {/if}>{$nom} </option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="scene-input">Scène du groupe : </label>
                        <select class="custom-select" name="scene" id="scene-input" required>
                            {foreach from=$scenes key=num item=nom}
                                <option value="{$num}" {if $num==$old_form['scene']} selected {/if}>{$nom}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="annee_creation-input">Année de Création : </label>
                        <input placeholder="Entrez l'année de création du groupe" id="annee_creation-input" class="form-control" name="annee_creation" type="number" min=1990 max=2020 value="{$old_form['annee_creation']}" required>
                    </div>
                    <div class="my-3">
                        <label for="presentation-input">Présentation : </label>
                        <textarea placeholder="Présentez votre groupe en 500 caractères maximum..." id="presentation-input" class="form-control" name="presentation" maxlength="500" rows="3" required>{$old_form['presentation']}</textarea>
                    </div>
                    <div class="my-3">
                        <label for="experience-input">Expérience : </label>
                        <textarea placeholder="Résumez votre expérience" id="experience-input" class="form-control" name="experience" maxlength="500" rows="3" required>{$old_form['experience']}</textarea>
                    </div>
                    <div class="my-3">
                        <label for="site_web-input">Site web : </label>
                        <input type="text" class="form-control" name="site_web" id="site_web-input" placeholder="Entrez le site de communication du groupe" value="{$old_form['site_web']}" required>
                    </div>
                    <div class="my-3">
                        <label for="soundcloud-input">SoundCloud : *</label>
                        <input type="text" class="form-control" name="soundcloud" id="soundcloud-input" placeholder="Copiez l'URL du SoundCloud de votre groupe" value="{$old_form['soundcloud']}">
                    </div>
                    <div class="my-3">
                        <label for="youtube-input">YouTube : *</label>
                        <input type="text" class="form-control" name="youtube" id="youtube-input" placeholder="Copiez l'URL de la chaine YouTube de votre groupe" value="{$old_form['youtube']}">
                    </div>
                    <div class="my-3">
                        <label for="statut_assoc-input">Statut Associatif : </label>
                        <input id="statut_assoc-input"  name="statut_assoc" type="checkbox">
                    </div>
                    <div class="my-3">
                        <label for="is_sacem-input">Sacem : </label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox">
                    </div>
                    <div class="my-3">
                        <label for="have_producteur-input">Producteur : </label>
                        <input id="have_producteur-input" name="have_producteur" type="checkbox">
                    </div>

                    <hr class="my-4">

                    <div> {*Vérification ?*}
                        <div>
                            <button id="add" class="btn btn-success" type="button">Ajouter</button>
                            <button id="delete" class="btn btn-danger" type="button">Supprimer</button>
                        </div>
                        <div id="container" class="d-flex flex-wrap">
                            <section class="card border-secondary m-2" style="width: 12rem">
                                <div class="card-header">MEMBRE 1</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control my-1 nom-input" placeholder="Nom">
                                        <input type="text" class="form-control my-1 prenom-input" placeholder="Prénom">
                                        <input type="text" class="form-control my-1 instrument-input"
                                               placeholder="Instrument">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <input id="membresVariables" type="text" value="" name="membres" style="display: none">
                    </div>

                    <hr class="my-4">

                    <div>
                        <div class="my-3">
                            <label for="technique-input">Fiche technique</label>
                            <input type="file" class="form-control-file" name="technique" id="technique-input">
                        </div>
                        <div class="my-3">
                            <label for="sacem-input">Document SACEM ou tracklist détaillée</label>
                            <input type="file" name="sacem" id="sacem-input" class="form-control-file">
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="my-3">
                            <label for="image1-input">Photo du groupe n°1 : </label>
                            <input type="file" class="form-control-file" id="image1-input" name="image1">
                        </div>
                        <div class="my-3">
                            <label for="image2-input">Photo du groupe n°2 : </label>
                            <input type="file" class="form-control-file" id="image2-input" name="image2">
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="my-3">
                            <label for="piste1-input">Piste MP3 n°1 : </label>
                            <input name="piste1" class="form-control-file" id="piste1-input" type="file">
                        </div>
                        <div class="my-3">
                            <label for="piste2-input">Piste MP3 n°2 : </label>
                            <input name="piste2" class="form-control-file" id="piste2-input" type="file">
                        </div>
                        <div class="my-3">
                            <label for="piste3-input">Piste MP3 n°3 : </label>
                            <input name="piste3" class="form-control-file" id="piste3-input" type="file">
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" id="submit" value="Envoyer" class="btn btn-success btn-lg">
                    </div>

                </div>
            </form>
            <a class="cancel float-right" href="./">Annuler...</a>
        </section>
    </main>
    <script src="./script/gestionMembres.js"></script>
{/block}