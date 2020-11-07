<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <title>Liste</title>
    </head>
    <body>
        <header>
            

        </header>
        <main>
            <h1>Liste</h1>
            <section>
                <table>
                    {foreach from=$lignes item=$ligne}
                        <tr>
                            {*href= /liste/details/nom_groupe*}
                            <td><a href="./details/{$ligne['nom_groupe']}">Détails</a></td>

                            <td>{$ligne['nom_groupe']}</td> {*nom groupe*}
                            <td>{$ligne['departement']}</td>
                            <td>{$ligne['nom_type']}</td> {*scene*}
                            <td>{$ligne['nom_style']}</td> {*style*}
                            <td>{$ligne['annee_creation']}</td> 
                            <td>{$ligne['presentation']}</td>
                            <td>{$ligne['experience']}</td> 
                        </tr>
                    {/foreach}
                </table>
            </section>
        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html>