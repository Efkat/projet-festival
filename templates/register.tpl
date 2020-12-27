{extends file="base.tpl"}
{block name="title"}
    Register
{/block}
{block name="content"}
        <main>
            <h1 class="text-center">S'enregistrer</h1>
            <div class="card w-25 mx-auto p-3 m-5">
                <p class="h4 text-primary font-weight-bold p-2">{$erreurs}</p>
                <form action="./register" method="POST">
                    <div class="form-group row">
                        <label for="nom-input" class="col-sm-2 col-form-label">Nom</label>
                        <input id="nom-input" name="nom" type="text" value="{$old_form['nom']}" class="col-sm-10" required>
                    </div>
                    <div class="form-group row">
                        <label for="email-input" class="col-sm-2 col-form-label">Email</label>
                        <input id="email-input" name="email" type="email" value="{$old_form['email']}" class="col-sm-10" required>
                    </div>
                    <div class="form-group row" >
                        <label for="pswd-input" class="col-sm-4 col-form-label">Mot De Passe</label>
                        <input id="pswd-input" name="pswd" type="password"  class="col-sm-8" required>
                    </div>
                    <div class="lead text-center">
                        <button type="submit" class="btn btn-success">Inscription</button>
                    </div>
                </form>
                <a class="cancel" href="./">Annuler</a>
            </div>
        </main>
{/block}