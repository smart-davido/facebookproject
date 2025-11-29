<?php
require_once("controller/controller.php");
$call->checkUserLoggedIn();

if (isset($_POST["submit"])) {
 $oldPass =  $_POST['oldpassword'];
  $newPass = $_POST['newpassword'];
  $cPass = $_POST['cpassword'];
  if (!empty( $oldPass) && !empty($newPass)   && !empty( $cPass)  ) {
  $msg = $call->updateUserPassword($oldPass,$newPass,$cPass);
  } else {
   $msg = " please fill all field😪";
  }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        form {
            width: 60% !important;
            height: 70% !important;
            margin: 100px auto 200px !important;
            border: 2px solid green !important;
            border-radius: 50px !important;
            box-sizing: border-box !important;
            padding: 50px !important;
            box-shadow: 10px 10px 10px black !important;
            ;
        }
    </style>
</head>

<body>
 <?php
require_once("sidebar.php");
         ?>
    <form action="" method="post" class="row g-3">
<?php
if (isset($msg) && !empty($msg)) {
    if($msg == 1) {
?>
<p style="background-color:chartreuse; border: 2px dashed green;padding: 15px; text-align: center;">success🤩😍🥰</p>

<?php
    } else {

        print $msg;
    }
}

?>
    <h2 >Change password</h2>
   
       
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Old Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="oldpassword">
        </div>
      
       
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">New Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="newpassword">
        </div>
      
       
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Repeat New Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="cpassword">
        </div>
      




        <div class="col-12">
            <input type="submit" value="change password" class="btn btn-primary w-100" name="submit">
        </div>
       
    </form>

    <?php
    require_once("bottombar.php");
    ?>
    </body>
    </html>