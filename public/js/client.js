typeClient = document.getElementById('typeClient')
idClient = document.getElementById('idClient');
nouveauClient = document.getElementById('nouveauClient');
nom = document.getElementById('nom');
prenom = document.getElementById('prenom');
cni = document.getElementById('cni');
telephone = document.getElementById('telephone');
adresse = document.getElementById('adresse');
email = document.getElementById('email');
login = document.getElementById('login');
password = document.getElementById('password');
ancienClient = document.getElementById('ancienClient');
typeClientPhysique = document.getElementById('typeClientPhysique');
salaire = document.getElementById('salaire');
profession = document.getElementById('profession');
idEmployeur = document.getElementById('idEmployeur');
nouveauClientMoral = document.getElementById('nouveauClientMoral');

nomClientMoral = document.getElementById('nomClientMoral');
AdresseClientMoral = document.getElementById('AdresseClientMoral');
raisonSocial = document.getElementById('raisonSocial');
numeroClientMoral = document.getElementById('numeroClientMoral');
telephoneClientMoral = document.getElementById('telephoneClientMoral');
emailClientMoral = document.getElementById('emailClientMoral');
loginClientMoral = document.getElementById('loginClientMoral');
passwordClientMoral = document.getElementById('passwordClientMoral')

infoClientPhysique = document.getElementById('infoClientPhysique');
infoNouveauClientMoral = document.getElementById('infoNouveauClientMoral');
infoNouveauClientPhysique = document.getElementById('infoNouveauClientPhysique');
infoClientPhysiqueSalarie = document.getElementById('infoClientPhysiqueSalarie');
infoAncienClient = document.getElementById('infoAncienClient');
infoAncienClientMoral = document.getElementById('infoAncienClientMoral');


ancienClient.style.display = 'none';


nom.addEventListener('keypress', function(e) {
    str = /[a-zA-Z]/
    if (!str.test(String.fromCharCode(e.keyCode)))
        e.preventDefault();
})
prenom.addEventListener('keypress', function(e) {
    str = /[a-zA-Z]/
    if (!str.test(String.fromCharCode(e.keyCode)))
        e.preventDefault();
})
profession.addEventListener('keypress', function(e) {
    str = /[a-zA-Z]/
    if (!str.test(String.fromCharCode(e.keyCode)))
        e.preventDefault();
})
nomClientMoral.addEventListener('keypress', function(e) {
    str = /[a-zA-Z]/
    if (!str.test(String.fromCharCode(e.keyCode)))
        e.preventDefault();
})
raisonSocial.addEventListener('keypress', function(e) {
        str = /[a-zA-Z]/
        if (!str.test(String.fromCharCode(e.keyCode)))
            e.preventDefault();
    })
    /**
     * la selection du client
     */
nouveauClient.addEventListener('change', function(e) {
    if (typeClient.value == '1') {
        infoClientPhysique.style.display = 'block';
        clientMoral.style.display = 'none';
    } else {
        if (typeClient.value == '2') {
            infoClientPhysique.style.display = 'none';
            clientMoral.style.display = 'block';
        } else {
            infoClientPhysique.style.display = 'none';
            clientMoral.style.display = 'none';
        }
    }
})

/**
 * la selection du type de client
 */
typeClient.addEventListener('change', function(e) {


    infoNouveauClientMoral.style.display = 'none';
    if (typeClient.value == '1') {

        infoClientPhysique.style.display = 'block';
        infoAncienClient.style.display = 'none';
        infoNouveauClientPhysique.style.display = 'block'
        clientMoral.style.display = 'none';
        infoClientPhysiqueSalarie.style.display = 'none';
        infoAncienClientMoral.style.display = 'none';
        viderClientMoral();
        isValidated(idClient, ' ');
    } else {
        if (typeClient.value == '2') {
            infoClientPhysique.style.display = 'none';
            clientMoral.style.display = 'block';
            infoNouveauClientMoral.style.display = 'block';
            infoAncienClientMoral.style.display = 'none'
            idEmployeur.style.display = 'none';
            nouveauClientMoral.style.display = 'none';
            AncienClientMoral.style.display = 'none';
            viderClientPhysique();
        } else {
            infoClientPhysique.style.display = 'none';
            clientMoral.style.display = 'none';
            viderClientMoral();
            viderClientPhysique();
        }
    }
})

