<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        <div class="col-sm-10 col-sm-offset-1">
<center><p class = "hey">NATIONAL ASSOCIATION OF CATHOLIC CORPS MEMBERS <br /> TARABA STATE CHAPTER <br>FOR THOSE WHO ARE NOT REDEPLOYING</p></center>
<!-- scripting -->
<?php
 	if(isset($_POST['submit'])){
 		$redeploying = $_POST['redeploying'];
 		$surname = $_POST['surname'];
		$othernames = $_POST['othernames'];
 		$phone = $_POST['phone'];
        $m_status = $_POST['m_status'];
        $deployed_state = $_POST['deployed_state'];
        $lga = $_POST['lga'];
        $institution = $_POST['institution'];
 		$course = $_POST['course'];
        $catholic = $_POST['catholic'];
        $hobby = $_POST['hobby'];
        $sacrement = $_POST['sacrement'];
        $others = $_POST['others'];
        $scode = $_POST['scode'];
        $register_cyon = $_POST['register_cyon'];
        $cyon_position = $_POST['cyon_position'];
        $not_cyon = $_POST['not_cyon'];
        $nfcs_member = $_POST['nfcs_member'];
        $nfcs_position = $_POST['nfcs_position'];
        $not_nfcs = $_POST['not_nfcs'];
        $other_org = $_POST['other_org'];
        $other_org_position = $_POST['other_org_position'];
        $position = $_POST['position'];
        $talent = $_POST['talent'];
        $parish_name = $_POST['parish_name'];
        $parish_phone = $_POST['parish_phone'];

        // Validating each field and makin sure each variable has  value that is holding

        if($redeploying!=NULL && $surname!=NULL && $othernames!=NULL && $phone!=NULL && $m_status!=NULL 
         && $deployed_state!=NULL && $lga!=NULL && $institution!=NULL && $course!=NULL &&  $catholic!=NULL
         && $hobby!=NULL 
         && $sacrement!=NULL && $others!=NULL && $scode!=NULL && $register_cyon!=NULL && $cyon_position!=NULL
         && $not_cyon!=NULL && $nfcs_member!=NULL && $nfcs_position!=NULL 
         && $not_nfcs!=NULL && $other_org!=NULL && $other_org_position!=NULL && $position!=NULL 
         && $talent!=NULL && $parish_name!=NULL && $parish_phone!=NULL){

 		$sql = "INSERT INTO taraba_corper (redeploying, surname, othernames,phone, m_status, deployed_state, lga, institution, course, catholic, hobby, sacrement,others,scode,register_cyon,cyon_position,not_cyon,nfcs_member,nfcs_position,not_nfcs,other_org,other_org_position,position,talent,parish_name,parish_phone)
         VALUES ('$redeploying', '$surname', '$othernames','$phone', '$m_status', '$deployed_state', '$lga', '$institution', '$course', '$catholic', '$hobby', '$sacrement', '$others', '$scode','$register_cyon', '$cyon_position', '$not_cyon', '$nfcs_member', '$nfcs_position', '$not_nfcs', '$other_org', '$other_org_position', '$position', '$talent', '$parish_name', '$parish_phone')";
 		$result = mysqli_query($conn,$sql);
 		if(!$result){
            echo "<div class='alert alert-success'>";
            echo "<strong>Error!</strong> in submisssion.Please try again.";
            echo "</div>";
 		}else{
 			echo "<div class='alert alert-success'>";
            echo "<strong>Success!</strong> Record has been Inserted Successfully";
            echo "</div>";
 		}
 	}
 }
