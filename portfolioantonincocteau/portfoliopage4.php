<?php
// La connexion à la base de données
$serveurname = "10.56.8.55";
$username = "coct0001";
$password = "zG7wH8cgMs";
$dbname = "formulaire_portfolio_antonin_cocteau";

try {
    $conn = new PDO("mysql:host=$serveurname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "La connexion a bien été établie";
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}

if (isset($_POST['envoyer'])) {
    // Vérifier si les clés existent avant d'essayer de les utiliser
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    



            $sql = "INSERT INTO `utilisateurs`(`nom`, `prenom`, `mail`, `tel`, `message`) VALUES (:nom, :prenom, :mail, :tel, :message)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':message', $message);

            $stmt->execute();

    
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../portfolioantonincocteau/css/styleportfolio.css">

<!-- Titre -->          <meta name="Description" content="Page d'Accueil Arrivée sur ma page de contact" />
<!-- Desciption -->     <meta name="Description" content="Nom et prenom - Antonin Cocteau - 20 ans - 03/12/2003 - Qualité, 
Personne calme, dynamique et à l'écoute de votre tâche qui m'est attribué. Toujours vécu en Champagne Ardenne
dans la ville de Reims. Aujourd'hui, je vis dans la ville de Charleville-Mézières,  études de webdesign." />
<!-- Nom de l'auteur --> <meta name="author" content="Antonin Cocteau"  />
<!-- Icone -->             <link rel="icon" type="image/png" href="../portfolioantonincocteau/images/favicon.svg" />
<!-- Liste de mot clé --><meta name="keywords" content="webdesign, graphisme, communication, Adobe Illustrator, Adobe InDesign, Adobe Photoshop, Adobe Xd, Visual Studio Code, WordPress"  />
<!-- Enseignement Supérieur à Reims -->
<meta name="keywords" content="Enseignement supérieur, Études supérieures à Charleville-Mézières, Formation universitaire, Établissements d'enseignement supérieur">
<!-- Portfolio professionnel -->
<meta name="keywords" content="Portfolio étudiant, Réalisations académiques, Travaux universitaires, Expériences éducatives">
<!-- Domaines d'études -->
<meta name="keywords" content="Sciences, Arts et lettres, Sciences humaines, Technologie, Commerce">
<!-- Compétences spécifiques -->
<meta name="keywords" content="Compétences académiques, Projets étudiants, Compétences professionnelles, Aptitudes en recherche">
<!-- Mentions légales -->
<meta name="keywords" content="Règlements universitaires, Droits étudiants, Politiques universitaires">
<!-- Localisation -->
<meta name="keywords" content="Reims, Grand Est, Éducation à Reims">
<!-- La langue principale du site --> <meta name="langue" content="Français FR"  />


<!-- FACEBOOK -->
<!-- L'URL du site -->
<meta property="og:url" content="https://portfolioantonincocteau.netlify.app/portfolioantonincocteau/portfoliopage4" />
<!-- Le type de page -->
<meta property="og:type" content="website" />
<!-- Le titre de la page -->
<meta property="og:title" content="Page de contact" />
<!-- La description de la page -->
<meta property="og:description" content="Nous contacter ?" />
<!-- Une image représentant le site -->
<meta property="og:image" content="https://portfolioantonincocteau.netlify.app/portfolioantonincocteau/images/LogoAntoninCocteau.jpg" />

<!-- X -->
<!-- Le type de carte X -->
<meta name="twitter:card" content="summary" />
<!-- Le nom d'utilisateur X du site -->
<meta name="twitter:site" content="@AntoninCocteau" />
<!-- Le nom d'utilisateur X du créateur -->
<meta name="twitter:creator" content="@AntoninCocteau" />
<!-- L'URL du site -->
<meta property="og:url" content="https://portfolioantonincocteau.netlify.app/portfolioantonincocteau/mentionlegale" />
<!-- Le titre de la page -->
<meta property="og:title" content="Page mentions légales" />
<!-- La description de la page -->
<meta property="og:description" content="Mentions Légales" />
<!-- Une image représentant le site -->
<meta property="og:image" content="https://portfolioantonincocteau.netlify.app/portfolioantonincocteau/images/LogoAntoninCocteau.jpg" />


<!-- Linkedin -->
<meta property="og:title" content="Portfolio d'Antonin Cocteau" />
<meta property="og:image" content="https://portfolioantonincocteau.netlify.app/images/LogoAntoninCocteau.jpg" />
<meta property="og:description" content="Découvrez les réalisations et compétences d'Antonin Cocteau dans son portfolio en ligne." />
<meta property="og:url" content="https://portfolioantonincocteau.netlify.app/" />




<!--PWA-->
<link rel="apple-touch-icon" sizes="180x180" href="../portfolioantonincocteau/favicon_package_v0.16/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../portfolioantonincocteau/favicon_package_v0.16/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../portfolioantonincocteau/favicon_package_v0.16/favicon-16x16.png">
<link rel="manifest" href="../portfolioantonincocteau/favicon_package_v0.16/site.webmanifest">
<link rel="mask-icon" href="../portfolioantonincocteau/favicon_package_v0.16/safari-pinned-tab.svg" color="#b47042">
<meta name="apple-mobile-web-app-title" content="Portfolio Antonin Cocteau">
<meta name="application-name" content="Portfolio Antonin Cocteau">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="theme-color" content="#ffffff">



    <title>Portfolio | Antonin Cocteau | CONTACT</title>


    <style>
 
    
      @media only screen and (max-width: 600px) {

          .image {
              text-align: center;
          }
          .corps-formulaire {
              display: flex;
              flex-direction: column;
          }
          .image img {
              max-width: 100%;
              display: block;
              margin-bottom: 20px;
          }
          .groupe {
              width: 100%;
              margin-bottom: 10px;
          }
          input[type="text"],
          textarea {
              width: calc(100% - 20px);
              padding: 8px;
              border: 1px solid #ccc;
              border-radius: 4px;
          }
          input[type="submit"] {
              width: 100%;
              padding: 10px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
          }
/
      }

      @media only screen and (max-width: 600px) {

            .link-3 {
                display: block;
                text-align: center;
                margin-bottom: 10px;
            }
          }  



  </style>
</head>
<body>
    <nav id="nav-3" role="navigation" aria-label="Menu de navigation">
        <a class="link-3" href="index.html">Qui suis-je ?</a>
        <a class="link-3" href="PORTFOLIOPAGE2.html">Mon CV</a>
        <a class="link-3" href="PORTFOLIOPAGE3.html">Mes réalisations</a>
        <a class="link-3" href="portfoliopage4.php">Me contacter</a>
    </nav>

  
<main>
    <form itemprop="formcontact"  class="body" method="POST">
        <p><b class="titreform"> Vous cherchez à me joindre ? <br> Remplissez le formulaire ci-dessous :</b><p>

        <div class="separation"></div>

        <div class="corps-formulaire">

            <div class="gauche">

                <div class="groupe">
                    <label>Votre Nom</label>
                    <input type="text" name="nom">
                    <i class="fas fa-user"></i>
                </div>

                <div class="groupe">
                    <label>Votre Prénom</label>
                    <input type="text" name="prenom">
                    <i class="fas fa-user"></i>
                </div>

                <div class="groupe">
                    <label>Votre adresse e-mail</label>
                    <input type="text" name="mail">
                    <i class="fas fa-envelope"></i>
                </div>

                <div class="groupe">
                    <label>Votre téléphone</label>
                    <input type="text" name="tel">
                    <i class="fas fa-mobile"></i>
                </div>

            </div>

            <div class="droite">
                <div class="groupe">
                    <label>Message</label>
                    <textarea placeholder="Saisissez ici..." name="message"></textarea>
                </div>

            </div>

        </div>

        <div class="pied-formulaire">
            <input type="submit" value="Envoyer le formulaire" name="envoyer">
        </div>
    </form>

    <form itemprop="map"class="body">
        <p><b class="titreform"> Vous souhaitez me rencontrez ? <br> Regardez ci-dessous :</b><p>
            <div class="separation"></div><br><br>
            <div class="map-container">
                <div class="separation"></div><br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.6073007768787!2d4.717911477115893!3d49.737015971464736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea121febee2aed%3A0x1a7aa6d161ffb8e7!2s3%20Rue%20Claude%20Chr%C3%A9tien%2C%2008000%20Charleville-M%C3%A9zi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1704361524987!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </form>

</main>
    <footer class="footerpage4">
        Antonin Cocteau - Novembre 2023 - <strong> <a itemprop="url" style="color:#ffff"; href="MENTIONLEGALE.html" rel="nofollow">Mentions légales </strong></a>
    </footer>
</body>
</html>