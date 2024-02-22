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

<!-- Titre -->         <meta name="Description" content="Page d'Accueil Arrivée sur ma page de contact" />
<!-- Description --> <meta name="contact" content="formulaire de contact, carte localisation"  />
<!-- Nom de l'auteur --> <meta name="author" content="Antonin Cocteau"  /> 
<!-- Icone -->  <link rel="icon" type="image/png" href="../portfolioantonincocteau/images/favicon.png" />
<!-- La langue principale du site --><meta name="langue" content="Français FR"  />


<!--FACEBOOK-->
<!--L'url du site --> <meta property="og:url" content="https://portfolioantonincocteau.netlify.app/portfolioantonincocteau/portfoliopage4" />
<!--Le type de page --> <meta property="og:type" content="blog" />
<!--Le titre de la page--> <meta property="og:title" content="Page de contact" />
<!--La description de la page--> <meta property="og:description" content="Nous contacter ?" />
<!--Une image représentant le site--> <meta property="og:image" src="../portfolioantonincocteau/images/LogoAntoninCocteau.jpg" alt="LogoAntoninCocteau"/>   


<!--X-->
<!--Le type de X card--> <meta name="twitter:card" content="summary" />
<!--Le @ (nom d'utilisateur twitter)--> <meta name="twitter:site" content="@AntoninCocteau" />
<!--Le nom de l'utilsateur du site--> <meta name="twitter:creator" content="@AntoninCocteau" />
<!--L'url du site--> <meta property="og:url" content="https://portfolioantonincocteau.netlify.app/portfolioantonincocteau/portfoliopage4" />
<!--Le titre de la page--> <meta property="og:title" content="Page de contact" />
<!--La description de la page--> <meta property="og:description" content="Nous contacter ?" />
<!--Une image représentant le site--> <meta property="og:image" src="../portfolioantonincocteau/images/LogoAntoninCocteau.jpg" alt="LogoAntoninCocteau"/>

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
  <nav id="nav-3">
      <a class="link-3" href="index.html">Qui suis-je ?</a>
      <a class="link-3" href="PORTFOLIOPAGE2.html">Mon CV</a>
      <a class="link-3" href="PORTFOLIOPAGE3.html">Mes réalisations</a>
      <a class="link-3" href="portfoliopage4.php">Me contacter</a>
  </nav>


    
   <form class="body" method="POST">
        <p> <b class="titreform"> Vous cherchez à me joindre ? <br> Remplissez le formulaire ci-dessous :</b><p>

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
              <textarea placeholder="Saisissez ici..."   name="message"    ></textarea>
            </div>

          </div>

        </div>
  
        <div class="pied-formulaire"> 
          <input type="submit" value="Envoyer le formulaire" name="envoyer"> 
        </div>
      </div>

      


      </form>


<form class="body">
  <p> <b class="titreform"> Vous souhaitez me rencontrez ? <br> Regardez ci-dessous :</b><p>
    <div class="separation"></div><br><br>
  <div class="map-container">
   

      <div class="separation"></div><br><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.6073007768787!2d4.717911477115893!3d49.737015971464736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea121febee2aed%3A0x1a7aa6d161ffb8e7!2s3%20Rue%20Claude%20Chr%C3%A9tien%2C%2008000%20Charleville-M%C3%A9zi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1704361524987!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
   
</form>

      

      <footer class="footerpage4">
        Antonin Cocteau - Novembre 2023 - <strong> <a  style="color:#ffff";     href="MENTIONLEGALE.html" >Mentions légales </strong></a>
                  
    </footer>
    
    

</body>
</html>