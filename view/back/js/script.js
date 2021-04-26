function verifLocal() {

    var errors = "<ul>";
    var libelle = document.querySelector('#libelle').value;
    var tel = document.querySelector('#tel').value;
    var nbTables = document.querySelector('#nbTables').value;
    var nbChaises = document.querySelector('#nbChaises').value;
    var surface = document.querySelector('#surface').value;
    var dateCreation = document.querySelector('#dateCreation').value;
  

    if (libelle.charAt(0) < 'A' || libelle.charAt(0) > 'Z') {
        
        errors += "<li>Le libelle doit commencer par une lettre Majuscule </li>";
    }
   
    if (dateCreation === "") {
        errors += "<li>La date est obligatoire </li>";
    }
    else {
        var today = new Date();
        dateCreation = new Date(dateCreation);
        if (today.getFullYear() - dateCreation.getFullYear() < 0) {
            errors += "<li>La date est erronée </li>";
        }
    }

    if (tel.substring(0, 1) != '7' || tel.substring(0, 1) != '2' || tel.substring(0, 1) != '9' || tel.substring(0, 1) != '5' || tel.length != 8) {
        errors += "<li>Numéro de téléphone erroné </li>";
    }

    if(nbTables < 0)
    {
        errors += "<li>Le nombre de tables ne doit pas être négatif </li>";
    }

    if(nbChaises < 0)
    {
        errors += "<li>Le nombre de chaises ne doit pas être négatif </li>";
    }

    if(surface < 100)
    {
        errors += "<li>La surface ne doit pas être inférieure à 100m² </li>";
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        var msg = "Saisie effectuée avec succès";
        alert(msg);
    }


}


function verifCarte() {

    var errors = "<ul>";
    var points = document.querySelector('#points').value;
    var statut= document.querySelector('#statut').value;
    var dateCre = document.querySelector('#dateCreation').value;
   

    if (points < 0) {
        
        errors += "<li>Les points de fidélités doivent être supérieure ou égale à zéro </li>";
    }
   
    if (dateCre === "") {
        errors += "<li>La date est obligatoire </li>";
    }
    else {
        var today = new Date();
        dateCre = new Date(dateCre);
        if (today.getFullYear() - dateCre.getFullYear() < 0) {
            errors += "<li>La date est erronée </li>";
        }
    }

    if (statut === 'Select') {
        errors += "<li>Veuillez indiquer l'état de la carte </li>";
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        var msg = "Saisie effectuée avec succès";
        alert(msg);
    }


}
function verifFournisseur() {

    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var prenom = document.querySelector('#prenom').value;
    var tel = document.querySelector('#tel').value;
    var categorie = document.querySelector('#categorie').value;
    var local = document.querySelectorAll('#local').value;
   

    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
    if (prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>";
    }
   
    if (tel.substring(0, 1) != '7' || tel.substring(0, 1) != '5' || tel.substring(0, 1) != '2' || tel.substring(0, 1) != '9' ||tel.length != 8) {
        errors += "<li>Numéro de téléphone erroné </li>";
    }

    if (categorie === 'select') {
        errors += "<li>Veuillez indiquer la catégorie </li>";
    }
    if (local === 'select') {
        errors += "<li>Veuillez indiquer le local </li>";
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        var msg = "Saisie effectuée avec succès";
        alert(msg);
    }
}