
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/8c4c819bf8.js" crossorigin="anonymous"></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<div class="sidebar">
		<div class="logo_details">
		  
		 
		  <i class="bx bx-menu" id="btn"></i>
		</div>
		<ul class="nav-list">
			
		  
		  <li>
			<a href="index.php">
			  <i class="fas fa-chart-line"></i>
			  <span class="link_name">INDICATEURS DE PERFORMANCE</span>
			</a>
			<span class="tooltip">INDICATEURS DE PERFORMANCE</span>
		  </li>
		  <li>
			<li>
				<a href="recap.php">
				  <i class="fas fa-chart-line"></i>
				  <span class="link_name">RECAPITULATIF DE REALISATION</span>
				</a>
				<span class="tooltip">RECAPITULATIF DE REALISATION</span>
			  </li>
			  <li>
			<li>
				<a href="chiff_aff.php">
				  <i class="fas fa-chart-line"></i>
				  <span class="link_name">Chiffre d’affaires</span>
				</a>
				<span class="tooltip">Chiffre d’affaires</span>
			  </li>
			  <li>
			<a href="com_accs.php">
			  <i class="fas fa-handshake"></i>
			  <span class="link_name">Commercialisation des accès</span>
			</a>
			<span class="tooltip">Commercialisation des accès</span>
		  </li>
		  <li>
			<a href="#">
			  <i class="fas fa-check"></i>
			  <span class="link_name">Réalisations Budgétaires</span>
			</a>
			<span class="tooltip">Réalisations Budgétaires</span>
		  </li>
		  <li>
			<a href="#">
			  <i class="fas fa-network-wired"></i>
			  <span class="link_name">Réseau d’accès et de transport</span>
			</a>
			<span class="tooltip">Réseau d’accès et de transport</span>
		  </li>
		</ul>
	  </div>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section class="content">
		<!-- NAVBAR -->
		<nav class="header">
			<div class="left">
			<div><img src="img/logoo.svg" alt="" class="logo"></div>
			<div class="text">BILAN D'ACTIVITE MENSUEL</div>
		 </div>
		<div class="profile-dropdown">
            <div onclick="toggle()" class="profile-dropdown-btn">
              <div class="profile-img">
                <i class="fa-solid fa-circle"></i>
              </div>
    
              <span
                >Chiheb Maria
                <i class="fa-solid fa-angle-down"></i>
              </span>
            </div>
    
            <ul class="profile-dropdown-list">
              <li class="profile-dropdown-list-item">
                <a href="#">
                  <i class="fa-regular fa-user"></i>
                  Edit Profile
                </a>
              </li>
    
              <li class="profile-dropdown-list-item">
                <a href="#">
                  <i class="fa-regular fa-envelope"></i>
                  Inbox
                </a>
              </li>
    
              <li class="profile-dropdown-list-item">
                <a href="#">
                  <i class="fa-solid fa-sliders"></i>
                  Settings
                </a>
              </li>
    
              <hr />
    
              <li class="profile-dropdown-list-item">
                <a href="#">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  Log out
                </a>
              </li>
            </ul>
          </div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main class="main">
            <h1>COMMERCIALISATION DES ACCES</h1>
    <!-- Formulaire de recherche -->
    <form method="post" action="com_accs.php" class="do">
        <!-- Sélectionnez un élément de la colonne dot -->
        <label for="dot">Choisir Dot:</label>
        <select id="dot" name="dot" required class="doAn">
       
            <option value="adrar">Adrar</option>
            <option value="ain_defla">Ain Defla</option>
            <option value="ain_temouchent">Ain Temouchent</option>
            <option value="alger_centre">Alger Centre</option>
            <option value="alger_est">Alger Est</option>
            <option value="alger_ouest">Alger Ouest</option>
            <option value="annaba">Annaba</option>
            <option value="batna">Batna</option>
            <option value="bechar">Bechar</option>
            <option value="bejaia">Bejaia</option>
            <option value="biskra">Biskra</option>
            <option value="blida">Blida</option>
            <option value="bordj_bouarreridj">Bordj Bouarreridj</option>
            <option value="bouira">Bouira</option>
            <option value="boumerdes">Boumerdes</option>
            <option value="chlef">Chlef</option>
            <option value="constantine">Constantine</option>
            <option value="djelfa">Djelfa</option>
            <option value="el_bayadh">El Bayadh</option>
            <option value="el_oued">El Oued</option>
            <option value="el_taref">El Taref</option>
            <option value="ghardaia">Ghardaia</option>
            <option value="guelma">Guelma</option>
            <option value="illizi">Illizi</option>
            <option value="jijel">Jijel</option>
            <option value="khenchela">Khenchela</option>
            <option value="laghouat">Laghouat</option>
            <option value="mascara">Mascara</option>
            <option value="medea">Medea</option>
            <option value="mila">Mila</option>
            <option value="mostaganem">Mostaganem</option>
            <option value="msila">Msila</option>
            <option value="naama">Naama</option>
            <option value="oran">Oran</option>
            <option value="ouargla">Ouargla</option>
            <option value="oum_el_bouaghi">Oum El Bouaghi</option>
            <option value="relizane">Relizane</option>
            <option value="saida">Saida</option>
            <option value="setif">Setif</option>
            <option value="sidi_bel_abbes">Sidi Bel Abbes</option>
            <option value="skikda">Skikda</option>
            <option value="souk_ahras">Souk Ahras</option>
            <option value="tamanrasset">Tamanrasset</option>
            <option value="tebessa">Tebessa</option>
            <option value="tiaret">Tiaret</option>
            <option value="tindouf">Tindouf</option>
            <option value="tipaza">Tipaza</option>
            <option value="tissemsilt">Tissemsilt</option>
            <option value="tizi_ouzou">Tizi Ouzou</option>
            <option value="tlemcen">Tlemcen</option>
            <option value="beni_abbes">Beni Abbes</option>
            <option value="bordj_badji_mokhtar">Bordj Badji Mokhtar</option>
            <option value="djanet">Djanet</option>
            <option value="el_meghaier">El Meghaier</option>
            <option value="el_meniaa">El Meniaa</option>
            <option value="in_guezzam">In Guezzam</option>
            <option value="in_salah">In Salah</option>
            <option value="ouled_djellal">Ouled Djellal</option>
            <option value="timimoun">Timimoun</option>
            <option value="touggourt">Touggourt</option>
           
        </select>

        <label for="annee">Année : </label>
        <input type="number" id="annee" name="annee"  required class="doAn">
       
        <br><br>

        

        <button class="button">
           <span>
             <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z"></path></svg>
           </span>
        </button>


        
    </form>



    <?php
