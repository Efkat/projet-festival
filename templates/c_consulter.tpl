{extends file="base.tpl"}
{block name="title"}
    Consulter Candidature
{/block}
{block name="content"}
        <main>
            <h1>Consulter Candidature</h1>
            <section>

                <h3>
                    <section>
                        <img src="./data/{$candidature['nom_groupe']}/{$images[1]['nom_fichier']}.{$images[1]['format']}" style="width:250px;">
                        <img src="./data/{$candidature['nom_groupe']}/{$images[2]['nom_fichier']}.{$images[2]['format']}" style="width:250px;" alt="pas d'image 2">
                        <div>
                            <audio controls src="./data/{$candidature['nom_groupe']}/{$pistes[1]['nom_fichier']}.{$pistes[1]['format']}"></audio>
                            <audio controls src="./data/{$candidature['nom_groupe']}/{$pistes[2]['nom_fichier']}.{$pistes[2]['format']}"></audio>
                            <audio controls src="./data/{$candidature['nom_groupe']}/{$pistes[3]['nom_fichier']}.{$pistes[3]['format']}"></audio>
                        </div>
                        <dl>
                                <dt>Nom Groupe</dt>
                                <dd>{$candidature['nom_groupe']}</dd>

                                <dt>Département</dt>
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
                                    <ul>
                                    {foreach from=$membres item=membre}
                                        <li>
                                            <p>{$membre[0]}</p>
                                            <p>{$membre[1]}</p>
                                            <p>{$membre[2]}</p>
                                        </li>
                                    {/foreach}
                                    </ul>
                                
                                </dd>
                            </dl>
                            

                    </section>
                 </h3>
                 

            </section>

            
        </main>   
{/block}