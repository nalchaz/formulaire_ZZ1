// Fonction qui masque l'élément
function cache(elementStyle){
    elementStyle.display = "none" ;
}

// Fonction qui affiche l'élément
function affiche(elementStyle){
    elementStyle.display = "";
}

// Fonction de désactivation de l'affichage des messages de correction
// ("hiddenMessage" class)
function desactivHidden() {

    var hiddenMessage = document.querySelectorAll('.hiddenMessage'),
        hiddenMessageLength = hiddenMessage.length;

    for (var i = 0; i < hiddenMessageLength; i++) {
        cache(hiddenMessage[i].style);
    }
}


function editionNom() {
    var nomInput = document.getElementById('nomEntry');
    nomInput.className = 'edition';
}

function checkNom() {
    var nomInput = document.getElementById('nomEntry'), //L'input
        nomMessageStyle = document.getElementById('messageNom').style; //Le style du message

    if (nomInput.value.length > 2 && /^[A-Za-z]+$/.test(nomInput.value) ) {
        nomInput.className = 'OK'; // changement de class
        cache(nomMessageStyle); // on masque le message de correction
        return 1;
    } else {
        nomInput.className = 'messageHidden';
        affiche(nomMessageStyle); //on affiche le message de correction
    }
    return 0;
}

function editionMail() {
    var mailInput = document.getElementById('emailEntry');
    mailInput.className = 'edition';
}


function checkMail() {
    var mailInput = document.getElementById('emailEntry'), //L'input
        mailMessageStyle = document.getElementById('messageMail').style;//Le style du message

    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(mailInput.value)) {
        mailInput.className = 'OK'; // changement de class
        cache(mailMessageStyle); // on masque le message de correction
        return 1;
    } else {
        mailInput.className = 'messageHidden';
        affiche(mailMessageStyle); //on affiche le message de correction
    }
    return 0;
}

function editionTel() {
    var telInput = document.getElementById('phoneEntry');
    telInput.className = 'edition';
}


function checkTel() {
    var telInput = document.getElementById('phoneEntry'), //L'input
        telMessageStyle = document.getElementById('messageTel').style;//Le style du message

    if (/^0[1-68]([-. ]?[0-9]{2}){4}$/.test(telInput.value)) {
        telInput.className = 'OK'; // changement de class
        cache(telMessageStyle); // on masque le message de correction
        return 1;
    } else {
        telInput.className = 'messageHidden';
        affiche(telMessageStyle); //on affiche le message de correction
    }
    return 0;
}


function checkMessage() {
    var messageInput = document.getElementById('messageEntry'), //L'input
        messageMessageStyle = document.getElementById('messageMessage').style, //Le style du message
        Longueur = messageInput.value.length; //longueur du texte tapé

    if (Longueur >= 20 && Longueur <= 1200) {
        messageInput.className = ''; // changement de class
        cache(messageMessageStyle); // on masque le message de correction
        return 1;
    } else {
        messageInput.className = 'messageHidden';
        affiche(messageMessageStyle); //on affiche le message de correction
    }
    return 0;
}

function checkCat() {
    var catInput = document.getElementById('catEntry'), //L'input
        messageCatStyle = document.getElementById('messageCat').style; //Le style du message

    if (catInput.value != "0") {
        cache(messageCatStyle); // on masque le message de correction
        return 1;
    } else {
        catInput.className = 'messageHidden';
        affiche(messageCatStyle); //on affiche le message de correction
    }
    return 0;
}

function Envoi(){

    if(checkCat() == 1 & checkNom() == 1 & checkMail()  == 1 & checkTel() == 1 & checkMessage() == 1){
        cache(messageFormulaireStyle);
        alert('Formulaire bien rempli');
        return true;
    }else{
        var messageFormulaireStyle = document.getElementById('messageFormulaire').style;
        affiche(messageFormulaireStyle);
        return false;
    }

}

desactivHidden();