// Désactiver temporairement les avertissements pour les clés de tableau manquantes
error_reporting(E_ERROR | E_PARSE);

// Connexion à la base de données
$con = new mysqli("localhost", "root", "", "algerie_telecom");

// Vérifier la connexion
if ($con->connect_error) {
    die("La connexion a échoué: " . $con->connect_error);
}

// Récupérer l'année et la dot du formulaire
$annee = isset($_POST['annee']) ? $_POST['annee'] : null;
$dot = isset($_POST['dot']) ? $_POST['dot'] : null;

// Initialiser les tableaux
$data_re_n_1 = array();
$data_objectif = array();
$data_realisation = array();

// Vérification des entrées
if ($annee && $dot) {
    // Requête SQL pour récupérer les données de table_cm_ligne_tel_re_n_1
    $sql_re_n_1 = "SELECT mois, $dot FROM table_cm_ligne_tel_re_n_1 WHERE annee = '$annee'";
    $result_re_n_1 = $con->query($sql_re_n_1);

    // Requête SQL pour récupérer les données de table_cm_ligne_tel_objectif
    $sql_objectif = "SELECT mois, $dot FROM table_cm_ligne_tel_objectif WHERE annee = '$annee'";
    $result_objectif = $con->query($sql_objectif);

    // Requête SQL pour récupérer les données de table_cm_ligne_tel_realisation
    $sql_realisation = "SELECT mois, $dot FROM table_cm_ligne_tel_realisation WHERE annee = '$annee'";
    $result_realisation = $con->query($sql_realisation);

    // Remplir les tableaux avec les résultats des requêtes
    if ($result_re_n_1) {
        while ($row = $result_re_n_1->fetch_assoc()) {
            $data_re_n_1[$row['mois']] = $row[$dot];
        }
    }

    if ($result_objectif) {
        while ($row = $result_objectif->fetch_assoc()) {
            $data_objectif[$row['mois']] = $row[$dot];
        }
    }

    if ($result_realisation) {
        while ($row = $result_realisation->fetch_assoc()) {
            $data_realisation[$row['mois']] = $row[$dot];
        }
    }
}

// Calcul des totaux pour les valeurs annuelles
$total_re_n_1 = is_array($data_re_n_1) ? array_sum($data_re_n_1) : 0;
$total_objectif = is_array($data_objectif) ? array_sum($data_objectif) : 0;
$total_realisation = is_array($data_realisation) ? array_sum($data_realisation) : 0;
$total_taux_de_realisation_m = $total_objectif != 0 ? ($total_realisation / $total_objectif) * 100 : 0;
$total_taux_de_realisation_p = $total_taux_de_realisation_m;
$total_taux_de_realisation_a = $total_taux_de_realisation_m;
$total_ecard = $total_realisation - $total_objectif;
$total_rest_a_realiser = max($total_objectif - $total_realisation, 0);

