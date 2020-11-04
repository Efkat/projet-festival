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

                {*Si connecté*}
                {if $name!=null}
                    <h3>
                        <section>
                            <dl>
                                <dt>Nom Groupe</dt>
                                <dd>{$ligne[0]}</dd>

                                <dt>Département</dt>
                                <dd>{$ligne[1]}</dd>

                                <dt>Style</dt>
                                <dd>{$ligne[2]}</dd>

                                <dt>Scène</dt>
                                <dd>{$ligne[3]}</dd>

                                <dt>Année de Création</dt>
                                <dd>{$ligne[4]}</dd>

                                <dt>Présentation</dt>
                                <dd>{$ligne[5]}</dd>

                                <dt>Expérience</dt>
                                <dd>{$ligne[6]}</dd>

                                <dt>Site Web</dt>
                                <dd>{$ligne[7]}</dd>

                                <dt>Soundcloud</dt>
                                <dd>{$ligne[8]}</dd>

                                <dt>Youtube</dt>
                                <dd>{$ligne[9]}</dd>

                                <dt>Statut Association</dt>
                                <dd>{$ligne[10]}</dd>

                                <dt>Sacem</dt>
                                <dd>{$ligne[11]}</dd>

                                <dt>Producteur</dt>
                                <dd>{$ligne[12]}</dd>

                                <dt>Membres</dt>
                                <dd>{$ligne[13]}</dd>

                                <dt>Fiche Technique</dt>
                                <dd>{$ligne[14]}</dd>

                                <dt>Sacem</dt>
                                <dd>{$ligne[15]}</dd>



                                {*Files*}

                                <dt>Image</dt>
                                <dd>{$ligne[16]}</dd>

                                <dt>Piste 1</dt>
                                <dd>{$ligne[17]}</dd>

                                <dt>Piste 2</dt>
                                <dd>{$ligne[18]}</dd>

                                <dt>Piste 3</dt>
                                <dd>{$ligne[19]}</dd>

                            </dl>
                            

                        </section>
                    </h3>
                    
                    
                    
                {/if}


            </section>

            
        </main>   
        <footer>

            
        </footer>

    </body>

</html>