/**
 * lorsqu'on click sur le boutton nouveau client
 */
nouveauClient.addEventListener('click', function(event) {
    infoAncienClient.style.display = 'none';
    infoNouveauClientPhysique.style.display = 'block';
    idClient.value = '0';
    typeClientPhysique.value = '1'
    isValidated(nom, ' ');
    isValidated(prenom, ' ');
    isValidated(telephone, ' ');
    isValidated(adresse, ' ');
    isValidated(email, ' ');
    isValidated(salaire, ' ');
    isValidated(profession, ' ');
    viderClient();


});
/**
 * lorsqu'on click sur le boutton ancien client
 *
 
ancienClient.addEventListener('click', function(event) {
    infoAncienClient.style.display = 'block';
    infoNouveauClientPhysique.style.display = 'none';
    infoClientPhysiqueSalarie.style.display = 'none';
    clientMoral.style.display = 'none';
    viderClientMoral();
    isValidated(idClient, ' ');

}); */

/**
 * la selection du type de client physique
 */
typeClientPhysique.addEventListener('change', function() {
    if (typeClientPhysique.value == '2') {
        infoClientPhysiqueSalarie.style.display = 'block';
        clientMoral.style.display = 'block';
        infoAncienClientMoral.style.display = 'block';
        infoAncienClientMoral.style.display = 'block';
    } else {
        infoClientPhysiqueSalarie.style.display = 'none';
        clientMoral.style.display = 'none';
        nouveauClientMoral.style.display = 'block';
        viderClientMoral();
    }
})

/**
 * lorsqu'on click sur le boutton nouveau client Moral (employeur ou entreprise)
 */
nouveauClientMoral.addEventListener('click', function() {
    infoNouveauClientMoral.style.display = 'block';
    infoAncienClientMoral.style.display = 'none';
    idEmployeur.value = 0;
    isValidated(nomClientMoral, ' ');
    isValidated(AdresseClientMoral, ' ');
    isValidated(raisonSocial, ' ');
    viderEmployeur();
})

/**
 * lorsqu'on click sur le boutton ancien client Moral (employeur ou entreprise)
 */
AncienClientMoral.addEventListener('click', function() {
    infoNouveauClientMoral.style.display = 'none';
    infoAncienClientMoral.style.display = 'block';
    isValidated(idEmployeur, '');
})
telephone.addEventListener('keypress', function(e) {
    if (isNaN(String.fromCharCode(e.keyCode))) {
        e.preventDefault();
    }
    if (telephone.value.length >= 9) {
        e.preventDefault();
    }
})

telephoneClientMoral.addEventListener('keypress', function(e) {
    if (isNaN(String.fromCharCode(e.keyCode))) {
        e.preventDefault();
    }
    if (telephoneClientMoral.value.length >= 9) {
        e.preventDefault();
    }
})
cni.addEventListener('keypress', function(e) {
    if (isNaN(String.fromCharCode(e.keyCode))) {
        e.preventDefault();
    }
    if (cni.value.length >= 13) {
        e.preventDefault();
    }
})

salaire.addEventListener('keypress', function(e) {
    if (isNaN(String.fromCharCode(e.keyCode))) {
        e.preventDefault();
    }
})

/**
 * la soumission du formulaire
 */
