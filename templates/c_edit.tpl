{extends file="base.tpl"}
{block name="title"}
    Editer Candidature
{/block}  
{block name="content"}
        <main>
            <section class="jumbotron w-50 mx-auto my-4">
                <h1 class="display-1 text-center m-0">Edition de la Candidature</h1>
                <hr class="my-4"/>
                <form action="./c_edit" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="my-3">
                            <label for="nom_groupe-input">Nom du groupe</label>
                            <input id="nom_groupe-input" class="form-control" name="nom_groupe" type="text" required value="{$candidature['nom_groupe']}">
                        </div>
                        <div class="my-3">
                            <label for="departement-input">Département d'origine</label>
                            <select class="custom-select" name="departement" id="departement-input" required>
                                {foreach from=$depts item=dept}
                                    <option value="{$dept['num_dept']}" {if $dept['departement']==$candidature['departement']} selected {/if}>{$dept['departement']}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="style-input">Style du groupe</label>
                            <select class="custom-select" name="style" id="style-input">
                                {foreach from=$styles key=num item=style}
                                    <option value="{$num}"
                                    {if isset($candidature['id_style'])}
                                        {if $num==$candidature['id_style']} 
                                        selected        {*à tester*}
                                        {/if}>{$style}</option>
                                    {else}
                                        {if $num==$candidature['style']} 
                                            selected        {*à tester*}
                                        {/if}>{$style}</option>
                                    {/if}
                                {/foreach}
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="scene-input">Scène du groupe</label>
                            <select class="custom-select" name="scene" id="scene-input">
                                {foreach from=$scenes key=num item=scene}
                                    
                                    <option value="{$num}" 
                                    {if isset($candidature['id_scene'])}
                                        {if $num==$candidature['id_scene']} 
                                            selected        {*à tester*}
                                        {/if}>{$scene}</option>
                                    {else}
                                        {if $num==$candidature['scene']} 
                                            selected        {*à tester*}
                                        {/if}>{$scene}</option>
                                    {/if}
                                {/foreach}
                            </select>
                            </select>
                        </div>
                        
                        <div class="my-3">
                            <label for="annee_creation-input">Année de Création</label>
                            <input class="form-control" id="annee_creation-input" name="annee_creation" type="number" value="{$candidature['annee_creation']}" required>
                        </div>
                        <div class="my-3">
                            <label for="presentation-input">Présentation</label>
                            <textarea id="presentation-input" class="form-control" name="presentation" maxlength="500" rows="4" required>{$candidature['presentation']}</textarea>
                        </div>
                        <div class="my-3">
                            <label for="experience-input">Expérience</label>
                            <textarea class="form-control" id="experience-input" name="experience" maxlength="500" rows="4" required>{$candidature['experience']}</textarea>
                        </div>
                        <div class="my-3">
                            <label for="site_web-input">Site Web</label>
                            <input class="form-control" id="site_web-input" name="site_web" type="text" required value="{$candidature['site_web']}">
                        </div>
                        <div class="my-3">
                            <label for="soundcloud-input">Soundcloud*</label> {*NULLABLE*}
                            <input class="form-control" id="soundcloud-input" name="soundcloud" type="text" value="{$candidature['soundcloud']}">
                        </div>
                        <div class="my-3">
                            <label for="youtube-input">Youtube*</label> {*NULLABLE*}
                            <input class="form-control" id="youtube-input" name="youtube" type="text" value="{$candidature['youtube']}">
                        </div>
                        <div class="my-3">
                            <label for="statut_assoc-input">Statut Association</label>
                            <input id="statut_assoc-input" name="statut_assoc" type="checkbox" {if $candidature['statut_assoc']==1}checked{/if}>
                        </div>
                        <div class="my-3">
                            <label for="is_sacem-input">Sacem</label>
                            <input id="is_sacem-input" name="is_sacem" type="checkbox" {if $candidature['is_sacem']==1}checked{/if}>
                        </div>
                        <div class="my-3">
                            <label for="have_producteur-input">Producteur</label>
                            <input id="have_producteur-input" name="have_producer" type="checkbox" {if $candidature['have_producer']==1}checked{/if}>
                        </div>
                        <div class="my-3"> {*Vérification ?*}
                            <div id="container" class="d-flex flex-wrap">
                                {foreach from=$membres item=$membre key=$num}
                                    <section class="card border-secondary m-2" style="width: 12rem">
                                        <div class="card-header">MEMBRE {$num+1}</div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control my-1 nom-input" placeholder="Nom" value="{$membre[0]}">
                                                <input type="text" class="form-control my-1 prenom-input" placeholder="Prénom" value="{$membre[1]}">
                                                <input type="text" class="form-control my-1 instrument-input"
                                                    placeholder="Instrument" value="{$membre[2]}">
                                            </div>
                                        </div>
                                    </section>
                                {/foreach}
                            </div>
                            <input id="membresVariables" type="text" value="" name="membres" style="display: none">
                        </div>
                        <div class="my-3">
                            <label for="technique-input">Fiche technique</label>
                            <input class="form-control-file" type="file" id="technique-input" name="technique">
                        </div>
                        <div class="my-3">
                            <label for="sacem-input">Document SACEM ou tracklist détaillée</label>
                            <input class="form-control-file" type="file" id="sacem-input" name="sacem">
                        </div>
                        <div class="my-3">
                            <label for="image1-input">Nouvelle photo du groupe n°1</label>
                            <input class="form-control-file" type="file" id="image1-input" name="image1">
                        </div>
                        <div class="my-3">
                            <label for="image2-input">Nouvelle photo du groupe n°2</label>
                            <input class="form-control-file" type="file" id="image2-input" name="image2">
                        </div>
                        <div class="my-3">
                            <label for="piste1-input">Nouvelle piste MP3 n°1</label>
                            <input class="form-control-file" name="piste1" id="piste1-input" type="file">
                        </div>
                        <div class="my-3">
                            <label for="piste2-input">Nouvelle piste MP3 n°2</label>
                            <input class="form-control-file" name="piste2" id="piste2-input" type="file">
                        </div>
                        <div class="my-3">
                            <label for="piste3-input">Nouvelle piste MP3 n°3</label>
                            <input class="form-control-file" name="piste3" id="piste3-input" type="file">
                        </div>
                        <div class="text-center">
                        <input type="submit" id="submit_edit" value="Envoyer" class="btn btn-success btn-lg">
                        </div>
                    </div>
                </form>
                <a class="cancel float-right" href="./">Annuler...</a>
                <p>{$erreurs}</p>
            </section>
        </main>
        <script src="./script/gestionMembres_edit.js"></script> 

{/block}