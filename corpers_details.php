<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
<center><h1>Corper's detail information</h1></center>

 <?php

    // echo "<hr>";
    // echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
    // echo "<div class='row'>";
    // echo "<div class='col-md-6 col-md-offset-4'>";
    
    $sql = "SELECT * FROM taraba_corper";
    if ($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result)>0){
    
    echo "<table>";
    echo "<tr>";
      echo     "<th> Surname</th>";
          echo " <th>Othername</th>";
          echo "<th>Marital Status</th>";
          echo "<th>Phone</th>";
          echo "<th>Course of Study</th>";
          echo"</tr>";
          while ($row = mysqli_fetch_array($result)){
          echo"<tr>";
          echo "<td>" . $row ['surname'] . "</td> "; 
          echo "<td>" . $row ['othernames'] . "</td>";
          echo "<td>" . $row ['m_status'] . "</td>";
          echo "<td>" . $row ['phone'] . "</td>";
          echo "<td>" . $row ['course'] . "</td>";

          echo"</tr>";
          }
           echo "</table>";
    } else{
    echo "No records found";
    }

    }
    


    echo "</div>";
    echo "<br/>";
    echo "</div>";

    echo "</div>";

 ?>

 
 
 <button onclick = "window.print()" class = 'btn btn-info' style = 'float:right'>Print</button>



<a href="corper.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>
 <!-- </div>
 </div>
 </div> -->
 <!-- printing button -->

 </div>