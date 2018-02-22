<?php	
	include('controller/connexion.inc.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	
 	<title>TEST</title>

 	<link rel="shortcut icon" type="image/x-icon" href="image/LOGO-SIMPA_SAMARA.png">
  	<link rel="stylesheet" href="css/style.css" media="screen">
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
  	<link rel="stylesheet" href="css/footer.css">
 </head>
<body>
	<div class="container">
 		<div class="row flex">
 			<div class="col-lg-12 noimp">
 				<h1>Journal de caisse</h1>
 			</div>	
 		</div>
 		<div class="row">
 			<div class="col-lg-2 cadre">
 				<ul class="list-group">
 					<li class="list-group-item list-group-item-action active">Annuel</li>
 				</ul>
 				<hr>
 				<ul class="list-group noimp">
 					<li class="list-group-item list-group-item-action"><a href="janvier.php">Janvier</a></li>
 					<li class="list-group-item list-group-item-action"><a href="fevrier.php">Février</a></li>
 					<li class="list-group-item list-group-item-action"><a href="mars.php">Mars</a></li>
 					<li class="list-group-item list-group-item-action"><a href="avril.php">Avril</a></li>
 					<li class="list-group-item list-group-item-action"><a href="mai.php">Mai</a></li>
 					<li class="list-group-item list-group-item-action"><a href="juin.php">Juin</a></li>
 					<li class="list-group-item list-group-item-action"><a href="juillet.php">Juillet</a></li>
 					<li class="list-group-item list-group-item-action"><a href="aout.php">Août</a></li>
 					<li class="list-group-item list-group-item-action"><a href="septembre.php">Septembre</a></li>
 					<li class="list-group-item list-group-item-action"><a href="octobre.php">Octobre</a></li>
 					<li class="list-group-item list-group-item-action"><a href="novembre.php">Novembre</a></li>
 					<li class="list-group-item list-group-item-action"><a href="decembre.php">Décembre</a></li>
 				</ul>
 			</div>
 			<div class="col-lg-10 cadre">
 					<section class="content">
    <div class="row">
       <div class="col-xs-12">
		<div class="box box-warning">
            <div class="box-header bg-info flex">
              <h4 class="box-title">Journal de caisse - Annuel <?=date('Y'); ?></h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>DATE</th>
                  <th>N° PIÈCE</th>
                  <th>LIBELLÉ</th>
                  <th>DÉBIT</th>
                  <th>CRÉDIT</th>
                  <th>SOLDE</th>
                </tr>
                </thead>
                
        <?php
					
					echo"<tbody>";
            $s1=0;
            $s2=0;
            $solde=0;
              $req=$connexion->query("SELECT DISTINCT depense.ref,depense.datee,depense.mtchiffre,depense.libelleop from relation inner join depense on depense.ref=relation.refdepense ORDER BY datee DESC");
              $req1=$connexion->query("SELECT DISTINCT recette.ref_r,recette.datee_r,recette.mtchiffre_r,recette.libelleop_r from relationr inner join recette on recette.ref_r=relationr.refrecette ORDER BY datee_r DESC");
                  
              while($s=$req->fetch())
                {
                  $ref=$s['ref'];
                  
                  $date=$s['datee'];
                   
                  $mt=$s['mtchiffre'];
                   
                  $lib=$s['libelleop'];
                  
                    echo"<tr>";
                    echo"<td>".$date."</td>";
                    echo"<td>".$ref."</td>";
                    echo"<td>".$lib."</td>";
                    echo"<td>".$mt."</td>";
                    echo"<td>"."-"."</td>";
                    echo"<td>"."-"."</td>";
                    echo"</tr>";
                     
                  	$s1=$s1+$mt;
                
                } 
                while($d=$req1->fetch()) 
                {
                	$ref_r=$d['ref_r'];
					$date_r=$d['datee_r'];
					$mt_r=$d['mtchiffre_r'];
					$lib_r=$d['libelleop_r'];
					echo"<tr>";
                    echo"<td>".$date_r."</td>";
                    echo"<td>".$ref_r."</td>";
                    echo"<td>".$lib_r."</td>";
                    echo"<td>"."-"."</td>";
                    echo"<td>".$mt_r."</td>";
                    echo"<td>"."-"."</td>";
                  echo"</tr>";
                  $s2=$s2+$mt_r;
                }

		           
              echo"</tbody>";
              
	              		if($s1>$s2)
				           {
				             $solde=$s1-$s2;
				           }
				            else
				           {
				             $solde=$s2-$s1;
				           }
	              		
	              	echo "<tfoot>";
			           	echo "<tr>";
			              echo"<td colspan='3'>".'TOTAL';
			               echo "<td>".$s1."</td>";
			               echo "<td>".$s2."</td>";
			               echo "<td>".$solde."</td>";
			              echo"</td>";
			            echo"</tr>";
          	    	echo"</tfoot>";
             ?> 
          
         
    
                
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
  $(function () 
  {
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