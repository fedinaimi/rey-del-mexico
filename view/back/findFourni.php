<?php
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Fournisseur</title>

	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
      
		<!-- PAGE CONTAINER-->
	
            <!-- HEADER DESKTOP-->
			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
          <div class="header-wrap">
          <button class="au-btn au-btn-icon au-btn--blue">
                                    <a href="showFournisseur.php">   <i class="zmdi zmdi">Retour à la liste</i></a></button>
        <!-- END HEADER MOBILE--></div>
					<div class="row">
    <div class="col-sm-0 col-md-2 col-lg-3"></div>
    <div class="col-sm-12 col-md-8 col-lg-6">
      <h1 style="text-align: center">Fournisseur recherché</h1>
      <br>
      <div class="form-group">
      <input class="form-control" type="text" id="search-user" value="" placeholder="Rechercher un ou plusieurs fournisseurs"/>

      </div>
    
    </div>
  </div>

          <div style="margin-top: 20px">
        <div id="result-search"></div> <!-- C'est ici que nous aurons nos résultats de notre recherche -->
      </div>
						
						<div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>&copy; Copyright.Tous droits réservés. <a href="../front/index.php">Rey Del México</a>.</p>
										</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTAINER-->

	</div>

	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script>
  $(document).ready(function(){
    $('#search-user').keyup(function(){
      $('#result-search').html('');
      var utilisateur = $(this).val();
      if(utilisateur != ""){
        $.ajax({
          type: 'GET',
          url: 'recherche_fourni.php',
          data: 'user=' + encodeURIComponent(utilisateur),
          success: function(data){
            if(data != ""){
              $('#result-search').append(data);
            }else{
              document.getElementById('result-search').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top: 10px'>Aucun fournisseur</div>"
            }
          }
        });
      }
    });
  });
</script>
	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
