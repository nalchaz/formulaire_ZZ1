<html>
    <head>
      <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title> Envoyé ! </title>
    </head>
   <body>
    <div id="mainContainer">
     <?php

      // S'il y des données de postées
      if(!empty($_POST['submit'])) {
    
        if (!empty($_POST['Nom']) && !empty($_POST['Email']) && !empty($_POST['Telephone']) && !empty($_POST['Categorie']) && !empty($_POST['Message'])){
     
          // Récupération des variables
          $nom     = htmlentities($_POST['Nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
          $email   = htmlentities($_POST['Email']);
          $phone   = htmlentities($_POST['Telephone']);
          $categorie = htmlentities($_POST['Categorie']);
          $message = htmlentities($_POST['Message']);
     
          
          echo "Vos données ont bien été prises en compte.";
          echo "</br></br>";
          echo "<center>Résultat du questionnaire :</center>";
          echo "<br/>";
          echo "<u>Nom</u> : ".$nom ;
          echo "<br/>";
          echo "<u>E-mail</u> : ".$email ;
          echo "<br/>";
          echo "<u>Téléphone</u> : ".$phone ;
          echo "<br/>";
          echo "<u>Catégorie socioprofessionnelle</u> : n°".$categorie ;
          echo "<br/>";

          echo "<br/>"; 
          echo "Votre message :"; 
          echo "<br/>";
          echo $message;


        }
      }else{
        echo "Une erreur est survenue. Veuillez réessayer.";
      }

    ?>
    <br/>
    <br/>
    <div align="right">
      <a href="formulaire.php">Retour</a>
    </div>

    </div>

  </body>

</html>