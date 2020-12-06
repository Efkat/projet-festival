{extends file="base.tpl"}
{block name="title"}
    Acceuil {if $name != null} | {$name} {/if}
{/block}
{block name="content"}
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
                    <a class="btn btn-primary btn-lg " href="./logout" role="button">Déconnexion</a>
                </p>
            {/if}

        </div>
        <p>{$erreurs}</p>
    </main>
{/block}