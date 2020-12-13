<!doctype html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>{block name="title"}Default Title{/block}</title>
</head>
<body>
    <header class="container-fluid border-bottom">
        <h1 class="text-center my-4 text-primary">🎸 Good Rockin' Festival 🎸</h1>
    </header>
    {block name="content"}
        Default content
    {/block}
    <footer class="footer-page font-small blue pt-4 border-top">
        <div class="container text-center text-md-left">
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