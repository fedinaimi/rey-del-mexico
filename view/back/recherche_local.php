<?php
  session_start();
  require_once('../../config.php');
  $db = config::getConnexion();
  if(isset($_GET['user']) && !empty($_GET['user'])){
    $user = (String) trim($_GET['user']);
    $sql = "SELECT *
      FROM local
      WHERE adresse LIKE '%".$user."%' 
      OR id_local LIKE '%".$user."%' 
      OR libelle LIKE '%".$user."%' 
      OR nbChaises LIKE '%".$user."%' 
      OR nbTables LIKE '%".$user."%' 
      OR surface LIKE '%".$user."%' 
      OR tel LIKE '%".$user."%' 
      LIMIT 10";
      $query=$db->prepare($sql);
      $query->execute(array("$user%"));
      $sql = $query->fetchALL(); 
     
  ?>
  <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc">
        <table class="table table-borderless table-striped table-earning">
      <thead>
      <tr>
          <th class="text-center">ID Local</th>
              <th class="text-center">Libelle</th>
              <th class="text-center">Adresse</th>
              <th class="text-center">Nb de Tables</th>
              <th class="text-center">Nb de Chaises</th>
              <th class="text-center">Surface</th>
              <th class="text-center">Numéro Téléphone</th>
             
          </tr>
      </thead>
      <?php
    foreach($sql as $local){
      ?>   
        
        
      <tbody>      
<tr>
<td class="text-center"><?PHP echo $local['id_local']; ?></td>
<td class="text-center"><?PHP echo $local['libelle']; ?></td>
<td class="text-center"><?PHP echo $local['adresse']; ?></td>
<td class="text-center"><?PHP echo $local['nbTables']; ?></td>
<td class="text-center"><?PHP echo $local['nbChaises']; ?></td>
<td class="text-center"><?PHP echo $local['surface']; ?></td>
<td class="text-center"><?PHP echo $local['tel']; ?></td>

        </tr>
        
        <?php    
    }
    ?></tbody>
    </table>
    </div>
    <?php  
  } 
?>
