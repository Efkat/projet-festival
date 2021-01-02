{extends file="base.tpl"}
{block name="title"}
    Supprimer
{/block}
{block name="content"}
<link rel="stylesheet" href="../../styles/style.css">
        <main>
            <h1>Supprimer </h1>
            <section>
                <table>
                    <tr class="border-bottom border-primary font-italic">
                        <td class="text-info font-weight-bold"><u>Nom Groupe</u></td> {*nom groupe*}
                        <td><u>Département</u></td>
                        <td><u>Scène</u></td> {*scene*}
                        <td><u>Style</u></td> {*style*}
                        <td><u>Année Création</u></td> 
                        <td><u>Présentation</u></td>
                        <td><u>Expérience</u></td> 
                    </tr>

                    <tr>
                        <td class="text-info font-weight-bold">{$candidature['nom_groupe']}</td> {*nom groupe*}
                        <td>{$candidature['departement']}</td>
                        <td>{$candidature['nom_type']}</td> {*scene*}
                        <td>{$candidature['nom_style']}</td> {*style*}
                        <td>{$candidature['annee_creation']}</td> 
                        <td>{$candidature['presentation']}</td>
                        <td>{$candidature['experience']}</td> 
                    </tr>
                </table>

                <div class="container w-75 mx-auto my-5">
                    <h3 class="text-danger text-center">Voulez-vous vraiment supprimer cette candidature?</h3>
                    <div class="container text-center">
                        <a href="./drop" class="btn btn-danger btn-lg">Oui</a>
                        <a href="../../liste" class="btn btn-light btn-lg border border-danger text-danger">Non</a>
                    </div>

                </div>
            </section>
        </main>
{/block}    