 <?php	
	include('controller/connexion.inc.php');

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Recherche</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" type="image/x-icon" href="image/LOGO-SIMPA_SAMARA.png">
	
	<link rel="stylesheet" href="css/style.css" media="screen">
  <link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/print.css" media="print">
	
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<section class="content">
    <div class="row">
       <h1 class="soulign flex ">PIÈCE DE CAISSE - DÉPENSE</h1>
       <hr>
       <div class="col-xs-12">


		<div class="box box-warning">
            <div class="box-header bg-info flex">
              <h3 class="box-title">GESTION - LISTE DES PIÈCES DE DÉPENSE ENRÉGISTRÉES</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Référence</th>
                  <th>Date de création</th>
                  <th>Montant en chiffre</th>
                  <th>Libellé de l'opération</th>
                  <th>Montant en lettre</th>
                  <th>Accord de la direction</th>
                  <th>Caissier(e)</th>
                  <th>Bénéficiaire</th>
                  <th>Imprimer</th>
                  <th>Modification</th>
                  <th>Suppression</th>
                </tr>
                </thead>
                <tbody>
        <?php
					$reqs=$connexion->query("SELECT * from depense ORDER BY  id");
					while($test=$reqs->fetch())
					{
						echo "<tr>";
  						
              $ref=$test['ref'];
              $datee=$test['datee'];
              $mtchiffre=$test['mtchiffre'];
              $lib=$test['libelleop'];
              $mtlettre=$test['mtlettre'];
              $signdirection=$test['signdirection'];
              $caisse=$test['caissier'];
              $benef=$test['benef'];
              echo "<td>".($ref)."</td>";
  						echo "<td>".($datee)."</td>";
  						echo "<td>".($mtchiffre)."</td>";
  						echo "<td>".($lib)."</td>";
  						echo "<td>".($mtlettre)."</td>";
  						echo "<td>".($signdirection)."</td>";
  						echo "<td>".($caisse)."</td>";
  						echo "<td>".($benef)."</td>";
              echo "<td>"."<form>".
                 "<a class='btn btn-warning btn-md' href='imprimrech.php?ref=$ref&date=$datee&number=$mtchiffre&libelle=$lib&letter=$mtlettre&accord=$signdirection&caissier=$caisse&beneficiaire=$benef' name='imprimer'>Imprimer</a>".
               "</form>"."</td>";
               echo "<td>"."<form>".
                 "<a class='btn btn-primary btn-md' href='update.php?ref=$ref&date=$datee&number=$mtchiffre&libelle=$lib&letter=$mtlettre&accord=$signdirection&caissier=$caisse&beneficiaire=$benef' name='update'>Modifier</a>".
               "</form>"."</td>";
               echo "<td>"."<form>".
                 "<a class='btn btn-danger btn-md ' href='confib.php?ref=$ref' name='delete'>Supprimer</a>".
               "</form>"."</td>";
						echo "</tr>";

					}
					
				
        ?>  
    
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
        <div class="col-lg-12">
          <div class="flex col-lg-6">
            <button class="btn btn-info" onclick="window.location.href='index.php'">Retourner à l'accueil</button>
          </div>
          <div class="flex">
            <button class="btn btn-info" onclick="window.location.href='../excel/'">Acceder au bilan</button>
          </div>
        </div>
  </div>
<div class="footer">
    
      
        <div class="col-lg-12 flex">
          <div class="col-sm-6">
            <h5 class="size flex">Copyright © 2018. Togola Aboubacar / Toumba Andrez</h5>
          </div>
          <div class=" col-sm-6">
            <h5 class="size flex">All right reserved.</h5>
          </div>
        </div>
      
  </div>

  





<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>