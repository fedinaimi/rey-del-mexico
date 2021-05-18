<?php
    
  session_start();

  require_once('../../config.php');
  
 

  $db = config::getConnexion();
  if(isset($_GET['user']) && !empty($_GET['user'])){
    $user = (String) trim($_GET['user']);
    $sql = "SELECT *
      FROM reservation
      WHERE id_reservation LIKE '%".$user."%' 
     
      OR date LIKE '%".$user."%' 
      OR nb_perso LIKE '%".$user."%' 
      OR message LIKE '%".$user."%' 
      OR statut LIKE '%".$user."%' 
      OR local LIKE '%".$user."%' 
      OR client LIKE '%".$user."%' 
     
      LIMIT 10";
      $query=$db->prepare($sql);
      $query->execute(array("$user%"));
      $sql = $query->fetchALL(); 
     
  ?>
  <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc">
        <table class="table table-borderless table-striped table-earning">
      <thead>
      <tr>
          <th class="text-center">id_reservation </th>
              <th class="text-center">nb_perso</th>
              <th class="text-center">message</th>
              <th class="text-center">statut</th>
              <th class="text-center">local</th>
              <th class="text-center">client</th>
              
             
          </tr>
      </thead>
      <?php
    foreach($sql as $local){
      ?>   
        
        
      <tbody>      
<tr>
<td class="text-center"><?PHP echo $local['id_reservation']; ?></td>
<td class="text-center"><?PHP echo $local['nb_perso']; ?></td>
<td class="text-center"><?PHP echo $local['message']; ?></td>
<td class="text-center"><?PHP echo $local['statut']; ?></td>
<td class="text-center"><?PHP echo $local['local']; ?></td>
<td class="text-center"><?PHP echo $local['client']; ?></td>


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
