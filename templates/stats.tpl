{extends file="base.tpl"}
{block name="title"}
    Stats
{/block}
{block name="content"}
        <main>
            <h1>Statistiques</h1>
            <section>
                <form action="./stats" method="POST">
                    <div class="my-3 mx-5">
                        <label for="departement-input">Département : </label>
                        <select class="custom-select" name="departement" id="departement-input" required>
                            <option value="-1" selected>Tous</option>
                            <option value="0">Haut-De-France</option>
                            {foreach from=$depts item=dept}
                                <option value="{$dept['num_dept']}">{$dept['departement']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="my-3 mx-5">
                        <label for="style-input">Style du groupe : </label>
                        <select class="custom-select" name="style" id="style-input" required>
                            <option value="-1" selected>Tous</option>
                            {foreach from=$styles key=num item=nom}
                                <option value="{$num}">{$nom}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="my-3 mx-5">
                        <label for="scene-input">Scène du groupe : </label>
                        <select class="custom-select" name="scene" id="scene-input" required>
                            <option value="-1" selected>Tous</option>
                            {foreach from=$scenes key=num item=nom}
                                <option value="{$num}">{$nom}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="my-3 mx-5">
                        <legend>Voir par :</legend>
                        <div>
                            <input type="checkbox" name="viewBy" value="dept">
                            <label for="dept">Départements</label>
                        </div>
                        <div>
                            <input type="checkbox" name="viewBy" value="style">
                            <label for="style">Styles</label>
                        </div>
                        <div>
                            <input type="checkbox" name="viewBy" value="scene">
                            <label for="scene">Scènes</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" id="submit" value="Envoyer" class="btn btn-success btn-lg">
                    </div>
                </form>
            </section>

        </main>
{/block}