// Afficher les données dans un tableau
echo "<h1>La dot de $dot en $annee :</h1>";

echo "<table border='1'>";
echo "<tr><th colspan='14'>COMMERCIALISATION/ LIGNE TEL [PSTN]</th></tr>";
echo "<tr><th>MOIS</th><th>REALISE EX [N-1] Par Mois</th><th>REALISE EX [N-1] Période</th><th>OBJECTIF Par Mois</th><th>OBJECTIF Période</th><th>REALISE Par Mois</th><th>REALISE Période</th><th>TAUX(%)REALISE PAR MOIS</th><th>TAUX(%)REALISE PAR PERIODE</th><th>TAUX(%)REALISE PAR ANNEE</th><th>ECART Par Mois</th><th>ECART Période</th><th>RESTE À RÉALISER</th><th>COMPARAISON À L'ANNÉE PRÉCÉDENTE (%)</th></tr>";

$months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
foreach ($months as $mois) {
    echo "<tr>";
    echo "<td>$mois</td>";

    // REALISE EX [N-1] Par Mois
    echo "<td>" . (isset($data_re_n_1[$mois]) ? $data_re_n_1[$mois] : '') . "</td>";

    // REALISE EX [N-1] Période
    $realise_periode_re_n_1 = 0;
    foreach ($months as $m) {
        if (isset($data_re_n_1[$m]) && $m !== $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$m];
        } elseif ($m === $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$mois];
            break;
        }
    }
    echo "<td>$realise_periode_re_n_1</td>";

    // OBJECTIF Par Mois
    echo "<td>" . (isset($data_objectif[$mois]) ? $data_objectif[$mois] : '') . "</td>";

    // OBJECTIF Période
    $objectif_periode = 0;
    foreach ($months as $m) {
        if (isset($data_objectif[$m]) && $m !== $mois) {
            $objectif_periode += $data_objectif[$m];
        } elseif ($m === $mois) {
            $objectif_periode += $data_objectif[$mois];
            break;
        }
    }
    echo "<td>$objectif_periode</td>";

    // REALISE Par Mois
    echo "<td>" . (isset($data_realisation[$mois]) ? $data_realisation[$mois] : '') . "</td>";

    // REALISE Période
    $realise_periode = 0;
    foreach ($months as $m) {
        if (isset($data_realisation[$m]) && $m !== $mois) {
            $realise_periode += $data_realisation[$m];
        } elseif ($m === $mois) {
            $realise_periode += $data_realisation[$mois];
            break;
        }
    }
    echo "<td>$realise_periode</td>";

    // Calculer et afficher le taux de réalisation
    $taux_realisation = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) && $data_objectif[$mois] !== 0 ? ($data_realisation[$mois] / $data_objectif[$mois]) * 100 : 0;
    echo "<td>$taux_realisation %</td>";

    // Calculer et afficher le pourcentage périodique
    $pourcentage_periodique = $objectif_periode !== 0 ? ($realise_periode / $objectif_periode) * 100 : 0;
    echo "<td>$pourcentage_periodique %</td>";

    // Calculer et afficher le pourcentage de réalisation par rapport à l'objectif annuel
    $pourcentage_realisation_par_rapport_objectif_annuel = $total_objectif !== 0 ? ($realise_periode / $total_objectif) * 100 : 0;
    echo "<td>$pourcentage_realisation_par_rapport_objectif_annuel %</td>";

    // Calculer et afficher l'écart par mois
    $ecart_par_mois = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) ? ($data_realisation[$mois] - $data_objectif[$mois]) : 0;
    echo "<td>$ecart_par_mois</td>";

    // Calculer et afficher l'écart périodique
    $ecart_periode = $realise_periode - $objectif_periode;
    echo "<td>$ecart_periode</td>";

    // Calculer et afficher le reste à réaliser
    $reste_a_realiser = max($total_objectif - $realise_periode, 0);
    echo "<td>$reste_a_realiser</td>";

    // Calculer et afficher la comparaison à l'année précédente
    $comparaison_annee_precedente = isset($data_realisation[$mois]) && isset($data_re_n_1[$mois]) && $data_re_n_1[$mois] !== 0 ? ($data_realisation[$mois] / $data_re_n_1[$mois]) * 100 : 0;
    echo "<td>$comparaison_annee_precedente %</td>";

    echo "</tr>";
}

// Ajout de la ligne pour les totaux annuels
$comparaison = $total_re_n_1 != 0 ? ($total_realisation / $total_re_n_1) * 100 : 0;
echo "<tr>";
echo "<td>Annuel</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_taux_de_realisation_m%</td>";
echo "<td>$total_taux_de_realisation_p%</td>";
echo "<td>$total_taux_de_realisation_a%</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_rest_a_realiser</td>";
echo "<td>$comparaison%</td>";
echo "</tr>";

