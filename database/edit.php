<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update the Detail for <?php echo $sfdrow['name']; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body{
  background-color:#e2e7ec;
}
</style>

</head>
  <body>
   
  <?php
 
 $id=$_GET['id'];
 include("connection.php");



$showfulldata ="select * from user_data where id='$id'";

$sfdquery=mysqli_query($con, $showfulldata);



$sfdrow=mysqli_fetch_assoc($sfdquery);

$num =mysqli_num_rows($sfdquery);


?>

 



<div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        
        <h1 class="fw-bold mb-0 fs-2 text-primary">Update Data For the Table</h1>
        
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="post" action="edit_user_databackend.php?id=<?php  echo $id; ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floating1"  value="<?php echo $sfdrow['name'];  ?>"  name="name">
            <label for="floating1"> Name</label>
          </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floating2"  value="<?php echo $sfdrow['Phone_number'];  ?>"  name="number">
            <label for="floating2">Phone Number</label>
          </div>
          <div class="form-floating mb-3">
     <input type="email" class="form-control rounded-3" id="floating3" value="<?php echo $sfdrow['email'];  ?>"  name ="email">
            <label for="floating3">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control rounded-3" id="floating4"  value="<?php echo $sfdrow['date_of_birth'];  ?>" name ="dob">
            <label for="floating4">Date of birth</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floating5"  value="<?php echo $sfdrow['password'];  ?>"  name="pass1">
            <label for="floating5"> Password</label>
          </div>
         
                      
                      <div class="form-outline flex-fill mb-1">
                      
                      <label class="form-label" for="flexRadioDefault1">Gender</label>
                      <input class="form-check-input radiomargin" type="radio" name="gender" id="flexRadioDefault1" value="male" <?php if($sfdrow['gender']=="male") {echo "checked";} ?> >
                        <label class="form-label " for="flexRadioDefault1">Male</label>
                        <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault2" value="female"<?php if($sfdrow['gender']=="female") {echo "checked";} ?>  >
                        <label class="form-label" for="flexRadioDefault2">Female</label>
                        <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault3" value="other" <?php if($sfdrow['gender']=="other") {echo "checked";} ?> >
                        <label class="form-label" for="flexRadioDefault3">Other</label>
                    
                    </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="update" value="update" >UPDATE</button>
        
         
         
        </form>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>