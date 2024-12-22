<?php


class PartenairesView {

    public function afficherListePartenaires($partenaires) {
        echo"<head>";
            header('Content-Type: text/html; charset=UTF-8');
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
            echo"<title>Partenaires</title>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
            echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
            echo "</head>";
        echo "<div class='w-3/4 float-right p-6'>
            <div class='p-4 mb-4'>
                <button class='bg-[#D0D5DD] border-2 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Filter.png' alt='Filtrer' class='inline-block mr-1 w-4 h-2'> Filtrer par
                </button>
                <button class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un partenaire
                </button>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                            <th class='px-4 py-2 text-left text-gray-500'>Nom de l'établissement</th>
                            <th class='px-4 py-2 text-left text-gray-500'>Catégorie</th>
                            <th class='px-4 py-2 text-left text-gray-500'>Ville</th>
                            <th class='px-4 py-2 text-left text-gray-500'>Email</th>
                            <th class='px-4 py-2 text-left text-gray-500'>Téléphone</th>
                            <th class='px-4 py-2 text-left text-gray-500'>Gestion</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($partenaires as $partenaire) {
                        echo "<tr class='bg-white'>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['nom_etablissement']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['idcategorie']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['ville']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['email']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['telephone']) . "</td>
                            <td class='px-4 py-2 flex space-x-2'>
                                <img src='../Images/Trash.png' alt='Supprimer' class='cursor-pointer'>
                                <img src='../Images/Modify.png' alt='Modifier' class='w-5 h-5 mt-2 cursor-pointer'>
                            </td>
                        </tr>";
                    }
                echo "</tbody>
                </table>
            </div>
        </div>
        ";
    }
}

?>
