<?php
require_once '../Controllers/MembresController.php';

class MembresView {
    public function afficherListeMembres($Membres) {
        $items_par_page = 5;
        $page_courante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        
        // Récupération des filtres
        $mois_filtre = isset($_GET['mois']) ? $_GET['mois'] : '';
        $annee_filtre = isset($_GET['annee']) ? $_GET['annee'] : '';
        
        // Filtrer les membres selon la date
        $Membres_filtres = array_filter($Membres, function($membre) use ($mois_filtre, $annee_filtre) {
            $date = date_parse($membre['date_enregistrement']);
            $membre_mois = str_pad($date['month'], 2, '0', STR_PAD_LEFT);
            $membre_annee = (string)$date['year'];
            
            if ($mois_filtre && $annee_filtre) {
                return $membre_mois === $mois_filtre && $membre_annee === $annee_filtre;
            } elseif ($mois_filtre) {
                return $membre_mois === $mois_filtre;
            } elseif ($annee_filtre) {
                return $membre_annee === $annee_filtre;
            }
            return true;
        });
        
        $total_items = count($Membres_filtres);
        $total_pages = ceil($total_items / $items_par_page);
        $debut = ($page_courante - 1) * $items_par_page;
        $Membres_page = array_slice($Membres_filtres, $debut, $items_par_page);

        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Membres</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<div class='w-3/4 float-right mr-12 p-6'>";
        echo "<form method='GET' action='' class='p-4 mb-4 flex gap-2'>";
        echo "<select name='mois' class='border-2 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>";
        echo "<option value=''>Les mois</option>";
        $mois = [
            '01' => 'Janvier', '02' => 'Février', '03' => 'Mars',
            '04' => 'Avril', '05' => 'Mai', '06' => 'Juin',
            '07' => 'Juillet', '08' => 'Août', '09' => 'Septembre',
            '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre'
        ];
        foreach ($mois as $num => $nom) {
            $selected = $num === $mois_filtre ? 'selected' : '';
            echo "<option value='$num' $selected>$nom</option>";
        }
        echo "</select>";
        echo "<select name='annee' class='border-2 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>";
        echo "<option value=''>Les années</option>";
        $annee_courante = date('Y');
        for ($annee = $annee_courante; $annee >= $annee_courante - 4; $annee--) {
            $selected = (string)$annee === $annee_filtre ? 'selected' : '';
            echo "<option value='$annee' $selected>$annee</option>";
        }
        echo "</select>";

        echo "<button type='submit' class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>Filtrer</button>";
        echo "</form>";

        echo "<div class='p-4 mb-4'>";
        echo "<a href='../Pages/GestionMembres.php'>";
        echo "<button class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>";
        echo "<img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un membre";
        echo "</button>";
        echo "</a>";
        echo "</div>";

        echo "<div class='p-4'>";
        echo "<table class='min-w-full border-collapse'>";

        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<td class='px-4 py-2 text-left flex text-gray-500'>Nom";
        echo "<img id='triermembre' src='../Images/Tri.png' alt='tri' class='w-3 h-4 ml-2 mt-1 cursor-pointer'>";
        echo "</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Adresse</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Téléphone</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Date d'inscription</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Gestion</td>";
        echo "</tr>";
        echo "</thead>";
        
        echo "<tbody>";
        foreach ($Membres_page as $Membre) {
            echo "<tr class='bg-white'>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Membre['nom']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Membre['adresse']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Membre['telephone']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Membre['date_enregistrement']) . "</td>";
            echo "<td class='px-4 py-2 flex space-x-2'>";
            echo "<a href='../Pages/Membres.php?action=supprimerMembre&id=" . htmlspecialchars($Membre['id']) . "'>";
            echo "<img src='../Images/Trash.png' alt='Supprimer' class='cursor-pointer'>";
            echo "</a>";
            echo "<a href='../Pages/ModifierMembre.php?id=" . htmlspecialchars($Membre['id']) . "'>";
            echo "<img src='../Images/Modify.png' alt='Modifier' class='w-5 h-5 mt-2 cursor-pointer'>";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        echo "</div>";
        echo "</div>";
        echo "</body>";
    }
}
?>