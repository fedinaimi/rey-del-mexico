<?php
  session_start();
  require_once('../../config.php');
  $db = config::getConnexion();
  if(isset($_GET['user']) && !empty($_GET['user'])){
    $user = (String) trim($_GET['user']);
    $sql = "SELECT *
      FROM evenement
      WHERE id LIKE '%".$user."%' 
     
      OR libelle LIKE '%".$user."%' 
      OR date LIKE '%".$user."%' 
      OR duree LIKE '%".$user."%' 
      OR description LIKE '%".$user."%' 
     
      LIMIT 10";
      $query=$db->prepare($sql);
      $query->execute(array("$user%"));
      $sql = $query->fetchALL(); 
     
  ?>
  <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc">
        <table class="table table-borderless table-striped table-earning">
      <thead>
      <tr>
          <th class="text-center">ID </th>
              <th class="text-center">Libelle</th>
              <th class="text-center">DATE</th>
              <th class="text-center">Duree</th>
              <th class="text-center">Description</th>
              <th class="text-center">Local</th>
              
             
          </tr>
      </thead>
      <?php
    foreach($sql as $local){
      ?>   
        
        
      <tbody>      
<tr>
<td class="text-center"><?PHP echo $local['id']; ?></td>
<td class="text-center"><?PHP echo $local['libelle']; ?></td>
<td class="text-center"><?PHP echo $local['date']; ?></td>
<td class="text-center"><?PHP echo $local['duree']; ?></td>
<td class="text-center"><?PHP echo $local['description']; ?></td>
<td class="text-center"><?PHP echo $local['local']; ?></td>


        </tr>
        
        <?php    
    }
    ?></tbody>
    </table>
    </div>
    <?php  
  } 
?>
