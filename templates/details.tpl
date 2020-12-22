{extends file="base.tpl"}
{block name="title"}
    Détails
{/block}
{block name="content"}
        <main>
        <div class="jumbotron  w-75 mx-auto">
            <h1 class="display-5 text-center">Détails Candidature</h1>
            <p class="lead fs-1 text-center">{$candidature['nom_groupe']}</p>
            <hr class="my-4">
            <div class="d-flex justify-content-around">
                <img src="../data/{$candidature['nom_groupe']}/{$images[1]['nom_fichier']}.{$images[1]['format']}" style="width:250px;">
                <img src="../data/{$candidature['nom_groupe']}/{$images[2]['nom_fichier']}.{$images[2]['format']}" style="width:250px;" alt="pas d'image 2">
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-around">
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 1</p>
                    </div>
                    <div class="row">
                        <audio controls src="../data/{$candidature['nom_groupe']}/{$pistes[1]['nom_fichier']}.{$pistes[1]['format']}"></audio>
                    </div>
                </div>
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 2</p>
                    </div>
                    <div class="row">
                    <audio controls src="../data/{$candidature['nom_groupe']}/{$pistes[2]['nom_fichier']}.{$pistes[2]['format']}"></audio>

                    </div>
                </div>
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 3</p>
                    </div>
                    <div class="row">
                        <audio controls src="../data/{$candidature['nom_groupe']}/{$pistes[3]['nom_fichier']}.{$pistes[3]['format']}"></audio>
                    </div>
                </div>
            </div>
            <hr class="my-3">

            <dl class="w-75 mx-auto text-center">
                                <dt class="h3 my-2">Département</dt>
                                <dd>{$candidature['departement']}</dd>

                                <dt class="h3 my-2">Style</dt>
                                <dd>{$candidature['nom_style']}</dd>

                                <dt class="h3 my-2">Scène</dt>
                                <dd>{$candidature['nom_type']}</dd>

                                <dt class="h3 my-2">Année de Création</dt>
                                <dd>{$candidature['annee_creation']}</dd>

                                <dt class="h3 my-2">Présentation</dt>
                                <dd>{$candidature['presentation']}</dd>

                                <dt class="h3 my-2">Expérience</dt>
                                <dd>{$candidature['experience']}</dd>

                                <dt class="h3 my-2">Site Web</dt>
                                <dd>{$candidature['site_web']}</dd>

                                <dt  class="h3 my-2">Soundcloud</dt>
                                <dd>{$candidature['soundcloud']}</dd>

                                <dt class="h3  my-2">Youtube</dt>
                                <dd>{$candidature['youtube']}</dd>

                                <dt class="h3 my-2">Statut Association</dt>
                                <dd>{$candidature['statut_assoc']}</dd>

                                <dt class="h3 my-2">Sacem</dt>
                                <dd>{$candidature['is_sacem']}</dd>

                                <dt class="h3 my-2">Producteur</dt>
                                <dd>{$candidature['have_producer']}</dd>

                                <dt class="h3 my-2">Membres</dt>
                                <dd>
                                    <ul class="d-flex flex-wrap">
                                    {foreach from=$membres item=membre}
                                        <li class="card w-25 mx-auto p-2 text-left">
                                            <p>{$membre[0]}</p>
                                            <p>{$membre[1]}</p>
                                            <p>{$membre[2]}</p>
                                        </li>
                                        
                                    {/foreach}
                                    </ul>
                                
                                </dd>
                            </dl>
        </div>
        </main>   
{/block}