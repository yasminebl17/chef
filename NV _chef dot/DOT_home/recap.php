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
<h1>ETAT RECAPITULATIF DE REALISATION DES OBJECTIFS DE L'EXERCICE</h1>


    <!-- Formulaire de recherche -->
    <form method="post" action="recap.php" class="do">
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
            <option value="total">Total de tout les dots </option>
           
        </select>

        <label for="annee">Année : </label>
        <input type="number" id="annee" name="annee"  required class="doAn">
       
        <br><br>

        <!-- Champ pour le mois -->
        <label for="mois">Mois :</label>
        <select id="mois" name="mois" required class="doAn">
            <option value="janvier">Janvier</option>
            <option value="février">Février</option>
            <option value="mars">Mars</option>
            <option value="avril">Avril</option>
            <option value="mai">Mai</option>
            <option value="juin">Juin</option>
            <option value="juillet">Juillet</option>
            <option value="août">Août</option>
            <option value="septembre">Septembre</option>
            <option value="octobre">Octobre</option>
            <option value="novembre">Novembre</option>
            <option value="décembre">Décembre</option>
        </select>
        <br><br>

        <button class="button">
           <span>
             <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z"></path></svg>
           </span>
        </button>_
    </form>
    <?php
// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérez les valeurs du formulaire
    $annee = $_POST['annee'];
    $mois = $_POST['mois'];
    $dot = $_POST['dot'];

    // Connexion à la base de données
    $con = new mysqli("localhost", "root", "", "algerie_telecom");

    // Vérifier la connexion
    if ($con->connect_error) {
        die("La connexion a échoué: " . $con->connect_error);
    }

    
     

 // Requête SQL pour récupérer les données correspondantes de la première table
$query1 = "SELECT `$dot` FROM table_cm_ligne_tel_objectif WHERE annee = ? AND mois = 'OBJECTIF ANNUEL'";

// Requête SQL pour récupérer les données correspondantes de la deuxième table
$query2 = "SELECT `$dot` FROM table_cm_ftth_objectif WHERE annee = ? AND mois = 'OBJECTIF ANNUEL'";

// Requête SQL pour récupérer les données correspondantes de la troisième table
$query3 = "SELECT `$dot` FROM table_cm_adsl_objectif WHERE annee = ? AND mois = 'OBJECTIF ANNUEL'";

// Requête SQL pour récupérer les données correspondantes de la quatrième table
$query4 = "SELECT `$dot` FROM table_cm_4g_lte_objectif WHERE annee = ? AND mois = 'OBJECTIF ANNUEL'";

// Préparer et exécuter la première requête
$stmt1 = $con->prepare($query1);
$stmt1->bind_param("i", $annee);
$stmt1->execute();
$result1 = $stmt1->get_result();
$row1 = $result1->fetch_assoc();
$objectif_annuel1 = $row1[$dot];

// Préparer et exécuter la deuxième requête
$stmt2 = $con->prepare($query2);
$stmt2->bind_param("i", $annee);
$stmt2->execute();
$result2 = $stmt2->get_result();
$row2 = $result2->fetch_assoc();
$objectif_annuel2 = $row2[$dot];

// Préparer et exécuter la troisième requête
$stmt3 = $con->prepare($query3);
$stmt3->bind_param("i", $annee);
$stmt3->execute();
$result3 = $stmt3->get_result();
$row3 = $result3->fetch_assoc();
$objectif_annuel3 = $row3[$dot];

// Préparer et exécuter la quatrième requête
$stmt4 = $con->prepare($query4);
$stmt4->bind_param("i", $annee);
$stmt4->execute();
$result4 = $stmt4->get_result();
$row4 = $result4->fetch_assoc();
$objectif_annuel4 = $row4[$dot];


// Requête SQL pour récupérer l'objectif périodique de la première table
$query_objectif_periodique1 = "SELECT SUM(`$dot`) AS objectif_periodique FROM table_cm_ligne_tel_objectif WHERE annee = ? AND (";

// Requête SQL pour récupérer l'objectif périodique de la deuxième table
$query_objectif_periodique2 = "SELECT SUM(`$dot`) AS objectif_periodique FROM table_cm_ftth_objectif WHERE annee = ? AND (";

