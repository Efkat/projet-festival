<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <title>Home</title>
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <h1>Home</h1>
            <section>

            {if $name==null}
                <p>Bonjour visiteur!</p>
                <a href="./register">S'enregistrer</a>
                <a href="./login">Se Connecter</a>
            {else}
                <p>Bonjour {$name}!</p>

                {*Si en a fait une ?*}
                <a href="./c_consulter">Consulter Candidature</a> 
                <a href="./login">Editer Candidature</a>

                {*Sinon*}
                <a href="./candidature">Candidature</a>
            {/if}
                

            </section>
        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html>