document.getElementById('myForm').addEventListener('submit', function(e) {

    idC = isValidated(idClient, '0')
    nm = isValidated(nom, '');
    pr = isValidated(prenom, '');
    tr = isValidated(telephone, '')
    adr = isValidated(adresse, '')
    eml = isValidated(email, '');
    cn = isValidated(cni, '');
    log = isValidated(login, '');
    pwd = isValidated(password, '');
    slr = isValidated(salaire, '')
    nmCMr = isValidated(nomClientMoral, '')
    numCM = isValidated(numeroClientMoral, '')
    adrCM = isValidated(AdresseClientMoral, '')
    rsCM = isValidated(raisonSocial, '')
    tlCM = isValidated(telephoneClientMoral, '')
    lgCM = isValidated(loginClientMoral, '')
    pwdCM = isValidated(passwordClientMoral, '')
    let a = 0;
    if (!isValidated(typeClient, '0')) {
        a = 1;
    } else {

        idC = isValidated(idClient, '0')

        if (typeClient.value == '1') {
            if (!nm || !pr || !tr || !adr || !cn || !log || !pwd) {
                a = 1;
            }

            if (telephone.value.length != 9) {
                a = 1;
                telephone.classList.add('invalid');
                telephone.classList.remove('valid');
            } else {

                telephone.classList.add('valid');
                telephone.classList.remove('invalid');
            }
            email_v = /[a-zA-Z1-9]+[@]+[a-z]+[\.]+[a-z]/
            if (email.value != '' && !email_v.test(email.value)) {
                email.classList.add('invalid');
                email.classList.remove('valid');
                a = 1;
            } else {
                email.classList.add('valid');
                email.classList.remove('invalid');
            }
            if (typeClientPhysique.value == '2') {
                if (!slr) {
                    a = 1;
                }
                if (!isValidated(idEmployeur, '0')) {
                    if (!nmCMr || !numCM || !adrCM || !rsCM || !tlCM || !lgCM || !pwdCM) {
                        a = 1;
                    }
                    if (telephoneClientMoral.value.length != 9) {
                        a = 1;
                        telephoneClientMoral.classList.add('invalid');
                        telephoneClientMoral.classList.remove('valid');
                    } else {

                        telephoneClientMoral.classList.add('valid');
                        telephoneClientMoral.classList.remove('invalid');
                    }
                    email_v = /[a-zA-Z1-9]+[@]+[a-z]+[\.]+[a-z]/
                    if (emailClientMoral.value != '' && !email_v.test(emailClientMoral.value)) {
                        emailClientMoral.classList.add('invalid');
                        emailClientMoral.classList.remove('valid');
                        a = 1;
                    } else {
                        emailClientMoral.classList.add('valid');
                        emailClientMoral.classList.remove('invalid');
                    }
                }


            }

        } else {
            if (!nmCMr || !numCM || !adrCM || !rsCM || !tlCM || !lgCM || !pwdCM) {
                a = 1;
            }
            if (telephoneClientMoral.value.length != 9) {
                a = 1;
                telephoneClientMoral.classList.add('invalid');
                telephoneClientMoral.classList.remove('valid');
            } else {

                telephoneClientMoral.classList.add('valid');
                telephoneClientMoral.classList.remove('invalid');
            }
            email_v = /[a-zA-Z1-9]+[@]+[a-z]+[\.]+[a-z]/
            if (emailClientMoral.value != '' && !email_v.test(emailClientMoral.value)) {
                emailClientMoral.classList.add('invalid');
                emailClientMoral.classList.remove('valid');
                a = 1;
            } else {
                emailClientMoral.classList.add('valid');
                emailClientMoral.classList.remove('invalid');
            }
        }
    }




    if (a != 0) {

        e.preventDefault();
    }
})


/**
 * vider les champs du client physique
 */
function viderClientPhysique() {
    typeClientPhysique.value = 1;
    idClient.value = 0;
    nom.value = '';
    prenom.value = '';
    telephone.value = '';
    adresse.value = '';
    email.value = '';
    salaire.value = '';
    profession.value = '';
    infoAncienClient.style.display = 'none';
    infoNouveauClientPhysique.style.display = 'none';
    infoClientPhysiqueSalarie.style.display = 'none';
}

/**
 * vider les champs du client moral
 */
function viderClientMoral() {
    idEmployeur.value = 0;
    nomClientMoral.value = '';
    AdresseClientMoral.value = '';
    raisonSocial.value = '';
    infoAncienClientMoral.style.display = 'none';
    infoNouveauClientMoral.style.display = 'none';
}

/**
 * tester si un champ est valid
 * @param {HTMLElement} element 
 * @param {string} v 
 */

function isValidated(element, v) {
    if (element.value.trim() == v) {
        element.classList.add('invalid');
        element.classList.remove('valid');
        return false;
        a = 1;
    } else {
        element.classList.add('valid');
        element.classList.remove('invalid');
        return true;
    }
}

/**
 * permet de vider les infos du client 
 */
function viderClient() {
    nom.value = '';
    prenom.value = '';
    telephone.value = '';
    adresse.value = '';
    email.value = '';
    salaire.value = '';
    profession.value = '';
}

/**
 * permet de vider les champs des employeurs
 */
function viderEmployeur() {
    nomClientMoral.value = '';
    AdresseClientMoral.value = '';
    raisonSocial.value = '';
}