echo "</table>";

// Fermer la connexion
$con->close();
?>


<?php
// Désactiver temporairement les avertissements pour les clés de tableau manquantes
error_reporting(E_ERROR | E_PARSE);

// Connexion à la base de données
$con = new mysqli("localhost", "root", "", "algerie_telecom");

// Vérifier la connexion
if ($con->connect_error) {
    die("La connexion a échoué: " . $con->connect_error);
}

// Récupérer l'année et la dot du formulaire
$annee = isset($_POST['annee']) ? $_POST['annee'] : null;
$dot = isset($_POST['dot']) ? $_POST['dot'] : null;

// Initialiser les tableaux
$data_re_n_1 = array();
$data_objectif = array();
$data_realisation = array();

// Vérification des entrées
if ($annee && $dot) {
    // Requête SQL pour récupérer les données de  	table_cm_ftth_re_n_1
    $sql_re_n_1 = "SELECT mois, $dot FROM  	table_cm_ftth_re_n_1  WHERE annee = '$annee'";
    $result_re_n_1 = $con->query($sql_re_n_1);

    // Requête SQL pour récupérer les données de table_cm_ftth_objectif
    $sql_objectif = "SELECT mois, $dot FROM table_cm_ftth_objectif WHERE annee = '$annee'";
    $result_objectif = $con->query($sql_objectif);

    // Requête SQL pour récupérer les données de  	 	table_cm_ftth_realisation
    $sql_realisation = "SELECT mois, $dot FROM  	 	table_cm_ftth_realisation WHERE annee = '$annee'";
    $result_realisation = $con->query($sql_realisation);

    // Remplir les tableaux avec les résultats des requêtes
    if ($result_re_n_1) {
        while ($row = $result_re_n_1->fetch_assoc()) {
            $data_re_n_1[$row['mois']] = $row[$dot];
        }
    }

    if ($result_objectif) {
        while ($row = $result_objectif->fetch_assoc()) {
            $data_objectif[$row['mois']] = $row[$dot];
        }
    }

    if ($result_realisation) {
        while ($row = $result_realisation->fetch_assoc()) {
            $data_realisation[$row['mois']] = $row[$dot];
        }
    }
}

// Calcul des totaux pour les valeurs annuelles
$total_re_n_1 = is_array($data_re_n_1) ? array_sum($data_re_n_1) : 0;
$total_objectif = is_array($data_objectif) ? array_sum($data_objectif) : 0;
$total_realisation = is_array($data_realisation) ? array_sum($data_realisation) : 0;
$total_taux_de_realisation_m = $total_objectif != 0 ? ($total_realisation / $total_objectif) * 100 : 0;
$total_taux_de_realisation_p = $total_taux_de_realisation_m;
$total_taux_de_realisation_a = $total_taux_de_realisation_m;
$total_ecard = $total_realisation - $total_objectif;
$total_rest_a_realiser = max($total_objectif - $total_realisation, 0);

// Afficher les données dans un tableau
echo "<h1>La dot de $dot en $annee :</h1>";

echo "<table border='1'>";
echo "<tr><th colspan='14'>COMMERCIALISATION/ INTERNET FTTH</th></tr>";
echo "<tr><th>MOIS</th><th>REALISE EX [N-1] Par Mois</th><th>REALISE EX [N-1] Période</th><th>OBJECTIF Par Mois</th><th>OBJECTIF Période</th><th>REALISE Par Mois</th><th>REALISE Période</th><th>TAUX(%)REALISE PAR MOIS</th><th>TAUX(%)REALISE PAR PERIODE</th><th>TAUX(%)REALISE PAR ANNEE</th><th>ECART Par Mois</th><th>ECART Période</th><th>RESTE À RÉALISER</th><th>COMPARAISON À L'ANNÉE PRÉCÉDENTE (%)</th></tr>";