//  Bugger'codes
  ?>

    <form action="taraba_corper.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="redeploying" class="col-sm-2 control-label">Are you Redeploying?</label>
                <div class="col-sm-10">
                <input type = "radio" id = "redeploying" name ="redeploying" value="No">
                <label for = "Yes">Yes</label>

                <input type = "radio" id = "redeploying" name ="redeploying" value="Yes">
                <label for = "Yes">No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Surname:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="surname" placeholder="Enter Corpers's Name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="roll" class="col-sm-2 control-label">Othernames:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="othernames" placeholder="Enter othernames here.." required>
                </div>
            </div>
            <div class="form-group">
                <label for="year" class="col-sm-2 control-label">Phone No:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                </div>
            </div>
            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Marital Status:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "m_status"> 
                       <option value ="Married">Married</option>
                       <option value ="Single">Single</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">State:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "deployed_state"> 
                       <option value ="Adamawa">Adamawa</option>
                       <option value ="Akwa-Ibom">Akwa-Ibom</option>
                       <option value ="Anambara">Anambara</option>
                       <option value ="Bauchi">Bauchi</option>
                       <option value ="Bayelsa">Bayelsa</option>
                       <option value ="Benue">Benue</option>
                       <option value ="Borno">Borno</option>
                       <option value ="Cross-River">Cross-River</option>
                       <option value ="Delta">Delta</option>
                       <option value ="Ebonyi">Ebonyi</option>
                       <option value ="Edo">Edo</option>
                       <option value ="Ekiti">Ekiti</option>
                       <option value ="Enugu">Enugu</option>
                       <option value ="Gombe">Gombe</option>
                       <option value ="Imo">Imo</option>
                       <option value ="Jigawa">Jigawa</option>
                       <option value ="Kaduna">Kaduna</option>
                       <option value ="Kano">Kano</option>
                       <option value ="Katsina">Katsina</option>
                       <option value ="Kebbi">Kebbi</option>
                       <option value ="Kogi">Kogi</option>
                       <option value ="Kwara">Kwara</option>
                       <option value ="Lagos">Lagos</option>
                       <option value ="Nassarawa">Nassarawa</option>
                       <option value ="Niger">Niger</option>
                       <option value ="Ogun">Ogun</option>
                       <option value ="Ondo">Ondo</option>
                       <option value ="Osun">Osun</option>
                       <option value ="Oyo">Oyo</option>
                       <option value ="Plateau">Plateau</option>
                       <option value ="Rivers">Rivers</option>
                       <option value ="Sokoto">Sokoto</option>
                       <option value ="Taraba">Taraba</option>
                       <option value ="Yobe">Yobe</option>
                       <option value ="Zamfara">Zamafara</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">L.G.A:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="lga" placeholder="Enter your L.G.A: "required> 
                </div>
            </div>
            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Institution:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="institution" placeholder="Enter Institution attended "required>
                </div>
            </div>
            <div class="form-group">
                <label for="hall" class="col-sm-2 control-label">Course Study:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="course" placeholder="Enter Course of Study" required>
                </div>
            </div>
            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Are you a Catholic?</label>
                <div class="col-sm-10">
                <input type = "radio" id = "Catholic" name ="catholic" value="No">
                <label for = "Yes">Yes</label>

                <input type = "radio" id = "NotCatholic" name ="catholic" value="Yes">
                <label for = "Yes">No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="hall" class="col-sm-2 control-label">Hobby:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="hobby" placeholder="Hobby.." required>
                </div>
            </div>
            <div class="form-group">
                <label for="hall" class="col-sm-2 control-label">Sacrements Recieved?</label>
                <div class="col-sm-10">
                    <input type="checkbox"  name="sacrement" id = "Baptism" value="Baptism">
                    <label>Baptism</label>
                    <input type="checkbox"  name="sacrement" id = "Communion" value="Communion">
                    <label>Communion</label>
                    <input type="checkbox"  name="sacrement" id = "Holy Matrimony" value="Holy Matrimony">
                    <label>Holy Matrimony</label>
            
                </div>
            </div>
            <div class="form-group">
                <label for="hall" class="col-sm-2 control-label">Others Specify:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="others" placeholder="Others Specify..">
                </div>
            </div>

			
			<div class="form-group">
                <label for="session" class="col-sm-2 control-label">StateCode:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="scode" placeholder="Enter State Code " required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Registered Member of CYON?:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "register_cyon"> 
                       <option value ="No">No</option>
                       <option value = "Yes">Yes</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Position:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="cyon_position" placeholder="If Yes, what post did you occupy? " required>
                </div>
            </div>

            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">If No, State Your reason:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="not_cyon" placeholder="Enter State Code " required>
                </div>
            </div>
            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">NFCS Member?:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "nfcs_member"> 
                       <option value ="No">No</option>
                       <option value = "Yes">Yes</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">NFCS Position:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nfcs_position" placeholder="If yes. what post did you occupy.." required>
                </div>
            </div>
            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">If No, State Your reason:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="not_nfcs" placeholder="If No State your reasons..">
                </div>
            </div>

            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Other Organizations:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="other_org" placeholder="If No State your reasons.." >
                </div>
            </div>
            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Other Org Position:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="other_org_position" placeholder="If No State your reasons.." required>
                </div>
            </div>
            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Position:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="position" placeholder="If No State your reasons.." required>
                </div>
            </div>
            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Your Talents:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="talent" placeholder="What do you think you are good at that will positively improve the spiritual and social life of the youth of your community? " required>
                </div>
            </div>

            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Your Parish Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="parish_name" placeholder="Name of your Parish " required>
                </div>
            </div>
            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Phone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="parish_phone" placeholder="Phone number of your Chaplain/Parish Priest/Youth President" required>
                </div>
            </div>

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>

            <center><input type="reset" name="submit" value="Reset" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
 </form>
 

 </div>
 </div>
 </div>
 </div>
 </div>
