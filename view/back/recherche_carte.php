<?php
  session_start();
  require_once('../../config.php');
  $db = config::getConnexion();
  if(isset($_GET['user']) && !empty($_GET['user'])){
    $user = (String) trim($_GET['user']);
    $sql = "SELECT *
      FROM carte
      WHERE id_carte LIKE '%".$user."%' 
      OR points LIKE '%".$user."%' 
      OR statut LIKE '%".$user."%' 
      OR dateCreation LIKE '%".$user."%' 
      LIMIT 10";
      $query=$db->prepare($sql);
      $query->execute(array("$user%"));
      $sql = $query->fetchALL(); 
     
  ?>
  <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc">
        <table class="table table-borderless table-striped table-earning">
      <thead>
      <tr>
      <th class="text-center">ID Carte</th>
                                                <th class="text-center">Points fidélités</th>
                                                <th class="text-center">Statut</th>
                                                <th class="text-center">Date Création</th>
                                                <th class="text-right"></th>
                                                <th class="text-right"></th>
          </tr>
      </thead>
      <tbody> 
      <?php
    foreach($sql as $carte){
      ?>   
        
           
      <tr>
<td class="text-center"><?PHP echo $carte['id_carte']; ?></td>
<td class="text-center"><?PHP echo $carte['points']; ?></td>

<td class="text-center"><?PHP echo $carte['statut']; ?></td>
<td class="text-center"><?PHP echo $carte['dateCreation']; ?></td>

<td class="text-center"> 
<form method="POST" action="deleteCarte.php">
<button type="submit" name="supprimer" class="au-btn au-btn-icon au-btn--blue">
 <i class="zmdi zmdi"></i>Supprimer</button>
 <input type="hidden" value=<?PHP echo $carte['id_carte']; ?> name="id_carte">
 </form>  
 </td>

 <td class="text-center"> 
 <button class="au-btn au-btn-icon au-btn--blue">
 <a href="updateCarte.php?id=<?PHP echo $carte['id_carte']; ?>">
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