$months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
foreach ($months as $mois) {
    echo "<tr>";
    echo "<td>$mois</td>";

    // REALISE EX [N-1] Par Mois
    echo "<td>" . (isset($data_re_n_1[$mois]) ? $data_re_n_1[$mois] : '') . "</td>";

    // REALISE EX [N-1] Période
    $realise_periode_re_n_1 = 0;
    foreach ($months as $m) {
        if (isset($data_re_n_1[$m]) && $m !== $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$m];
        } elseif ($m === $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$mois];
            break;
        }
    }
    echo "<td>$realise_periode_re_n_1</td>";

    // OBJECTIF Par Mois
    echo "<td>" . (isset($data_objectif[$mois]) ? $data_objectif[$mois] : '') . "</td>";

    // OBJECTIF Période
    $objectif_periode = 0;
    foreach ($months as $m) {
        if (isset($data_objectif[$m]) && $m !== $mois) {
            $objectif_periode += $data_objectif[$m];
        } elseif ($m === $mois) {
            $objectif_periode += $data_objectif[$mois];
            break;
        }
    }
    echo "<td>$objectif_periode</td>";

    // REALISE Par Mois
    echo "<td>" . (isset($data_realisation[$mois]) ? $data_realisation[$mois] : '') . "</td>";

    // REALISE Période
    $realise_periode = 0;
    foreach ($months as $m) {
        if (isset($data_realisation[$m]) && $m !== $mois) {
            $realise_periode += $data_realisation[$m];
        } elseif ($m === $mois) {
            $realise_periode += $data_realisation[$mois];
            break;
        }
    }
    echo "<td>$realise_periode</td>";

    // Calculer et afficher le taux de réalisation
    $taux_realisation = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) && $data_objectif[$mois] !== 0 ? ($data_realisation[$mois] / $data_objectif[$mois]) * 100 : 0;
    echo "<td>$taux_realisation %</td>";

    // Calculer et afficher le pourcentage périodique
    $pourcentage_periodique = $objectif_periode !== 0 ? ($realise_periode / $objectif_periode) * 100 : 0;
    echo "<td>$pourcentage_periodique %</td>";

    // Calculer et afficher le pourcentage de réalisation par rapport à l'objectif annuel
    $pourcentage_realisation_par_rapport_objectif_annuel = $total_objectif !== 0 ? ($realise_periode / $total_objectif) * 100 : 0;
    echo "<td>$pourcentage_realisation_par_rapport_objectif_annuel %</td>";

    // Calculer et afficher l'écart par mois
    $ecart_par_mois = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) ? ($data_realisation[$mois] - $data_objectif[$mois]) : 0;
    echo "<td>$ecart_par_mois</td>";

    // Calculer et afficher l'écart périodique
    $ecart_periode = $realise_periode - $objectif_periode;
    echo "<td>$ecart_periode</td>";

    // Calculer et afficher le reste à réaliser
    $reste_a_realiser = max($total_objectif - $realise_periode, 0);
    echo "<td>$reste_a_realiser</td>";

    // Calculer et afficher la comparaison à l'année précédente
    $comparaison_annee_precedente = isset($data_realisation[$mois]) && isset($data_re_n_1[$mois]) && $data_re_n_1[$mois] !== 0 ? ($data_realisation[$mois] / $data_re_n_1[$mois]) * 100 : 0;
    echo "<td>$comparaison_annee_precedente %</td>";

    echo "</tr>";
}

// Ajout de la ligne pour les totaux annuels
$comparaison = $total_re_n_1 != 0 ? ($total_realisation / $total_re_n_1) * 100 : 0;
echo "<tr>";
echo "<td>Annuel</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_taux_de_realisation_m%</td>";
echo "<td>$total_taux_de_realisation_p%</td>";
echo "<td>$total_taux_de_realisation_a%</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_rest_a_realiser</td>";
echo "<td>$comparaison%</td>";
echo "</tr>";

echo "</table>";

// Fermer la connexion
$con->close();
?>
<?php
// Désactiver temporairement les avertissements pour les clés de tableau manquantes
error_reporting(E_ERROR | E_PARSE);

// Connexion à la base de données
$con = new mysqli("localhost", "root", "", "algerie_telecom");

// Vérifier la connexion
if ($con->connect_error) {
    die("La connexion a échoué: " . $con->connect_error);
}

// Récupérer l'année et la dot du formulaire
$annee = isset($_POST['annee']) ? $_POST['annee'] : null;
$dot = isset($_POST['dot']) ? $_POST['dot'] : null;

// Initialiser les tableaux
$data_re_n_1 = array();
$data_objectif = array();
$data_realisation = array();

// Vérification des entrées
if ($annee && $dot) {
    // Requête SQL pour récupérer les données de table_cm_adsl_re_n_1
    $sql_re_n_1 = "SELECT mois, $dot FROM table_cm_adsl_re_n_1  WHERE annee = '$annee'";
    $result_re_n_1 = $con->query($sql_re_n_1);

    // Requête SQL pour récupérer les données de table_cm_adsl_objectif
    $sql_objectif = "SELECT mois, $dot FROM table_cm_adsl_objectif WHERE annee = '$annee'";
    $result_objectif = $con->query($sql_objectif);

    // Requête SQL pour récupérer les données de  	table_cm_adsl_realisation
    $sql_realisation = "SELECT mois, $dot FROM  	table_cm_adsl_realisation WHERE annee = '$annee'";
    $result_realisation = $con->query($sql_realisation);

    // Remplir les tableaux avec les résultats des requêtes
    if ($result_re_n_1) {
        while ($row = $result_re_n_1->fetch_assoc()) {
            $data_re_n_1[$row['mois']] = $row[$dot];
        }
    }

    if ($result_objectif) {
        while ($row = $result_objectif->fetch_assoc()) {
            $data_objectif[$row['mois']] = $row[$dot];
        }
    }

    if ($result_realisation) {
        while ($row = $result_realisation->fetch_assoc()) {
            $data_realisation[$row['mois']] = $row[$dot];
        }
    }
}