// Requête SQL pour récupérer l'objectif périodique de la troisième table
$query_objectif_periodique3 = "SELECT SUM(`$dot`) AS objectif_periodique FROM table_cm_adsl_objectif WHERE annee = ? AND (";

// Requête SQL pour récupérer l'objectif périodique de la quatrième table
$query_objectif_periodique4 = "SELECT SUM(`$dot`) AS objectif_periodique FROM table_cm_4g_lte_objectif WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_objectif_periodique1 .= " OR ";
        $query_objectif_periodique2 .= " OR ";
        $query_objectif_periodique3 .= " OR ";
        $query_objectif_periodique4 .= " OR ";
    }
    $query_objectif_periodique1 .= "mois = ?";
    $query_objectif_periodique2 .= "mois = ?";
    $query_objectif_periodique3 .= "mois = ?";
    $query_objectif_periodique4 .= "mois = ?";
}

$query_objectif_periodique1 .= ")";
$query_objectif_periodique2 .= ")";
$query_objectif_periodique3 .= ")";
$query_objectif_periodique4 .= ")";

// Préparer et exécuter la requête pour l'objectif périodique de la première table
$stmt_objectif_periodique1 = $con->prepare($query_objectif_periodique1);
$stmt_objectif_periodique1->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_objectif_periodique1->execute();
$result_objectif_periodique1 = $stmt_objectif_periodique1->get_result();
$row_objectif_periodique1 = $result_objectif_periodique1->fetch_assoc();
$objectif_periodique1 = $row_objectif_periodique1['objectif_periodique'];

// Préparer et exécuter la requête pour l'objectif périodique de la deuxième table
$stmt_objectif_periodique2 = $con->prepare($query_objectif_periodique2);
$stmt_objectif_periodique2->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_objectif_periodique2->execute();
$result_objectif_periodique2 = $stmt_objectif_periodique2->get_result();
$row_objectif_periodique2 = $result_objectif_periodique2->fetch_assoc();
$objectif_periodique2 = $row_objectif_periodique2['objectif_periodique'];

// Préparer et exécuter la requête pour l'objectif périodique de la troisième table
$stmt_objectif_periodique3 = $con->prepare($query_objectif_periodique3);
$stmt_objectif_periodique3->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_objectif_periodique3->execute();
$result_objectif_periodique3 = $stmt_objectif_periodique3->get_result();
$row_objectif_periodique3 = $result_objectif_periodique3->fetch_assoc();
$objectif_periodique3 = $row_objectif_periodique3['objectif_periodique'];

// Préparer et exécuter la requête pour l'objectif périodique de la quatrième table
$stmt_objectif_periodique4 = $con->prepare($query_objectif_periodique4);
$stmt_objectif_periodique4->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_objectif_periodique4->execute();
$result_objectif_periodique4 = $stmt_objectif_periodique4->get_result();
$row_objectif_periodique4 = $result_objectif_periodique4->fetch_assoc();
$objectif_periodique4 = $row_objectif_periodique4['objectif_periodique'];

// Calculer la somme des réalisations des mois précédents jusqu'au mois actuel
$query_realisation_periodique = "SELECT SUM(`$dot`) AS realisation_periodique FROM table_cm_ligne_tel_realisation WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_realisation_periodique .= " OR ";
    }
    $query_realisation_periodique .= "mois = ?";
}

$query_realisation_periodique .= ")";

// Préparer et exécuter la requête pour la réalisation périodique
$stmt_realisation_periodique = $con->prepare($query_realisation_periodique);
$stmt_realisation_periodique->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_realisation_periodique->execute();
$result_realisation_periodique = $stmt_realisation_periodique->get_result();
$row_realisation_periodique = $result_realisation_periodique->fetch_assoc();
$realisation_periodique = $row_realisation_periodique['realisation_periodique'];

// Calculer la somme des réalisations des mois précédents jusqu'au mois actuel pour la table table_cm_adsl_realisation
$query_realisation_periodique_adsl = "SELECT SUM(`$dot`) AS realisation_periodique FROM table_cm_adsl_realisation WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_realisation_periodique_adsl .= " OR ";
    }
    $query_realisation_periodique_adsl .= "mois = ?";
}

$query_realisation_periodique_adsl .= ")";

