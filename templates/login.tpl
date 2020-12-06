{extends file="base.tpl"}
{block name="title"}
    Login
{/block}
{block name="content"}
        <main>
            <h1 class="text-center">Se Connecter</h1>
            <div class="card w-25 mx-auto p-3 m-5">
                <form action="./login" method="POST">
                    <div class="form-group row">
                        <label for="nom-input" class="col-sm-2 col-form-label">Nom</label>
                        <input name="nom" id="nom-input" type="text" value="{$old_form['nom']}" class="col-sm-10" required>
                    </div>
                    <div class="form-group row">
                        <label for="pswd-input" class="col-sm-4 col-form-label">Mot De Passe</label>
                        <input name="pswd" id="pswd-input" type="password" class="col-sm-8">
                    </div>
                    <div class="lead text-center">
                        <button type="submit" class="btn btn-success">Connexion</button>
                    </div>
                </form>
                    <a class="cancel " href="./">Annuler...</a>
                <p class="text-primary card m-3 font-weight-bold p-2">{$erreurs}</p>

            </div>
        </main>
{/block}