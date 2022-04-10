<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
<center><h1>Corpers's detail information</h1></center>

 <?php
if (isset($_REQUEST['id']))
 {
$id = $_REQUEST['id'];

$result=mysqli_query($conn,"SELECT * FROM corper_details WHERE id='$id' ");
while($row=mysqli_fetch_array($result)){

    echo "<hr>";
    echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
    echo "<div class='row'>";
    echo "<div class='col-md-6 col-md-offset-4'>";
    echo "<br/>";
    echo "<table>";
    echo "<tr>";
    echo "<th><pre>FirstName</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['FirstName']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>OtherNames</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['OtherNames']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>Address</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['Address']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>State</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['State']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>FathersName</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['FathersName']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>MothersName</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['MothersName']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>Mobile Number</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['Mobile']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>Email</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['email']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>State code</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['StateCode']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>PPA</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['PPA']."</pre></i></td>";
    echo "</tr>";
    echo "</table>";
    echo "<br>";
}
    echo "</div>";
    echo "<br/>";
    echo "</div>";
}
    echo "</div>";
 ?>

<a href="student.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>
 </div>
 </div>
 </div>
 </div>