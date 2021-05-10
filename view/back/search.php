<?php
include '../../Controller/commandeC.php';
                    $x=0 ; 
                    $commandeC = new commandeC();
                    if(!isset($_POST['str'])){
                        $liste = $commandeC->affichercommande();
                    }
                    else{
                        $liste = $commandeC->recherchercommande($_POST['str']);
                    }

                        foreach ($liste as $commande) 
                            $x++ ;
                            {
                                
                                
                             
                             
                              ?>    
                                 
                                     <tr valign="middle">
                                         
                                         <td align="center"><?php echo $row["id_commande"] ?></td>
                                         
                                        
                                         
                                          <td align="center">
                                          <center>  <form action="modifiecommande.php" method="post" style="position: relative;top: 10px">
                                                
                                          <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
                                                <select name="etat" id="etat" >
                                                
                                 <option value="en cours de traitement"<?php if ($row["etat"]==1) echo "selected" ; ?>>en cours de traitement</option>
                                    <option value="traitée" <?php if ($row["etat"]==2) echo "selected" ; ?>>traitée</option>
                                    
                                 </select>
                                 <center>  <button type="submit" class="badge badge-info">update</button>
                                            </form></center>
                                        </td>
                                         <td><?php echo $row["client"] ?></td>
                                    
                                        
                                         <td align="center"><?php echo $row["prix_tot"].' '.'TND' ?></td>
                                             <td>
                                             
                                                 
                                       <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
                                       <input type="hidden" id="prix_tot" name="prix_tot" value="<?php echo $row["prix_tot"] ?>">
                                      
                                       <input type="hidden" id="client" name="client" value="<?php echo $row["client"] ?>">
                             
                                       
                                            <center> <form action="supprimercommande.php" method="get">
                                            
                                                 
                                       <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
                                                
                                               <button  class="btn btn-danger" type="submit" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>   </form></center>
                                              
                                               
                                           
                             
                                               <td <center> <form action="imprimercommande1.php" method="get">
                                               <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
                                               <input type="hidden" id="client" name="client" value="<?php echo $row["client"] ?>">
                                               <input type="hidden" id="nomproduit" name="nomproduit" value="<?php echo $row["nomproduit"] ?>">
                                               <input type="hidden" id="qte" name="qte" value="<?php echo $row["qte"] ?>">
                                               <input type="hidden" id="prix_tot" name="prix_tot" value="<?php echo $row["prix_tot"] ?>">
                                               <input type="hidden" id="etat" name="etat" value="<?php echo $row["etat"] ?>">
                                                <button  class="btn btn-light" type="submit" ><span class="fa fa-print fa-2x"></span></button></td>
                                             </form></center>
                              
                                      
                                         
                                    
                                         
                                     </tr>
                                    
                         

                            <script>
                            // Get the modal
                            var modal = document.getElementById('id');

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                            }
                            </script>
                                    </td>
                                            
                                            </tr>
        <?php
    }
    
?>