// Calcul des totaux pour les valeurs annuelles
$total_re_n_1 = is_array($data_re_n_1) ? array_sum($data_re_n_1) : 0;
$total_objectif = is_array($data_objectif) ? array_sum($data_objectif) : 0;
$total_realisation = is_array($data_realisation) ? array_sum($data_realisation) : 0;
$total_taux_de_realisation_m = $total_objectif != 0 ? ($total_realisation / $total_objectif) * 100 : 0;
$total_taux_de_realisation_p = $total_taux_de_realisation_m;
$total_taux_de_realisation_a = $total_taux_de_realisation_m;
$total_ecard = $total_realisation - $total_objectif;
$total_rest_a_realiser = max($total_objectif - $total_realisation, 0);

// Afficher les données dans un tableau
echo "<h1>La dot de $dot en $annee :</h1>";

echo "<table border='1'>";
echo "<tr><th colspan='14'>COMMERCIALISATION/ INTERNET ADSL </th></tr>";
echo "<tr><th>MOIS</th><th>REALISE EX [N-1] Par Mois</th><th>REALISE EX [N-1] Période</th><th>OBJECTIF Par Mois</th><th>OBJECTIF Période</th><th>REALISE Par Mois</th><th>REALISE Période</th><th>TAUX(%)REALISE PAR MOIS</th><th>TAUX(%)REALISE PAR PERIODE</th><th>TAUX(%)REALISE PAR ANNEE</th><th>ECART Par Mois</th><th>ECART Période</th><th>RESTE À RÉALISER</th><th>COMPARAISON À L'ANNÉE PRÉCÉDENTE (%)</th></tr>";

$months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
foreach ($months as $mois) {
    echo "<tr>";
    echo "<td>$mois</td>";

    // REALISE EX [N-1] Par Mois
    echo "<td>" . (isset($data_re_n_1[$mois]) ? $data_re_n_1[$mois] : '') . "</td>";

    // REALISE EX [N-1] Période
    $realise_periode_re_n_1 = 0;
    foreach ($months as $m) {
        if (isset($data_re_n_1[$m]) && $m !== $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$m];
        } elseif ($m === $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$mois];
            break;
        }
    }
    echo "<td>$realise_periode_re_n_1</td>";

    // OBJECTIF Par Mois
    echo "<td>" . (isset($data_objectif[$mois]) ? $data_objectif[$mois] : '') . "</td>";

    // OBJECTIF Période
    $objectif_periode = 0;
    foreach ($months as $m) {
        if (isset($data_objectif[$m]) && $m !== $mois) {
            $objectif_periode += $data_objectif[$m];
        } elseif ($m === $mois) {
            $objectif_periode += $data_objectif[$mois];
            break;
        }
    }
    echo "<td>$objectif_periode</td>";

    // REALISE Par Mois
    echo "<td>" . (isset($data_realisation[$mois]) ? $data_realisation[$mois] : '') . "</td>";

    // REALISE Période
    $realise_periode = 0;
    foreach ($months as $m) {
        if (isset($data_realisation[$m]) && $m !== $mois) {
            $realise_periode += $data_realisation[$m];
        } elseif ($m === $mois) {
            $realise_periode += $data_realisation[$mois];
            break;
        }
    }
    echo "<td>$realise_periode</td>";

    // Calculer et afficher le taux de réalisation
    $taux_realisation = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) && $data_objectif[$mois] !== 0 ? ($data_realisation[$mois] / $data_objectif[$mois]) * 100 : 0;
    echo "<td>$taux_realisation %</td>";

    // Calculer et afficher le pourcentage périodique
    $pourcentage_periodique = $objectif_periode !== 0 ? ($realise_periode / $objectif_periode) * 100 : 0;
    echo "<td>$pourcentage_periodique %</td>";

    // Calculer et afficher le pourcentage de réalisation par rapport à l'objectif annuel
    $pourcentage_realisation_par_rapport_objectif_annuel = $total_objectif !== 0 ? ($realise_periode / $total_objectif) * 100 : 0;
    echo "<td>$pourcentage_realisation_par_rapport_objectif_annuel %</td>";

    // Calculer et afficher l'écart par mois
    $ecart_par_mois = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) ? ($data_realisation[$mois] - $data_objectif[$mois]) : 0;
    echo "<td>$ecart_par_mois</td>";

    // Calculer et afficher l'écart périodique
    $ecart_periode = $realise_periode - $objectif_periode;
    echo "<td>$ecart_periode</td>";

    // Calculer et afficher le reste à réaliser
    $reste_a_realiser = max($total_objectif - $realise_periode, 0);
    echo "<td>$reste_a_realiser</td>";

    // Calculer et afficher la comparaison à l'année précédente
    $comparaison_annee_precedente = isset($data_realisation[$mois]) && isset($data_re_n_1[$mois]) && $data_re_n_1[$mois] !== 0 ? ($data_realisation[$mois] / $data_re_n_1[$mois]) * 100 : 0;
    echo "<td>$comparaison_annee_precedente %</td>";

    echo "</tr>";
}

