{extends file="base.tpl"}
{block name="title"}
    Editer Candidature
{/block}
{block name="content"}
        <main>
            <h1>Editer Candidature</h1>
            <section>
            
                <form action="./c_edit" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="nom_groupe-input">Nom du groupe</label>
                        <input id="nom_groupe-input" name="nom_groupe" type="text" required value="{$candidature['nom_groupe']}">
                    </div>
                    <div>
                        <label for="departement-input">Département d'origine</label>
                        <select name="departement" id="departement-input" value="{$candidature['departement']}">
                            {foreach from=$nom_depts item=nom_dept}
                                
                                <option value="{$nom_dept}" 
                                {if $nom_dept==$candidature['departement']} 
                                    selected        {*à tester*}
                                {/if}>{$nom_dept}</option>

                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label for="style-input">Style du groupe</label>
                        <select name="style" id="style-input">
                             {foreach from=$styles key=num item=style}
                                
                                <option value="{$num}" 
                                {if $num==$candidature['id_style']} 
                                    selected        {*à tester*}
                                {/if}>{$style}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label for="scene-input">Scène du groupe</label>
                        <select name="scene" id="scene-input">
                            {foreach from=$scenes key=num item=scene}
                                
                                <option value="{$num}" 
                                {if $num==$candidature['id_scene']} 
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
                        <input id="annee_creation-input" name="annee_creation" type="number" value="{$candidature['annee_creation']}" required>
                    </div>
                    <div>
                        <label for="presentation-input">Présentation</label>
                        <textarea id="presentation-input" name="presentation" maxlength="500" required>{$candidature['presentation']}</textarea>
                    </div>
                    <div>
                        <label for="experience-input">Expérience</label>
                        <textarea id="experience-input" name="experience" maxlength="500" required>{$candidature['experience']}</textarea>
                    </div>
                    <div>
                        <label for="site_web-input">Site Web</label>
                        <input id="site_web-input" name="site_web" type="text" required value="{$candidature['site_web']}">
                    </div>
                    <div>
                        <label for="soundcloud-input">Soundcloud*</label> {*NULLABLE*}
                        <input id="soundcloud-input" name="soundcloud" type="text" value="{$candidature['soundcloud']}">
                    </div>
                    <div>
                        <label for="youtube-input">Youtube*</label> {*NULLABLE*}
                        <input id="youtube-input" name="youtube" type="text" value="{$candidature['youtube']}">
                    </div>
                    <div>
                        <label for="statut_assoc-input">Statut Association</label>
                        <input id="statut_assoc-input" name="statut_assoc" type="checkbox" {if $candidature['statut_assoc']==1}checked{/if}>
                    </div>
                    <div>
                        <label for="is_sacem-input">Sacem</label>
                        <input id="is_sacem-input" name="is_sacem" type="checkbox" {if $candidature['is_sacem']==1}checked{/if}>
                    </div>
                    <div>
                        <label for="have_producteur-input">Producteur</label>
                        <input id="have_producteur-input" name="have_producer" type="checkbox" {if $candidature['have_producer']==1}checked{/if}>
                    </div>
                    <div> {*Vérification ?*}
                        <div>
                            <button id="add" class="btn btn-success" type="button">Ajouter</button>
                            <button id="delete" class="btn btn-danger" type="button">Supprimer</button>
                        </div>
                        <div id="container" class="d-flex flex-wrap">
                            {foreach from=$membres item=$membre}
                                <section class="card border-secondary m-2" style="width: 12rem">
                                    <div class="card-header">MEMBRE</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control my-1 nom-input" placeholder="Nom" value={$membre[0]}>
                                            <input type="text" class="form-control my-1 prenom-input" placeholder="Prénom" value={$membre[1]}>
                                            <input type="text" class="form-control my-1 instrument-input"
                                                placeholder="Instrument" value={$membre[2]}>
                                        </div>
                                    </div>
                                </section>
                            {/foreach}
                        </div>
                        <input id="membresVariables" type="text" value="" name="membres" style="display: none">
                    </div>
                    {*<div> TEST DE PASSAGE AU TEMPLATE
                        {foreach from=$membres item=membre}
                            <p>{$membre[0]}</p>
                            <p>{$membre[1]}</p>
                            <p>{$membre[2]}</p>
                        {/foreach}
                    </div>*}
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
        <script src="./script/gestionMembres.js"></script> 

{/block}