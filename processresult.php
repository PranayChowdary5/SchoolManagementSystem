<?php include('config.php');?><br><br><br><br><br>
 
<!DOCTYPE html>
<html>
<head>
	<title>View All Customer Details</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
	<style> 
		 table{  
			border-collapse:collapse; 
		} 
		
		th, td { 
			padding: 15px;
			text-align: left;
			border-bottom: 1px solid #ddd; 
		} 
		tr:hover {background-color:#f5f5f5;}
	}
	</style> <br><br><br><br><br>
<h3>Results</h3>
<?php
$roll=$_SESSION['ums']['Roll'];
$sem = mysqli_real_escape_string($conn,$_POST['sem']);
$querystring1="SELECT * FROM student where Roll=$roll";

$execute1=mysqli_query($conn,$querystring1) or die(mysqli_error($conn));
$row1=mysqli_fetch_array($execute1);

if($sem=="Sem1")
{
$querystring="SELECT * FROM semester1 where rollno=$roll";
$execute=mysqli_query($conn,$querystring) or die(mysqli_error($conn));
}

else if($sem=="Sem2"){
$querystring="SELECT * FROM semester2  where rollno=$roll";

$execute=mysqli_query($conn,$querystring) or die(mysqli_error($conn));
}

#execute the abouve query
//var_dump($execute);
if(mysqli_num_rows($execute)>0){			//to find no. of rows inside a table
?>
<table style="width:70%;height:500%;background-color:white"> 
	<tbody>
	<?php while($row=mysqli_fetch_array($execute)){ ?>
		<!-- <caption>DETAILS</caption> --> 
		<tr> 
			<th>Name</th> 
			<th><?php echo $row1['Name']?></th>
		</tr> 

		<tr> 
			<th>Roll no</th> 
			<th><?php echo $row['rollno']?></th> 
		</tr> 
		<tr> 
			<td>Theory 1</td> 
			<td><?php echo $row['t1']?></td>  
		</tr> 
		<tr> 
			<td>Theory 2</td> 
			<td><?php echo $row['t2']?></td> 
		</tr> 
		<tr> 
			<td>Theory 3</td> 
			<td><?php echo $row['t3']?></td>
		</tr> 
		<tr> 
			<td>Practical 1</td> 
			<td><?php echo $row['p1']?></td>
		</tr> 
		<tr> 
			<td>Practical 2</td> 
			<td><?php echo $row['p2']?></td>
		</tr> 
		<?php } ?>
</tbody>
	</table> 
<?php
}
else{
	echo "No data found!";
}
?>
</body>
</html>

<br><br><br><br><br>
<?php include('footer.php');?>