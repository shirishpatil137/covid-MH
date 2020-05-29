<?php
$json = file_get_contents('https://api.covid19india.org/data.json');

// Converts it into a array
$data = json_decode($json,true);
//print_r( $data['statewise']['1']);
$active=$data['statewise']['1']['active'];
$confirmed=$data['statewise']['1']['confirmed'];
$death=$data['statewise']['1']['deaths'];
$recovered=$data['statewise']['1']['recovered'];
$ltimeupdate=$data['statewise']['1']['lastupdatedtime'];
?>

<html>
    <head>
	      <title>Covid-19</title>
	</head>
	<body>
	    
	<fieldset>
	 <legend>Maharashtra State Covid Statistic</legend>
		<table border =1 align="center">
		        <tr>
				     <td>Confirmed Cases:</td>
					 <td><?php echo $confirmed; ?></td>
				</tr>
				
				 <tr>
				     <td>Active Cases:</td>
					 <td><?php echo $active; ?></td>
				</tr>
				
				 <tr>
				     <td>Recovered Cases:</td>
					 <td><?php echo $recovered; ?></td>
				</tr>
				
				 <tr>
				     <td>Death Cases:</td>
					 <td><?php echo $death; ?></td>
				</tr>
				
				<tr>
				     <td>Last Updated on:</td>
					 <td><?php echo $ltimeupdate; ?></td>
				</tr>
		</table>
		
		Courtesy:<h3>COVID19-India API - Postman</h3>
		
	</fieldset>
</body>



</html>