// Préparer et exécuter la requête pour la réalisation périodique pour la table table_cm_adsl_realisation
$stmt_realisation_periodique_adsl = $con->prepare($query_realisation_periodique_adsl);
$stmt_realisation_periodique_adsl->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_realisation_periodique_adsl->execute();
$result_realisation_periodique_adsl = $stmt_realisation_periodique_adsl->get_result();
$row_realisation_periodique_adsl = $result_realisation_periodique_adsl->fetch_assoc();
$realisation_periodique_adsl = $row_realisation_periodique_adsl['realisation_periodique'];


// Faites de même pour les tables table_cm_ftth_realisation et table_cm_4g_lte_realisation en remplaçant les noms de table et de colonnes correspondants.
// Calculer la somme des réalisations des mois précédents jusqu'au mois actuel pour la table table_cm_ftth_realisation
$query_realisation_periodique_ftth = "SELECT SUM(`$dot`) AS realisation_periodique FROM table_cm_ftth_realisation WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_realisation_periodique_ftth .= " OR ";
    }
    $query_realisation_periodique_ftth .= "mois = ?";
}

$query_realisation_periodique_ftth .= ")";

// Préparer et exécuter la requête pour la réalisation périodique pour la table table_cm_ftth_realisation
$stmt_realisation_periodique_ftth = $con->prepare($query_realisation_periodique_ftth);
$stmt_realisation_periodique_ftth->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_realisation_periodique_ftth->execute();
$result_realisation_periodique_ftth = $stmt_realisation_periodique_ftth->get_result();
$row_realisation_periodique_ftth = $result_realisation_periodique_ftth->fetch_assoc();
$realisation_periodique_ftth = $row_realisation_periodique_ftth['realisation_periodique'];



// Faites de même pour la table table_cm_4g_lte_realisation en remplaçant les noms de table et de colonnes correspondants.
// Calculer la somme des réalisations des mois précédents jusqu'au mois actuel pour la table table_cm_4g_lte_realisation
$query_realisation_periodique_4g_lte = "SELECT SUM(`$dot`) AS realisation_periodique FROM table_cm_4g_lte_realisation WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_realisation_periodique_4g_lte .= " OR ";
    }
    $query_realisation_periodique_4g_lte .= "mois = ?";
}

$query_realisation_periodique_4g_lte .= ")";

// Préparer et exécuter la requête pour la réalisation périodique pour la table table_cm_4g_lte_realisation
$stmt_realisation_periodique_4g_lte = $con->prepare($query_realisation_periodique_4g_lte);
$stmt_realisation_periodique_4g_lte->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_realisation_periodique_4g_lte->execute();
$result_realisation_periodique_4g_lte = $stmt_realisation_periodique_4g_lte->get_result();
$row_realisation_periodique_4g_lte = $result_realisation_periodique_4g_lte->fetch_assoc();
$realisation_periodique_4g_lte = $row_realisation_periodique_4g_lte['realisation_periodique'];


// Requête SQL pour récupérer les réalisations annuelles de la première table
$query_realisation_annuelle1 = "SELECT SUM(`$dot`) AS realisation_annuelle FROM table_cm_ligne_tel_realisation WHERE annee = ? AND mois = 'REALISATION ANNUEL'";
// Requête SQL pour récupérer les réalisations annuelles de la deuxième table
$query_realisation_annuelle2 = "SELECT SUM(`$dot`) AS realisation_annuelle FROM table_cm_ftth_realisation WHERE annee = ? AND mois = 'REALISATION ANNUEL'";
// Requête SQL pour récupérer les réalisations annuelles de la troisième table
$query_realisation_annuelle3 = "SELECT SUM(`$dot`) AS realisation_annuelle FROM table_cm_adsl_realisation WHERE annee = ? AND mois = 'REALISATION ANNUEL'";
// Requête SQL pour récupérer les réalisations annuelles de la quatrième table
$query_realisation_annuelle4 = "SELECT SUM(`$dot`) AS realisation_annuelle FROM table_cm_4g_lte_realisation WHERE annee = ? AND mois = 'REALISATION ANNUEL'";

// Préparer et exécuter la requête pour les réalisations annuelles de la première table
$stmt_realisation_annuelle1 = $con->prepare($query_realisation_annuelle1);
$stmt_realisation_annuelle1->bind_param("i", $annee);
$stmt_realisation_annuelle1->execute();
$result_realisation_annuelle1 = $stmt_realisation_annuelle1->get_result();
$row_realisation_annuelle1 = $result_realisation_annuelle1->fetch_assoc();
$realisation_annuelle1 = $row_realisation_annuelle1['realisation_annuelle'];

