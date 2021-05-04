function verifFournisseur() {

    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var prenom = document.querySelector('#prenom').value;
    var categorie = document.querySelector('#categorie').value;
    var local = document.querySelector('#local').value;
   

    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
    if (prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>";
    }
    if (categorie === 'select') {
        errors += "<li>La catégorie doit être saisie  </li>";
    }
    if (local === 'select') {
        errors += "<li>Le local doit être saisi </li>";
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
      //  var msg = "Saisie effectuée avec succès";
        //alert(msg);
        return true;
    }
}