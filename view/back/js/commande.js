function verifcommande() {

    var errors = "<ul>";
 
    var prix_tot = document.querySelector('#prix_tot').value;
    var client = document.querySelector('#client').value;
    var etat = document.querySelector('#etat').value;
    var nomproduit = document.querySelector('#nomproduit').value;
    var qte = document.querySelector('#qte').value;
  

   
   
    

    
    if(prix_tot < 0)
    {
        errors += "<li>Le prix_tot ne doit pas être négatif </li>";
    }

    
    if(client === "select")
    {
        errors += "<li>Le client ne doit pas etre vide </li>";
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
       return false;
       
    } else {
      //  var msg = "Saisie effectuée avec succès";
      //  alert(msg);
        return true;
    }


}