// Préparer et exécuter la requête pour les réalisations annuelles de la deuxième table
$stmt_realisation_annuelle2 = $con->prepare($query_realisation_annuelle2);
$stmt_realisation_annuelle2->bind_param("i", $annee);
$stmt_realisation_annuelle2->execute();
$result_realisation_annuelle2 = $stmt_realisation_annuelle2->get_result();
$row_realisation_annuelle2 = $result_realisation_annuelle2->fetch_assoc();
$realisation_annuelle2 = $row_realisation_annuelle2['realisation_annuelle'];

// Préparer et exécuter la requête pour les réalisations annuelles de la troisième table
$stmt_realisation_annuelle3 = $con->prepare($query_realisation_annuelle3);
$stmt_realisation_annuelle3->bind_param("i", $annee);
$stmt_realisation_annuelle3->execute();
$result_realisation_annuelle3 = $stmt_realisation_annuelle3->get_result();
$row_realisation_annuelle3 = $result_realisation_annuelle3->fetch_assoc();
$realisation_annuelle3 = $row_realisation_annuelle3['realisation_annuelle'];

// Préparer et exécuter la requête pour les réalisations annuelles de la quatrième table
$stmt_realisation_annuelle4 = $con->prepare($query_realisation_annuelle4);
$stmt_realisation_annuelle4->bind_param("i", $annee);
$stmt_realisation_annuelle4->execute();
$result_realisation_annuelle4 = $stmt_realisation_annuelle4->get_result();
$row_realisation_annuelle4 = $result_realisation_annuelle4->fetch_assoc();
$realisation_annuelle4 = $row_realisation_annuelle4['realisation_annuelle'];



// Calculer le taux de réalisation périodique pour chaque table
$taux_realisation_periodique1 = ($realisation_periodique / $objectif_periodique1) * 100;
$taux_realisation_periodique2 = ($realisation_periodique_ftth / $objectif_periodique2) * 100;
$taux_realisation_periodique3 = ($realisation_periodique_adsl / $objectif_periodique3) * 100;
$taux_realisation_periodique4 = ($realisation_periodique_4g_lte / $objectif_periodique4) * 100;


// Calculer le taux de réalisation annuelle pour chaque table
$taux_realisation_annuelle1 = ($realisation_annuelle1 / $objectif_annuel1) * 100;
$taux_realisation_annuelle2 = ($realisation_annuelle2 / $objectif_annuel2) * 100;
$taux_realisation_annuelle3 = ($realisation_annuelle3 / $objectif_annuel3) * 100;
$taux_realisation_annuelle4 = ($realisation_annuelle4 / $objectif_annuel4) * 100;



echo "<table border='1'>";
echo"<h1> Dot $dot $mois $annee</h1>";
echo "<tr><th colspan='6'>1. COMMERCIALISATION DES ACCES												
</th></tr>";
echo "<tr><th>PRODUIT	
</th><th>Objectif Annuel</th><th>Objectif Périodique</th><th>Réalisation Périodique</th><th>Taux de Réalisation Périodique (%)</th><th>Taux de Réalisation Annuelle (%)</th></tr>";

// Affichage des données pour la table table_cm_ligne_tel_objectif
echo "<tr><td>LIGNE TLP [PSTN]	
</td><td>$objectif_annuel1</td><td>$objectif_periodique1</td><td>$realisation_periodique</td><td>$taux_realisation_periodique1%</td><td>$taux_realisation_annuelle1%</td></tr>";

// Affichage des données pour la table table_cm_ftth_objectif
echo "<tr><td>ACCES [FTTH]	
</td><td>$objectif_annuel2</td><td>$objectif_periodique2</td><td>$realisation_periodique_ftth</td><td>$taux_realisation_periodique2%</td><td>$taux_realisation_annuelle2%</td></tr>";

// Affichage des données pour la table table_cm_adsl_objectif
echo "<tr><td>ACCES [ADSL]	
</td><td>$objectif_annuel3</td><td>$objectif_periodique3</td><td>$realisation_periodique_adsl</td><td>$taux_realisation_periodique3%</td><td>$taux_realisation_annuelle3%</td></tr>";

