<?php
  session_start();
  
    include "../../controller/localC.php";
    include "../../controller/categorieChefC.php";
  require_once('../../config.php');
  $localC = new localC();
  $categorieChefC = new categorieChefC();
  $db = config::getConnexion();
  
  if(isset($_GET['user']) && !empty($_GET['user'])){
    $user = (String) trim($_GET['user']);
    $sql = "SELECT *
      FROM chef
      WHERE id LIKE '%".$user."%' 
      OR nom LIKE '%".$user."%' 
      OR prenom LIKE '%".$user."%' 
      OR dateNais LIKE '%".$user."%' 
      OR adresse LIKE '%".$user."%' 
      OR local LIKE '%".$user."%' 
      OR email LIKE '%".$user."%' 
      OR categorie LIKE '%".$user."%' 
      LIMIT 10";
      $query=$db->prepare($sql);
      $query->execute(array("$user%"));
      $sql = $query->fetchALL(); 
     
  ?>
  <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
      <thead>
      <tr>
      <th class="text-center">ID</th>
                                            <th class="text-center">Image</th>
                                                <th class="text-center">NOM</th>
                                                <th class="text-center">Prénom</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Adresse</th>
                                                <th class="text-center">Date de Naissance</th>
                                                <th class="text-center">Catégorie</th>
                                                <th class="text-center">Local</th>
                                                <th class="text-center">Fb</th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-right"></th>
          </tr>
      </thead>
      <?php
    foreach($sql as $chef){
      ?>   
        
        
      <tbody>      
      <tr>
<td class="text-center"><?PHP echo $chef['id']; ?></td>
<td><img src="../front/assets/img/chef/<?php echo $chef["img"]; ?>" length="25" width="25" alt="image Chef"/></td>
<td class="text-center"><?PHP echo $chef['nom']; ?></td>
<td class="text-center"><?PHP echo $chef['prenom']; ?></td>
<td class="text-center"><?PHP echo $chef['email']; ?></td>
<td class="text-center"><?PHP echo $chef['adresse']; ?></td>
<td class="text-center"><?PHP echo $chef['dateNais']; ?></td>
<td class="text-center">
 <?php $elementL= $categorieChefC->afficherElementCategorieChef($chef['categorie']);
 echo $elementL->libelle; ?>
 </td>

<td class="text-center">
<?PHP
$elementL= $localC->afficherElementLocal($chef['local']);
 echo $elementL->adresse;
?>
</td>
<td class="text-center"><?PHP echo $chef['fb']; ?></td>
<td class="text-center"> 
<form method="POST" action="deleteChef.php">
<button type="submit" name="supprimer" class="au-btn au-btn-icon au-btn--blue">
 <i class="zmdi zmdi"></i>Supprimer</button>
 <input type="hidden" value=<?PHP echo $chef['id']; ?> name="id">
 </form>  
 </td>
 <td class="text-center"> 
<form action="imprimeChef.php" method="get">
<button type="submit" name="imprime" id="imprime" class="au-btn au-btn-icon au-btn--blue">
 <i class="zmdi zmdi"></i>Imprimer</button>
 <input type="hidden" value=<?PHP echo $chef['img']; ?> id="img" name="img">
 <input type="hidden" value=<?PHP echo $chef['nom']; ?> id="nom" name="nom">
 <input type="hidden" value=<?PHP echo $chef['prenom']; ?> id="prenom" name="prenom">
 <input type="hidden" value=<?PHP echo $chef['email']; ?> id="email" name="email">
 <input type="hidden" value=<?PHP echo $chef['adresse']; ?> id="adresse" name="adresse">
 <input type="hidden" value=<?PHP echo $chef['dateNais']; ?> id="dateNais" name="dateNais">
 <input type="hidden" value=<?PHP echo $chef['categorie']; ?> id="categorie" name="categorie">
 <input type="hidden" value=<?PHP echo $chef['local']; ?> id="local" name="local">
 </form>  
 </td>
 <td class="text-center"> 
 <button class="au-btn au-btn-icon au-btn--blue">
 <a href="updateChef.php?id=<?PHP echo $chef['id']; ?>">
 <i class="zmdi zmdi"></i>Modifier</button>
  </a>
 </td>
</tr>
        
        <?php    
    }
    ?>
    </tbody>
    </table>
    </div>
    <?php  
  } 
?>