<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
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
                            <td><a href="./details/{$ligne[0]}">Détails</a></td>


                            {*attention à la requête:
                            -soit [SELECT *]  => donc $ligne[i] avec i pas dans l'ordre
                            -soit [SELECT ..] => donc $ligne[i] i de 0 à 8   *}

                            <td>{$ligne[0]}</td> {*nom groupe*}
                            <td>{$ligne[1]}</td> {*nom departement*}
                            <td>{$ligne[2]}</td> {*adresse*}
                            <td>{$ligne[3]}</td> {*scene*}
                            <td>{$ligne[4]}</td> {*style*}
                            <td>{$ligne[5]}</td> {*annee création / mois?*}
                            <td>{$ligne[6]}</td> {*presentation*}
                            <td>{$ligne[7]}</td> {*experiences*}
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