// Affichage des données pour la table table_cm_4g_lte_objectif
echo "<tr><td>ACCES 4G LTE	
</td><td>$objectif_annuel4</td><td>$objectif_periodique4</td><td>$realisation_periodique_4g_lte</td><td>$taux_realisation_periodique4%</td><td>$taux_realisation_annuelle4%</td></tr>";

echo "</table>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Requête SQL pour récupérer les données correspondantes de la première table (table_chif_aff_internet_4g_objectif)
$query_chiffre_aff_internet_4g = "SELECT `$dot` FROM table_chif_aff_internet_4g_objectif WHERE annee = ? AND mois = 'OBJECTIF ANNUEL'";

// Requête SQL pour récupérer les données correspondantes de la deuxième table (table_chif_aff_internet_filaire_objectif)
$query_chiffre_aff_internet_filaire = "SELECT `$dot` FROM table_chif_aff_internet_filaire_objectif WHERE annee = ? AND mois = 'OBJECTIF ANNUEL'";

// Requête SQL pour récupérer les données correspondantes de la troisième table (table_chif_aff_telephone_objectif)
$query_chiffre_aff_telephone = "SELECT `$dot` FROM table_chif_aff_telephone_objectif WHERE annee = ? AND mois = 'OBJECTIF ANNUEL'";

// Préparer et exécuter la première requête
$stmt_chiffre_aff_internet_4g = $con->prepare($query_chiffre_aff_internet_4g);
$stmt_chiffre_aff_internet_4g->bind_param("i", $annee);
$stmt_chiffre_aff_internet_4g->execute();
$result_chiffre_aff_internet_4g = $stmt_chiffre_aff_internet_4g->get_result();
$row_chiffre_aff_internet_4g = $result_chiffre_aff_internet_4g->fetch_assoc();
$objectif_annuel_internet_4g = $row_chiffre_aff_internet_4g[$dot];

// Préparer et exécuter la deuxième requête
$stmt_chiffre_aff_internet_filaire = $con->prepare($query_chiffre_aff_internet_filaire);
$stmt_chiffre_aff_internet_filaire->bind_param("i", $annee);
$stmt_chiffre_aff_internet_filaire->execute();
$result_chiffre_aff_internet_filaire = $stmt_chiffre_aff_internet_filaire->get_result();
$row_chiffre_aff_internet_filaire = $result_chiffre_aff_internet_filaire->fetch_assoc();
 $objectif_annuel_internet_filaire = $row_chiffre_aff_internet_filaire[$dot];

// Préparer et exécuter la troisième requête
$stmt_chiffre_aff_telephone = $con->prepare($query_chiffre_aff_telephone);
$stmt_chiffre_aff_telephone->bind_param("i", $annee);
$stmt_chiffre_aff_telephone->execute();
$result_chiffre_aff_telephone = $stmt_chiffre_aff_telephone->get_result();
$row_chiffre_aff_telephone = $result_chiffre_aff_telephone->fetch_assoc();
$objectif_annuel_tel = $row_chiffre_aff_telephone[$dot];


// Requête SQL pour récupérer l'objectif périodique de la première table (table_chif_aff_internet_4g_objectif)
$query_objectif_periodique_4g = "SELECT SUM(`$dot`) AS objectif_periodique FROM table_chif_aff_internet_4g_objectif WHERE annee = ? AND (";

// Requête SQL pour récupérer l'objectif périodique de la deuxième table (table_chif_aff_internet_filaire_objectif)
$query_objectif_periodique_filaire = "SELECT SUM(`$dot`) AS objectif_periodique FROM table_chif_aff_internet_filaire_objectif WHERE annee = ? AND (";

// Requête SQL pour récupérer l'objectif périodique de la troisième table (table_chif_aff_telephone_objectif)
$query_objectif_periodique_telephone = "SELECT SUM(`$dot`) AS objectif_periodique FROM table_chif_aff_telephone_objectif WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_objectif_periodique_4g .= " OR ";
        $query_objectif_periodique_filaire .= " OR ";
        $query_objectif_periodique_telephone .= " OR ";
    }
    $query_objectif_periodique_4g .= "mois = ?";
    $query_objectif_periodique_filaire .= "mois = ?";
    $query_objectif_periodique_telephone .= "mois = ?";
}

