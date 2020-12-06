{extends file="base.tpl"}
{block name="title"}
    Stats
{/block}
{block name="content"}
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
{/block}