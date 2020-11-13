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
            {*Si déconnecté*}
                <p>Bonjour visiteur!</p>
                <a href="./register">S'enregistrer</a>
                <a href="./login">Se Connecter</a>
            {else} 
            {*Si connecté*}
                <p>Bonjour {$name}!</p>

                {if $candidature==null && $name!=admin} 
                {*Si pas de candidature et si ce n'est pas l'admin*}
                    <a href="./candidature">Candidature</a>
                {else}  
                    {*Si admin*}
                    {if $name==admin}
                        <a href="./liste">Liste Candidatures</a>
                    {else} 
                    {*Si déjà candidature*}
                        <a href="./c_consulter">Consulter Candidature</a> 
                        <a href="./c_edit">Editer Candidature</a>
                    {/if}
                {/if}
                

                <a href="./logout">Déconnexion</a>
            {/if}
                

            </section>
            <p>{$erreurs}</p>
        </main>
        <footer>
            <p>Nino BELIC & Hugo BENAB DEL K</p>

        </footer>

    </body>




</html>