$query_objectif_periodique_4g .= ")";
$query_objectif_periodique_filaire .= ")";
$query_objectif_periodique_telephone .= ")";

// Préparer et exécuter la requête pour l'objectif périodique de la première table
$stmt_objectif_periodique_4g = $con->prepare($query_objectif_periodique_4g);
$stmt_objectif_periodique_4g->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_objectif_periodique_4g->execute();
$result_objectif_periodique_4g = $stmt_objectif_periodique_4g->get_result();
$row_objectif_periodique_4g = $result_objectif_periodique_4g->fetch_assoc();
$objectif_periodique_4g = $row_objectif_periodique_4g['objectif_periodique'];

// Préparer et exécuter la requête pour l'objectif périodique de la deuxième table
$stmt_objectif_periodique_filaire = $con->prepare($query_objectif_periodique_filaire);
$stmt_objectif_periodique_filaire->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_objectif_periodique_filaire->execute();
$result_objectif_periodique_filaire = $stmt_objectif_periodique_filaire->get_result();
$row_objectif_periodique_filaire = $result_objectif_periodique_filaire->fetch_assoc();
$objectif_periodique_filaire = $row_objectif_periodique_filaire['objectif_periodique'];

// Préparer et exécuter la requête pour l'objectif périodique de la troisième table
$stmt_objectif_periodique_telephone = $con->prepare($query_objectif_periodique_telephone);
$stmt_objectif_periodique_telephone->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_objectif_periodique_telephone->execute();
$result_objectif_periodique_telephone = $stmt_objectif_periodique_telephone->get_result();
$row_objectif_periodique_telephone = $result_objectif_periodique_telephone->fetch_assoc();
$objectif_periodique_telephone = $row_objectif_periodique_telephone['objectif_periodique'];


// Requête SQL pour récupérer la réalisation périodique pour la première table (table_chif_aff_internet_4g_objectif)
$query_realisation_periodique_4g = "SELECT SUM(`$dot`) AS realisation_periodique FROM table_chif_internet_4g_realisation WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_realisation_periodique_4g .= " OR ";
    }
    $query_realisation_periodique_4g .= "mois = ?";
}

$query_realisation_periodique_4g .= ")";

// Préparer et exécuter la requête pour la réalisation périodique pour la table table_chif_aff_internet_4g_realisation
$stmt_realisation_periodique_4g = $con->prepare($query_realisation_periodique_4g);
$stmt_realisation_periodique_4g->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_realisation_periodique_4g->execute();
$result_realisation_periodique_4g = $stmt_realisation_periodique_4g->get_result();
$row_realisation_periodique_4g = $result_realisation_periodique_4g->fetch_assoc();
$realisation_periodique_4g = $row_realisation_periodique_4g['realisation_periodique'];

// Répétez le même processus pour les tables table_chif_aff_internet_filaire_realisation et table_chif_aff_telephone_realisation en remplaçant les noms de table et de colonnes correspondants.
// Requête SQL pour récupérer la réalisation périodique pour la deuxième table (table_chif_aff_internet_filaire_objectif)
$query_realisation_periodique_filaire = "SELECT SUM(`$dot`) AS realisation_periodique FROM table_chif_internet_filaire_realisation WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_realisation_periodique_filaire .= " OR ";
    }
    $query_realisation_periodique_filaire .= "mois = ?";
}

$query_realisation_periodique_filaire .= ")";

// Préparer et exécuter la requête pour la réalisation périodique pour la table table_chif_aff_internet_filaire_realisation
$stmt_realisation_periodique_filaire = $con->prepare($query_realisation_periodique_filaire);
$stmt_realisation_periodique_filaire->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_realisation_periodique_filaire->execute();
$result_realisation_periodique_filaire = $stmt_realisation_periodique_filaire->get_result();
$row_realisation_periodique_filaire = $result_realisation_periodique_filaire->fetch_assoc();
$realisation_periodique_filaire = $row_realisation_periodique_filaire['realisation_periodique'];

// Répétez le même processus pour la table table_chif_aff_telephone_realisation en remplaçant les noms de table et de colonnes correspondants.
// Requête SQL pour récupérer la réalisation périodique pour la troisième table (table_chif_aff_telephone_objectif)
$query_realisation_periodique_telephone = "SELECT SUM(`$dot`) AS realisation_periodique FROM table_chif_telephone_realisation WHERE annee = ? AND (";

