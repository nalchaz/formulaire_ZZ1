<html>
    <head>
    	<!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title> Contact </title>
    </head>

    <body>
        <div id="mainContainer">
        	<center><img src="../images/NousContacter.png" alt="Nous contacter"/></center>
            <p class="hiddenMessage" id="messageFormulaire">Des champs sont invalides</p>

        <form id="formulaire" onsubmit="return Envoi()" method="post" action="envoi.php">
            <!-- Nom -->
            <div class="entry">
                <span id="nomLabel" class="labelChamp">NOM</span>
                <input class="semiBold" id="nomEntry" type="text" placeholder="Entrez votre nom" size="30" onblur="checkNom()" name="Nom">
                <div class="hiddenMessage" id="messageNom"> 
                Un nom doit faire plus de 2 caractères et ne contient que des lettres
                </div>
            </div>

            <div id="line2">
            <!-- Email -->
            <div class="entry" id="champ_email">
                <span id="emailLabel" class="labelChamp">E-MAIL</span>
                <br/>
                <input class="semiBold" id="emailEntry" type="text" placeholder="Entrez votre e-mail" size="30" onblur="checkMail()" name="Email">
                <div class="hiddenMessage" id="messageMail"> 
                Entrez un e-mail valide 
                </div>
            </div>

            <!-- Phone -->
            <div class="entry" id="champ_phone">
                <span id="phoneLabel" class="labelChamp">TELEPHONE</span>
                <br/>
                <input class="semiBold" id="phoneEntry" type="text" placeholder="Entrez votre numéro de téléphone" size="50" onblur="checkTel()" name="Telephone">
                <div class="hiddenMessage" id="messageTel"> 
                Entrez un numéro de téléphone valide 
                </div>
            </div>
            </div>

            <!-- Needed services -->
            <div class="entry">
                <span id="catLabel" class="labelChamp">CATEGORIE SOCIOPROFESSIONNELLE</span>
                <br/>
                <select class="semiBold" id="catEntry" onchange="checkCat()" name="Categorie">
                    <option value="0">Sélectionnez le groupe auquel vous appartenez</option>
                    <option value="1">1. Agriculteurs exploitants</option>
                    <option value="2">2. Artisans, commerçants, chefs d'entreprises</option>
                    <option value="3">3. Cadres et professions intellectuelles supérieures</option>
                    <option value="4">4. Professions intermédiaires</option>
                    <option value="5">5. Employés</option>
                    <option value="6">6. Ouvriers</option>
                    <option value="7">7. Retraités</option>
                    <option value="8">8. Ouvriers</option>
                    <option value="9">9. Sans activité</option>
                </select>
                <div class="hiddenMessage" id="messageCat"> 
                Vous devez sélectionner votre catégorie socioprofessionnelle
                </div>
            </div>

            <!-- Message -->
            <div id ="champ_message">
                <span id="messageLabel" class="labelChamp">MESSAGE</span>
                <br/>
                <textarea class="semiBold" id="messageEntry" cols="100" rows="2" placeholder="Tapez votre message ici... !" onkeyup="checkMessage()" name="Message"></textarea>
                <div class="hiddenMessage" id="messageMessage"> 
                Votre message doit contenir entre 50 et 1200 caractères
                </div>
            </div>

            <!-- Button -->
            <div class="submitArea2">
                <input type="submit" value="Envoyer →" id="submitButton" class="submitArea" name="submit"></span>
            </div>

        </form>
        </div>

        <footer> <!-- Pied de page -->
            <br/>
            <table> 
                <tr> <!-- Début 1ere ligne -->
                    <td> CHAZOT </td>
                    <td> Nahel </td> 
                    <td> nahel.chazot@etu.isima.fr </td>
                </tr><!-- Fin 1ere ligne -->
                <tr> <!-- Début 2eme ligne -->
                    <td> NAUDIN </td>
                    <td> Juliette </td> 
                    <td> juliette.naudin@etu.uca.fr </td>
                </tr><!-- Fin 2eme ligne -->
            </table>

        </footer>


    <script src="java.js"></script>

    </body>

</html>