// Ajout de la ligne pour les totaux annuels
$comparaison = $total_re_n_1 != 0 ? ($total_realisation / $total_re_n_1) * 100 : 0;
echo "<tr>";
echo "<td>Annuel</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_taux_de_realisation_m%</td>";
echo "<td>$total_taux_de_realisation_p%</td>";
echo "<td>$total_taux_de_realisation_a%</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_rest_a_realiser</td>";
echo "<td>$comparaison%</td>";
echo "</tr>";

echo "</table>";

// Fermer la connexion
$con->close();
?>


<?php
// Désactiver temporairement les avertissements pour les clés de tableau manquantes
error_reporting(E_ERROR | E_PARSE);

// Connexion à la base de données
$con = new mysqli("localhost", "root", "", "algerie_telecom");

// Vérifier la connexion
if ($con->connect_error) {
    die("La connexion a échoué: " . $con->connect_error);
}

// Récupérer l'année et la dot du formulaire
$annee = isset($_POST['annee']) ? $_POST['annee'] : null;
$dot = isset($_POST['dot']) ? $_POST['dot'] : null;

// Initialiser les tableaux
$data_re_n_1 = array();
$data_objectif = array();
$data_realisation = array();

// Vérification des entrées
if ($annee && $dot) {
    // Requête SQL pour récupérer les données de  	table_cm_4glte_re_n_1
    $sql_re_n_1 = "SELECT mois, $dot FROM  	table_cm_4glte_re_n_1 WHERE annee = '$annee'";
    $result_re_n_1 = $con->query($sql_re_n_1);

    // Requête SQL pour récupérer les données de table_cm_4g_lte_objectif
    $sql_objectif = "SELECT mois, $dot FROM table_cm_4g_lte_objectif WHERE annee = '$annee'";
    $result_objectif = $con->query($sql_objectif);

    // Requête SQL pour récupérer les données de  	table_cm_4g_lte_realisation
    $sql_realisation = "SELECT mois, $dot FROM  	table_cm_4g_lte_realisation WHERE annee = '$annee'";
    $result_realisation = $con->query($sql_realisation);

    // Remplir les tableaux avec les résultats des requêtes
    if ($result_re_n_1) {
        while ($row = $result_re_n_1->fetch_assoc()) {
            $data_re_n_1[$row['mois']] = $row[$dot];
        }
    }

    if ($result_objectif) {
        while ($row = $result_objectif->fetch_assoc()) {
            $data_objectif[$row['mois']] = $row[$dot];
        }
    }

    if ($result_realisation) {
        while ($row = $result_realisation->fetch_assoc()) {
            $data_realisation[$row['mois']] = $row[$dot];
        }
    }
}

// Calcul des totaux pour les valeurs annuelles
$total_re_n_1 = is_array($data_re_n_1) ? array_sum($data_re_n_1) : 0;
$total_objectif = is_array($data_objectif) ? array_sum($data_objectif) : 0;
$total_realisation = is_array($data_realisation) ? array_sum($data_realisation) : 0;
$total_taux_de_realisation_m = $total_objectif != 0 ? ($total_realisation / $total_objectif) * 100 : 0;
$total_taux_de_realisation_p = $total_taux_de_realisation_m;
$total_taux_de_realisation_a = $total_taux_de_realisation_m;
$total_ecard = $total_realisation - $total_objectif;
$total_rest_a_realiser = max($total_objectif - $total_realisation, 0);

// Afficher les données dans un tableau
echo "<h1>La dot de $dot en $annee :</h1>";