// Construire la condition pour les mois
$moisIndex = array_search($mois, $moisArray); // Récupérer l'index du mois sélectionné

for ($i = 0; $i <= $moisIndex; $i++) {
    if ($i > 0) {
        $query_realisation_periodique_telephone .= " OR ";
    }
    $query_realisation_periodique_telephone .= "mois = ?";
}

$query_realisation_periodique_telephone .= ")";

// Préparer et exécuter la requête pour la réalisation périodique pour la table table_chif_aff_telephone_realisation
$stmt_realisation_periodique_telephone = $con->prepare($query_realisation_periodique_telephone);
$stmt_realisation_periodique_telephone->bind_param("i" . str_repeat("s", $moisIndex + 1), $annee, ...array_slice($moisArray, 0, $moisIndex + 1));
$stmt_realisation_periodique_telephone->execute();
$result_realisation_periodique_telephone = $stmt_realisation_periodique_telephone->get_result();
$row_realisation_periodique_telephone = $result_realisation_periodique_telephone->fetch_assoc();
$realisation_periodique_telephone = $row_realisation_periodique_telephone['realisation_periodique'];


// Requête SQL pour récupérer les réalisations annuelles de la première table
$query_realisation_annuelle_tel = "SELECT SUM(`$dot`) AS realisation_annuelle FROM table_chif_telephone_realisation WHERE annee = ? AND mois = 'REALISATION ANNUEL'";
// Requête SQL pour récupérer les réalisations annuelles de la deuxième table
$query_realisation_annuelle_internet_4g = "SELECT SUM(`$dot`) AS realisation_annuelle FROM table_chif_internet_4g_realisation WHERE annee = ? AND mois = 'REALISATION ANNUEL'";
// Requête SQL pour récupérer les réalisations annuelles de la troisième table
$query_realisation_annuelle_internet_filaire = "SELECT SUM(`$dot`) AS realisation_annuelle FROM table_chif_internet_filaire_realisation WHERE annee = ? AND mois = 'REALISATION ANNUEL'";

// Préparer et exécuter la requête pour les réalisations annuelles de la première table
$stmt_realisation_annuelle_tel = $con->prepare($query_realisation_annuelle_tel);
$stmt_realisation_annuelle_tel->bind_param("i", $annee);
$stmt_realisation_annuelle_tel->execute();
$result_realisation_annuelle_tel = $stmt_realisation_annuelle_tel->get_result();
$row_realisation_annuelle_tel = $result_realisation_annuelle_tel->fetch_assoc();
$realisation_annuelle_tel = $row_realisation_annuelle_tel['realisation_annuelle'];

// Préparer et exécuter la requête pour les réalisations annuelles de la deuxième table
$stmt_realisation_annuelle_internet_4g = $con->prepare($query_realisation_annuelle_internet_4g);
$stmt_realisation_annuelle_internet_4g->bind_param("i", $annee);
$stmt_realisation_annuelle_internet_4g->execute();
$result_realisation_annuelle_internet_4g = $stmt_realisation_annuelle_internet_4g->get_result();
$row_realisation_annuelle_internet_4g = $result_realisation_annuelle_internet_4g->fetch_assoc();
$realisation_annuelle_internet_4g = $row_realisation_annuelle_internet_4g['realisation_annuelle'];

// Préparer et exécuter la requête pour les réalisations annuelles de la troisième table
$stmt_realisation_annuelle_internet_filaire = $con->prepare($query_realisation_annuelle_internet_filaire);
$stmt_realisation_annuelle_internet_filaire->bind_param("i", $annee);
$stmt_realisation_annuelle_internet_filaire->execute();
$result_realisation_annuelle_internet_filaire = $stmt_realisation_annuelle_internet_filaire->get_result();
$row_realisation_annuelle_internet_filaire = $result_realisation_annuelle_internet_filaire->fetch_assoc();
$realisation_annuelle_internet_filaire = $row_realisation_annuelle_internet_filaire['realisation_annuelle'];

