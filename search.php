<?php 
	include("header.php");
	include("db_con.php");
 ?>

<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">


<form action="search.php" method="post" name="myForm" role="form">
<div class="form-group">
	<h3>Click button to see all corpers of NACC</h3>
	<input type="submit" name="btn_submit" value="all corpers" class="btn btn-danger">
</div>
</form><br/>



<?php
error_reporting(E_ERROR||E_WARNING);
	$ty=$_REQUEST['surname'];
	$op=mysqli_query($conn,"SELECT DISTINCT surname FROM taraba_corper");
	
		
	
?>

<form action="search.php" method="post" name="myForm" role="form">
<div class="form-group">
<label for="type">
   	Select Type:
</label>
	<SELECT name="type" id="type" >
	<option>Select One</option>
<?php 	  
	    while ($t=mysqli_fetch_array($op)){ 
	    		$type=$t['scode'];
	    		if(strcmp ($type,$ty) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
	    	?>
		
		<option value="<?php echo $type; ?>"  <?=$isSelected; ?>   ><?php echo $type; ?></option>
<?php } ?>
	</SELECT><br/>
	<input type="submit" name="submit" value="Search" class="btn btn-danger">
</div>
</form>


<?php
	$st=$_REQUEST['scode'];
	$op1=mysqli_query($conn,"SELECT DISTINCT scode FROM taraba_corper");
	
?>

<form action="teacher.php" method="post" name="myForm" role="form">
<div class="form-group">
<label for="status">
   	Select State Code:
</label>
	<SELECT name="status" id="status" >
	<option>Select One</option>
<?php 	  
	    while ($s=mysqli_fetch_array($op1)){ 
	    		$status=$s['scode'];
	    		print_r($s);
	    		if(strcmp ($status,$st) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
	    	?>
		
		<option  value="<?php echo $status; ?>"  <?=$isSelected; ?>   ><?php echo $status; ?></option>
<?php } ?>
	</SELECT><br/>
	<input type="submit" name="submit" value="Search" class="btn btn-danger">
</div>
</form>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>NACC Management System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

<div id="print_content">

<?php

if(isset($_POST['btn_submit'])){

	$c2=mysqli_query($conn,"SELECT COUNT(*) FROM taraba_corper");
	while ($c2=mysqli_fetch_array($c2)) {
		echo "<b>Total: </b><b style='color:#0B610B;'>".$c2['COUNT(*)']."</b>";
	}
	
	$result=mysqli_query($conn,"SELECT * FROM taraba_corper");
	while($row=mysqli_fetch_array($result)){
		echo "<hr>";
		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-md-6'>";
		echo "<br/>";
		echo "<b style='font-size:16px; color:#088A85;'>".$row['surname']."</b> <b style='font-size:16px; color:#088A85;'>".$row['othernames']."</b><br/>";
		echo "<b>".$row['scode']."</b><br/>";
        echo "<b>".$row['m_status']."</b><br/>";
        echo "<b>".$row['course']."</b><br/>";
		echo "</div>";
		echo "<div class='col-md-6'>";
		echo '<a href="corperinfo.php?id=' . $row['scode'] . '"><b class="btn btn-info">Details</b></a>' ; 
	    echo "</div>";
		echo "</div>";
		echo "<br/>";
		echo "</div>";

	}
}
?>


<?php
//search by type
$ty=$_REQUEST['scode'];
if($ty==true){
$c=mysqli_query($conn,"SELECT COUNT(*) FROM taraba_corper WHERE scode='$ty'");
	while ($cp=mysqli_fetch_array($c)) {
echo "<b>Total: </b><b style='color:#0B610B;'>".$cp['COUNT(*)']."</b>";
}
if($ty!='Select One'){
$query=mysqli_query($conn,"SELECT * FROM taraba_corper WHERE id='$ty'");

while($row=mysqli_fetch_array($query)){
		echo "<hr>";
		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-md-6'>";
		echo "<br/>";
		echo "<b style='font-size:16px; color:#088A85;'>".$row['surname']."</b><br/>";
		echo "<b>".$row['othernames']."</b><br/>";
		echo "</div>";
		echo "<div class='col-md-6'>";
		echo '<a href="corperinfo.php?id=' . $row['scode'] . '"><b class="btn btn-info">Details</b></a>' ; 
	    echo "</div>";
		echo "</div>";
		echo "<br/>";
		echo "</div>";
}
}else {
echo "<i style='color:red;'>Select at least one Type</i>";
}

}else{
//search by status
$st=$_REQUEST['scode'];
$c1=mysqli_query($conn,"SELECT COUNT(*) FROM taraba_corper WHERE scode='$st'");
	while ($cp1=mysqli_fetch_array($c1)) {
		echo "<b>Total: </b><b style='color:#0B610B;'>".$cp1['COUNT(*)']."</b>";
	}
if($st!='Select One'){
$query=mysqli_query($conn,"SELECT * FROM taraba_corper WHERE scode='$st'");

while($row=mysqli_fetch_array($query)){
		echo "<hr>";
		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-md-6'>";
		echo "<br/>";
		echo "<b style='font-size:16px; color:#088A85;'>".$row['surname']."</b><br/>";
		echo "<b>".$row['m_status']."</b><br/>";
		echo "</div>";
		echo "<div class='col-md-6'>";
		echo '<a href="corperinfo.php?id=' . $row['id'] . '"><b class="btn btn-info">Details</b></a>' ; 
	    echo "</div>";
		echo "</div>";
		echo "<br/>";
		echo "</div>";
}
		
}else {
echo "<i style='color:red;'>Select at least one Status</i>";
}
}
?>

</div>
<div class="col-sm-12">
<a href="javascript:Clickheretoprint()" class="btn btn-info" style="float:right;">Print</a>
</div>

</div>
</div>
</div>
</div>
</div>