echo "<table border='1'>";
echo "<tr><th colspan='14'>COMMERCIALISATION/ INTERNET 4G LTE</th></tr>";
echo "<tr><th>MOIS</th><th>REALISE EX [N-1] Par Mois</th><th>REALISE EX [N-1] Période</th><th>OBJECTIF Par Mois</th><th>OBJECTIF Période</th><th>REALISE Par Mois</th><th>REALISE Période</th><th>TAUX(%)REALISE PAR MOIS</th><th>TAUX(%)REALISE PAR PERIODE</th><th>TAUX(%)REALISE PAR ANNEE</th><th>ECART Par Mois</th><th>ECART Période</th><th>RESTE À RÉALISER</th><th>COMPARAISON À L'ANNÉE PRÉCÉDENTE (%)</th></tr>";

$months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
foreach ($months as $mois) {
    echo "<tr>";
    echo "<td>$mois</td>";

    // REALISE EX [N-1] Par Mois
    echo "<td>" . (isset($data_re_n_1[$mois]) ? $data_re_n_1[$mois] : '') . "</td>";

    // REALISE EX [N-1] Période
    $realise_periode_re_n_1 = 0;
    foreach ($months as $m) {
        if (isset($data_re_n_1[$m]) && $m !== $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$m];
        } elseif ($m === $mois) {
            $realise_periode_re_n_1 += $data_re_n_1[$mois];
            break;
        }
    }
    echo "<td>$realise_periode_re_n_1</td>";

    // OBJECTIF Par Mois
    echo "<td>" . (isset($data_objectif[$mois]) ? $data_objectif[$mois] : '') . "</td>";

    // OBJECTIF Période
    $objectif_periode = 0;
    foreach ($months as $m) {
        if (isset($data_objectif[$m]) && $m !== $mois) {
            $objectif_periode += $data_objectif[$m];
        } elseif ($m === $mois) {
            $objectif_periode += $data_objectif[$mois];
            break;
        }
    }
    echo "<td>$objectif_periode</td>";

    // REALISE Par Mois
    echo "<td>" . (isset($data_realisation[$mois]) ? $data_realisation[$mois] : '') . "</td>";

    // REALISE Période
    $realise_periode = 0;
    foreach ($months as $m) {
        if (isset($data_realisation[$m]) && $m !== $mois) {
            $realise_periode += $data_realisation[$m];
        } elseif ($m === $mois) {
            $realise_periode += $data_realisation[$mois];
            break;
        }
    }
    echo "<td>$realise_periode</td>";

    // Calculer et afficher le taux de réalisation
    $taux_realisation = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) && $data_objectif[$mois] !== 0 ? ($data_realisation[$mois] / $data_objectif[$mois]) * 100 : 0;
    echo "<td>$taux_realisation %</td>";

    // Calculer et afficher le pourcentage périodique
    $pourcentage_periodique = $objectif_periode !== 0 ? ($realise_periode / $objectif_periode) * 100 : 0;
    echo "<td>$pourcentage_periodique %</td>";

    // Calculer et afficher le pourcentage de réalisation par rapport à l'objectif annuel
    $pourcentage_realisation_par_rapport_objectif_annuel = $total_objectif !== 0 ? ($realise_periode / $total_objectif) * 100 : 0;
    echo "<td>$pourcentage_realisation_par_rapport_objectif_annuel %</td>";

    // Calculer et afficher l'écart par mois
    $ecart_par_mois = isset($data_realisation[$mois]) && isset($data_objectif[$mois]) ? ($data_realisation[$mois] - $data_objectif[$mois]) : 0;
    echo "<td>$ecart_par_mois</td>";

    // Calculer et afficher l'écart périodique
    $ecart_periode = $realise_periode - $objectif_periode;
    echo "<td>$ecart_periode</td>";

    // Calculer et afficher le reste à réaliser
    $reste_a_realiser = max($total_objectif - $realise_periode, 0);
    echo "<td>$reste_a_realiser</td>";

    // Calculer et afficher la comparaison à l'année précédente
    $comparaison_annee_precedente = isset($data_realisation[$mois]) && isset($data_re_n_1[$mois]) && $data_re_n_1[$mois] !== 0 ? ($data_realisation[$mois] / $data_re_n_1[$mois]) * 100 : 0;
    echo "<td>$comparaison_annee_precedente %</td>";

    echo "</tr>";
}

// Ajout de la ligne pour les totaux annuels
$comparaison = $total_re_n_1 != 0 ? ($total_realisation / $total_re_n_1) * 100 : 0;
echo "<tr>";
echo "<td>Annuel</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_re_n_1</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_objectif</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_realisation</td>";
echo "<td>$total_taux_de_realisation_m%</td>";
echo "<td>$total_taux_de_realisation_p%</td>";
echo "<td>$total_taux_de_realisation_a%</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_ecard</td>";
echo "<td>$total_rest_a_realiser</td>";
echo "<td>$comparaison%</td>";
echo "</tr>";

echo "</table>";

// Fermer la connexion
$con->close();
?>

</main>
<script src="script.js"></script>
</body>
</html>