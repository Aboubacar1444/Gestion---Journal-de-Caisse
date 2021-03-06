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
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  	
 </head>
 <body>
 	<div class="container">
 		<div class="row flex">
 			<div class="col-lg-12">
 				
 				<table class="table table-bordered table-striped mt-5">
	                <thead>
	                	<tr>
	                		<td colspan="6">MOIS 02</td>
	                	</tr>
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
              $req=$connexion->query("SELECT DISTINCT depense.ref,depense.datee,depense.mtchiffre,depense.libelleop from relation inner join depense on depense.ref=relation.refdepense  where datee BETWEEN'2018-02-01' AND '2018-02-28'");
              $req1=$connexion->query("SELECT DISTINCT recette.ref_r,recette.datee_r,recette.mtchiffre_r,recette.libelleop_r from relationr inner join recette on recette.ref_r=relationr.refrecette WHERE datee_r BETWEEN'2018-02-01' AND '2018-02-28'");
                  
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
 		</div>
 	</div>
 </body>
 </html>