{extends file="base.tpl"}
{block name="title"}
    Login
{/block}
{block name="content"}
        <main>
            <h1>Se Connecter</h1>
            <section>
                <form action="./login" method="POST">
                    <div>
                        <label for="nom-input">Nom</label>
                        <input name="nom" id="nom-input" type="text" value="{$old_form['nom']}" required>
                    </div>
                    <div>
                        <label for="pswd-input">Mot De Passe:</label>
                        <input name="pswd" id="pswd-input" type="password">
                    </div>
                        <input type="submit" value="Envoyer">
                </form>
                <a class="cancel" href="./">Annuler</a>
                <p>{$erreurs}</p>

            </section>
        </main>
{/block}