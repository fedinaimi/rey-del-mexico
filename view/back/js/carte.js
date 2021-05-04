function verifCarteAdd() {

    var errors = "<ul>";
   
    var dateCre = document.querySelector('#dateCreation').value;
   

  
   
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

   

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
       // var msg = "Saisie effectuée avec succès";
      //  alert(msg);
      return true;
    }


}

function verifCarteUpdate() {

    var errors = "<ul>";
 
    var statut= document.querySelector('#statut').value;
    var points= document.querySelector('#points').value;

    if (statut === 'select') {
        errors += "<li>Veuillez indiquer l'état de la carte </li>";
    }
    if (points == 0) {
        errors += "<li>Veuillez indiquer les points de fidélité </li>";
    }
    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
      //  var msg = "Saisie effectuée avec succès";
        alert(msg);
    }


}
