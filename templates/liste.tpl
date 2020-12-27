{extends file="base.tpl"}
{block name="title"}
    Liste
{/block}
{block name="content"}
        <main>
            <h1>Liste</h1>
            <section>
                <table>
                    <tr class="border-bottom border-primary font-italic">
                        <td></td>
                        <td class="text-info font-weight-bold"><u>Nom Groupe</u></td> {*nom groupe*}
                        <td><u>Département</u></td>
                        <td><u>Scène</u></td> {*scene*}
                        <td><u>Style</u></td> {*style*}
                        <td><u>Année Création</u></td> 
                        <td><u>Présentation</u></td>
                        <td><u>Expérience</u></td> 
                    </tr>

                    {foreach from=$lignes item=$ligne}
                        <tr>
                            {*href= /liste/details/nom_groupe*}
                            <td><a href="./details/{$ligne['nom_groupe']}">Détails</a></td>
                            <td class="text-info font-weight-bold">{$ligne['nom_groupe']}</td> {*nom groupe*}
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