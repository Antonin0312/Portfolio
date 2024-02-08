<style>
            body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #B47042;;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h2 {
            color: #B47042;;
        }
</style>


<?php
// Désactiver la mise en cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Vérifier l'authentification à chaque accès
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] !== 'seb' || $_SERVER['PHP_AUTH_PW'] !== 'seb') {
    header('WWW-Authenticate: Basic realm="Zone sécurisée"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Accès refusé.';
    exit;
}

// Si l'authentification est réussie, afficher le contenu

// Connexion à la base de données (utilisez vos propres informations de connexion)
$serveurname = "10.56.8.55";
$username = "coct0001";
$password = "zG7wH8cgMs";
$dbname = "formulaire_portfolio_antonin_cocteau";

try {
    $conn = new PDO("mysql:host=$serveurname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "La connexion à la base de données a échoué : " . $e->getMessage();
    exit;
}

// Récupérer et afficher la liste des messages
try {
    $sql = "SELECT * FROM utilisateurs"; 
    $stmt = $conn->query($sql);
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Afficher les messages dans un tableau
  echo "<h2>Liste des messages :</h2>";
  echo "<table border='1'>";
  echo "<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Message</th></tr>";
  foreach ($messages as $message) {
      echo "<tr>";
      echo "<td>{$message['nom']}</td>";
      echo "<td>{$message['prenom']}</td>";
      echo "<td>{$message['mail']}</td>";
      echo "<td>{$message['tel']}</td>";
      echo "<td>{$message['message']}</td>";
      echo "</tr>";
  }
  echo "</table>";
} catch (PDOException $e) {
  echo "Erreur lors de la récupération des messages : " . $e->getMessage();
}
?>
