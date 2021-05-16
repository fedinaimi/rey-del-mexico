<?php
  session_start();
  include "../../controller/fournisseurC.php";
    include "../../controller/localC.php";
    include "../../controller/categorieC.php";
	$fournisseurC = new fournisseurC();
	$listefournissseur= $fournisseurC->afficherFournisseur();
    $elementC= null;
    $elementL= null;
    $localC = new localC();
    $categorieC = new categorieC();
  require_once('../../config.php');
  $db = config::getConnexion();
  if(isset($_GET['user']) && !empty($_GET['user'])){
    $user = (String) trim($_GET['user']);
    $sql = "SELECT *
      FROM fournisseur
      WHERE id_fournisseur LIKE '%".$user."%' 
      OR nom LIKE '%".$user."%' 
      OR prenom LIKE '%".$user."%' 
      OR email LIKE '%".$user."%' 
      OR tel LIKE '%".$user."%' 
      OR categorie LIKE '%".$user."%' 
      OR local LIKE '%".$user."%' 
      LIMIT 10";
      $query=$db->prepare($sql);
      $query->execute(array("$user%"));
      $sql = $query->fetchALL(); 
     
  ?>
  <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc">
        <table class="table table-borderless table-striped table-earning">
      <thead>
      <tr>
      <th class="text-center">ID</th>
                                                <th class="text-center">IMG</th>
                                                <th class="text-center">NOM</th>
                                                <th class="text-center">Prénom</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Tel</th>
                                                <th class="text-center">Catégorie</th>
                                                <th class="text-center">Local</th>
                                                <th class="text-center"></th>
                                                <th class="text-right"></th>
                                                <th class="text-center"></th>
             
          </tr>
      </thead>
      <?php
    foreach($sql as $fournisseur){
      ?>   
        
        
      <tbody>      
      <tr>
<td class="text-center"><?PHP echo $fournisseur['id_fournisseur']; ?></td>
<td><img src="../front/assets/img/fournisseur/<?php echo $fournisseur["img"]; ?>" length="25" height="25" alt="image fourni "/></td>
<td class="text-center"><?PHP echo $fournisseur['nom']; ?></td>
<td class="text-center"><?PHP echo $fournisseur['prenom']; ?></td>
<td class="text-center"><?PHP echo $fournisseur['email']; ?></td>
<td class="text-center"><?PHP echo $fournisseur['tel']; ?></td>
<td class="text-center">
    <?PHP 
   $elementC= $categorieC->afficherElementCategorie($fournisseur['categorie']);
   echo $elementC->libelle;
     ?>
</td>
<td class="text-center"> 
<?PHP
$elementL= $localC->afficherElementLocal($fournisseur['local']);
 echo $elementL->adresse;
?>
</td>

<td class="text-center"> 
<form method="POST" action="deleteFournisseur.php">
<button type="submit" name="supprimer" class="au-btn au-btn-icon au-btn--blue">
 <i class="zmdi zmdi"></i>Supprimer</button>
 <input type="hidden" value=<?PHP echo $fournisseur['id_fournisseur']; ?> name="id_fournisseur">
 </form>  
 </td>
 <!-- Impression  !-->
 <td class="text-center"> 
<form action="imprimeFourni.php" method="get">
<button type="submit" name="imprime" id="imprime" class="au-btn au-btn-icon au-btn--blue">
 <i class="zmdi zmdi"></i>Imprimer</button>
 <input type="hidden" value=<?PHP $fournisseur['id_fournisseur'];  ?> id="id_fourni" name="id_fourni">
 <input type="hidden" value=<?PHP echo $fournisseur['img'];  ?> id="img" name="img">
 <input type="hidden" value=<?PHP echo $fournisseur['prenom'];   ?> id="prenom" name="prenom">
 <input type="hidden" value=<?PHP echo $fournisseur['nom'];  ?> id="nom" name="nom">
 <input type="hidden" value=<?PHP echo $fournisseur['email'];  ?> id="email" name="email">
 <input type="hidden" value=<?PHP echo $fournisseur['tel'];  ?> id="tel" name="tel">

 </form>  
 </td>
 <td class="text-center"> 
 <button class="au-btn au-btn-icon au-btn--blue">
 <a href="updateFournisseur.php?id=<?PHP echo $fournisseur['id_fournisseur']; ?>">
 <i class="zmdi zmdi"></i>Modifier</button>
  </a>
 </td>
 
</tr>
        
        <?php    
    }
    ?></tbody>
    </table>
    </div>
    <?php  
  } 
?>
