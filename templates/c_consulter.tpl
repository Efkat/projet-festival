{extends file="base.tpl"}
{block name="title"}
    Consulter Candidature
{/block}
{block name="content"}
        <main>
        <div class="jumbotron  w-75 mx-auto">
            <h1 class="display-5 text-center">Consultation de la candidature</h1>
            <p class="lead fs-1 text-center">{$candidature['nom_groupe']}</p>
            <hr class="my-4">
            <div class="d-flex justify-content-around">
                <img src="./data/{$candidature['nom_groupe']}/{$images[1]['nom_fichier']}.{$images[1]['format']}" style="width:250px;">
                <img src="./data/{$candidature['nom_groupe']}/{$images[2]['nom_fichier']}.{$images[2]['format']}" style="width:250px;" alt="pas d'image 2">
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-around">
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 1</p>
                    </div>
                    <div class="row">
                        <audio controls src="./data/{$candidature['nom_groupe']}/{$pistes[1]['nom_fichier']}.{$pistes[1]['format']}"></audio>
                    </div>
                </div>
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 2</p>
                    </div>
                    <div class="row">
                    <audio controls src="./data/{$candidature['nom_groupe']}/{$pistes[2]['nom_fichier']}.{$pistes[2]['format']}"></audio>

                    </div>
                </div>
                <div class="column">
                    <div class="row">
                        <p class="m-0">Morceau 3</p>
                    </div>
                    <div class="row">
                        <audio controls src="./data/{$candidature['nom_groupe']}/{$pistes[3]['nom_fichier']}.{$pistes[3]['format']}"></audio>
                    </div>
                </div>
            </div>
            <hr class="my-3">

            <dl class="w-75 mx-auto text-center">
                                <dt class="">Département</dt>
                                <dd>{$candidature['departement']}</dd>

                                <dt>Style</dt>
                                <dd>{$candidature['nom_style']}</dd>

                                <dt>Scène</dt>
                                <dd>{$candidature['nom_type']}</dd>

                                <dt>Année de Création</dt>
                                <dd>{$candidature['annee_creation']}</dd>

                                <dt>Présentation</dt>
                                <dd>{$candidature['presentation']}</dd>

                                <dt>Expérience</dt>
                                <dd>{$candidature['experience']}</dd>

                                <dt>Site Web</dt>
                                <dd>{$candidature['site_web']}</dd>

                                <dt>Soundcloud</dt>
                                <dd>{$candidature['soundcloud']}</dd>

                                <dt>Youtube</dt>
                                <dd>{$candidature['youtube']}</dd>

                                <dt>Statut Association</dt>
                                <dd>{$candidature['statut_assoc']}</dd>

                                <dt>Sacem</dt>
                                <dd>{$candidature['is_sacem']}</dd>

                                <dt>Producteur</dt>
                                <dd>{$candidature['have_producer']}</dd>

                                <dt>Membres</dt>
                                <dd>
                                    <ul class="card w-25 mx-auto mt-3 text-left">
                                    {foreach from=$membres item=membre}
                                        <li >
                                            <p>{$membre[0]}</p>
                                            <p>{$membre[1]}</p>
                                            <p>{$membre[2]}</p>
                                        </li>
                                    {/foreach}
                                    </ul>
                                
                                </dd>
                            </dl>
        </div>
            <h1 class="text-center"></h1>
            <section>

                <h3>
                    <section>
                        
                            

                    </section>
                 </h3>
                 

            </section>

            
        </main>   
{/block}