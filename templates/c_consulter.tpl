<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <meta charset="UTF-8">
        <title>Candidature_Consulter</title>

    </head>
    <body>
        <header>

        
        </header> 
        <main>
            <h1>Consulter Candidature</h1>
            <section>

                <h3>
                    <section>
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


                                {* ???
                                <dt>Fiche Technique</dt>
                                <dd>{$candidature['fiche_technique']}</dd>
                                *}

                                {*Files

                                <dt>Image</dt>
                                <dd>{$files[16]}</dd>

                                <dt>Piste 1</dt>
                                <dd>{$files[17]}</dd>

                                <dt>Piste 2</dt>
                                <dd>{$files[18]}</dd>

                                <dt>Piste 3</dt>
                                <dd>{$files[19]}</dd>
                                *}
                            </dl>
                            

                    </section>
                 </h3>
                 

            </section>

            
        </main>   
        <footer>

            
        </footer>

    </body>

</html>