// Calculer le taux de réalisation annuelle pour chaque table
$taux_realisation_annuelle_tel = ($realisation_annuelle_tel / $objectif_annuel_tel) * 100;
$taux_realisation_annuelle_internet_4g = ($realisation_annuelle_internet_4g / $objectif_annuel_internet_4g) * 100;
$taux_realisation_annuelle_internet_filaire = ($realisation_annuelle_internet_filaire / $objectif_annuel_internet_filaire) * 100;

// Calculer le taux de réalisation périodique pour chaque table
$taux_realisation_periodique_4g = ($realisation_periodique_4g / $objectif_periodique_4g) * 100;
$taux_realisation_periodique_filaire = ($realisation_periodique_filaire / $objectif_periodique_filaire) * 100;
$taux_realisation_periodique_telephone = ($realisation_periodique_telephone / $objectif_periodique_telephone) * 100;

  
$objectif_annuel_total=( $objectif_annuel_internet_4g+$objectif_annuel_internet_filaire+$objectif_annuel_tel);
$objectif_periodique_total =($objectif_periodique_4g+$objectif_periodique_filaire+$realisation_periodique_telephone);
$realisation_periodique_total =($realisation_periodique_4g+$realisation_periodique_filaire+$realisation_periodique_telephone);
$taux_realisation_periodique_total= ($realisation_periodique_total /$objectif_periodique_total ) * 100;
$realisation_annuel_total =($realisation_annuelle_internet_4g+$realisation_annuelle_internet_filaire+$realisation_annuelle_tel);
$taux_realisation_annuelle_total = ($realisation_annuel_total /$objectif_annuel_total ) * 100;

  
$objectif_annuel_internet_total =( $objectif_annuel_internet_4g+$objectif_annuel_internet_filaire);
$objectif_periodique_internet_total =($objectif_periodique_4g+$objectif_periodique_filaire);
$realisation_periodique_internet_total =($realisation_periodique_4g+$realisation_periodique_filaire);
$taux_realisation_periodique_internet_total= ( $realisation_periodique_internet_total/$objectif_annuel_internet_total ) * 100;
$realisation_annuel_internet_total =($realisation_annuelle_internet_4g+$realisation_annuelle_internet_filaire);
$taux_realisation_annuelle_internet_total = ($realisation_annuel_internet_total /$objectif_annuel_internet_total ) * 100;



echo "<table border='1'>";
echo "<tr><th colspan='6'>2. CHIFFRE D'AFFAIRES																								
</th></tr>";
echo "<tr><th>PRODUIT	
</th><th>Objectif Annuel</th><th>Objectif Périodique</th><th>Réalisation Périodique</th><th>Taux de Réalisation Périodique (%)</th><th>Taux de Réalisation Annuelle (%)</th></tr>";
echo "<tr><td>INTERNET [4G LTE]	
</td><td>$objectif_annuel_internet_4g</td><td>$objectif_periodique_4g</td><td>$realisation_periodique_4g</td><td>$taux_realisation_periodique_4g%</td><td>$taux_realisation_annuelle_internet_4g%</td></tr>";
echo "<tr><td>INTERNET [ADSL+FTTH]	
</td><td>$objectif_annuel_internet_filaire</td><td>$objectif_periodique_filaire</td><td>$realisation_periodique_filaire</td><td>$taux_realisation_periodique_filaire%</td><td>$taux_realisation_annuelle_internet_filaire%</td></tr>";
echo "<tr><td>TOTAL INTERNET[4GLTE+ADSL+FTTH]	
</td><td>$objectif_annuel_internet_total</td><td>$objectif_periodique_internet_total</td><td>$realisation_periodique_internet_total</td><td>$taux_realisation_periodique_internet_total%</td><td>$taux_realisation_annuelle_internet_total%</td></tr>";
echo "<tr><td>TELEPHONIE [TLP]	
</td><td>$objectif_annuel_tel</td><td>$objectif_periodique_telephone</td><td>$realisation_periodique_telephone</td><td>$taux_realisation_periodique_telephone%</td><td>$taux_realisation_annuelle_tel%</td></tr>";
echo "<tr><td>TOTAL[TLP+INTERNET]	
</td><td>$objectif_annuel_total</td><td>$objectif_periodique_total</td><td>$realisation_periodique_total</td><td>$taux_realisation_periodique_total%</td><td>$taux_realisation_annuelle_total%</td></tr>";
echo "</table>";


    // Fermer la connexion
    $con->close();
}
?>
	</main>
</body>
</html>