<?php
	require_once('auth.php');
?>
<?php
 require_once("dbcontroller.php");
 //execute the SQL query and return records


$sql = 'SELECT * 
		FROM fw_insurance';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>display</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.a{
			width:100%;
			height:100%;
			margin-top:100px;
			
		}
		header{
    position: fixed;
    width:100%;
    top: 0px;
    opacity: 0.9;
}
footer{
	width:100%;
}
#nav{
    width:100%;
    height: 70px;
    background-image: url("img2.jpg");
	background-size: cover;
	margin-left:-9px;
}
#nav_wrapper{
    height: 40px;
    width:700px;
    background-color: rgba(7, 56, 68, 0.73);
    margin-left: auto;
    margin-right:auto;
    margin-top:5px;
    opacity: 0.7;
    filter :alpha(opacity=70);
}
#nav_wrapper ul li{
    list-style:none;
    display: inline;
	font-weight: bold;
	margin-top:-10px;
    padding: 10px;

}
#nav_wrapper ul{
	margin-top:-45px;
}
#nav_wrapper a{
    font-family: Arial, Helvetica, sansserif-;
    font-size: 20px;
    color:white;
    text-decoration: none;
    padding: 5px;
}#nav_wrapper ul li:hover{
    background: red;
    transition: all 0.45s;
    opacity: 0.5;
    filter:alpha(opacity=90);
}
#nav_wrapper ul li.a{
	margin-left: 10px;


}
#nav_wrapper ul li.b{
    margin-left: 250px;

}
#me{
    width:100%;
    bottom:0px;
	opacity: 0.9;
	position:fixed;
	
}

#foot{
    width:100%;
    height:50px;
    background-image: url("img2.jpg");
    background-size: cover;
    
}
#foot p{
    font-family: Arial, Helvetica, sansserif-;
    font-size: 20px;
    padding-top: 20px;
    color:white;
    text-align: center;
}
#foot p a{
    
    color:#47F180;
}
#foot p a:hover{
    color:white;
    background-color: red;;
    transition: all 0.45s;
    opacity: 0.5;
}
	</style>
</head>
<body>
<header>
		<div id="nav"><br>
			<div id="nav_wrapper"><br><br><br>
				<ul>
					<li class="a"><a href="ins_req.php" style="font-size:20">XYZ INSURANCE</a></li>
					<li class="b"><a href="logout1.php">logout</a>
				</ul>
            </div>
            
		</div>
	</header>
	<div class="a">
	<h1>FOUR WHEELER INSURANCE REQUEST</h1>
	<table class="data-table">
		<caption class="title">INSURANCE REQUEST</caption>
		<thead>
			<tr>
            
            <th>REQUEST_FOR</th>
            <th>POICY</th>
          <th>TITLE</th>
          <th>FIRSTNAME</th>
          <th>LASTNAME</th>
          <th>AGE</th>
          <th>VEHICLE REGISTRATION NUMBER</th>
          <th>REGISTRATION DATE</th>
          <th>CHASSIS NUMBER</th>
          <th>ENGINE NUMBER</th>
          <th>MANUFACTURER NAME</th>
          <th>VEHICLE MODEL</th>
          <th>MANUFACTURING YEAR</th>
          <th>VEHICLE TYPE</th>
          <th>MOBILE NUMBER</th>
          <th>EMAIL</th>
          <th>ADDRESS</th>
			</tr>
		</thead>
		<tbody>
		<?php
	$total 	= 0;
		
		while ($row = mysqli_fetch_array($query))
		{
            echo '<tr>
		
            
            <td>'.$row['REQUEST_FOR'].'</td>
            <td>'.$row['POLICY'].'</td>
			<td>'.$row['TITLE'].'</td>
			<td>'.$row['FIRSTNAME'].'</td>
			<td>'.$row['LASTNAME'].'</td>
			<td>'.$row['AGE'].'</td>
			<td>'.$row['REG_NO'].'</td>
			<td>'.$row['REGIS_DATE'].'</td>
			<td>'.$row['CHASSIS_NUM'].'</td>
			<td>'.$row['ENGINE_NUMB'].'</td>
			<td>'.$row['MANF_NAME'].'</td>
			<td>'.$row['MODEL'].'</td>
            <td>'.$row['MANFT_YEAR'].'</td>
            <td>'.$row['VECHILE_TYPE'].'</td>
			<td>'.$row['MOBILE_NUMBER'].'</td>
			<td>'.$row['EMAIL'].'</td>
			<td>'.$row['ADDRESS'].'</td>
			</tr>';
			
		
		}
		$total="CALL proc4()";
		$result=mysqli_query($conn, $total);
		$row=$result->fetch_assoc();
	
		?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">TOTAL</th>
				<th><?php echo $row["count(*)"] ?></th>
			</tr>
		</tfoot>
	</table>
	</div>
	</body>
<footer id="me">
<div id="foot">
    <p>Developed by<a href="#"><b> PRINCERAJ</b></a></p>
</div>
</footer>
</html>