{extends file="base.tpl"}
{block name="title"}
    Liste
{/block}
{block name="content"}
        <main>
            <h1>Liste</h1>
            <section>
                <table>
                    {foreach from=$lignes item=$ligne}
                        <tr>
                            {*href= /liste/details/nom_groupe*}
                            <td><a href="./details/{$ligne['nom_groupe']}">Détails</a></td>

                            <td>{$ligne['nom_groupe']}</td> {*nom groupe*}
                            <td>{$ligne['departement']}</td>
                            <td>{$ligne['nom_type']}</td> {*scene*}
                            <td>{$ligne['nom_style']}</td> {*style*}
                            <td>{$ligne['annee_creation']}</td> 
                            <td>{$ligne['presentation']}</td>
                            <td>{$ligne['experience']}</td> 
                        </tr>
                    {/foreach}
                </table>
            </section>
        </main>
{/block}