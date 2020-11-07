<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <title>Stats</title>
    </head>
    <body>
        <header>
            

        </header>
        <main>
            <h1>Statistiques</h1>
            <section>
                <dl>
                    {foreach from=$stats item=stat}
                        {*<dt>{$key}</dt>*}   {*Alias au niveau des requêtes*}
                        <dd>{$stat}</dd>
                    {/foreach}
                </dl>
            </section>

        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html>