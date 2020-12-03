<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../styles/style.css">
        <title>Acceuil {if $name != null} | {$name} {/if}</title>
    </head>
    <body>
        <header class="container-fluid border-bottom">
            <h1 class="text-center my-4 text-primary">🎸 Good Rockin' Festival 🎸</h1>
        </header>
        <main>
            <div class="jumbotron w-75 mx-auto rounded m-5">
                <h2 class="text-center m-3 display-3">Bienvenue {if $name != null}{$name}{else}visiteur{/if} sur la page d'inscription !</h2>
                {if $name==null}
                    {*Si déconnecté*}
                    <a href="./register">S'enregistrer</a>
                    <a href="./login">Se Connecter</a>
                {else}
                    {*Si connecté*}
                    {if $candidature==0 && $name!=admin}
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
                    <hr class="my-2">
                    <p class="lead text-center">
                        <a class="btn btn-primary btn-lg " href="/logout" role="button">Déconnexion</a>
                    </p>
                {/if}

            </div>
            <p>{$erreurs}</p>
        </main>
        <footer class="page-footer font-small blue pt-4 border-top">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <h5 class="text-uppercase">Good Rockin' Festival</h5>
                        <p>Projet du module de Programmation Web Côté Serveur consistant à gérer les inscriptions des groupes à un festival.</p>

                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="https://github.com/Efkat" target="_blank">GitHub Hugo Benabdelhak</a>
                            </li>
                            <li>
                                <a href="https://github.com/NinoLS" target="_blank">GitHub Nino Belic</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3 border-top">© 2020 - Hugo Benabdelhak & Nino Belic</div>
        </footer>
    </body>
</html>