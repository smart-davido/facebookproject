<?php
require_once("controller/controller.php");
$call->checkUserLoggedIn();

if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
   $file = $_FILES["file"];
//    print_r($file);
   $fileName =  $file["name"];
   $fileType = $file["type"];
    $fileTmpLocation = $file["tmp_name"];
   $fileError = $file["error"];
  $fileSize = $file["size"];

  $fileNameExploded= explode(".", $fileName);
  $fileActualExtension = strtolower(end($fileNameExploded));
$fileExtAllowed = ["jpg","jpeg","png"];

if (in_array($fileActualExtension,$fileExtAllowed)) {
   if ($fileSize < 500000) {
    if ($fileError == 0) {
      $destination = 'upload/'.$fileName;
if (move_uploaded_file( $fileTmpLocation,$destination)) {
   $msg = $call->changeProfileImage($fileName);
} else {
    $msg = "image upload failed 🥺";
}


    } else {
        $msg = "there was an error uploading this file 😫";
    }
   } else {
    $msg = "file is too big 🙄";
   }
} else {
    $msg = "file formart not allowed😡";
}

}

if(isset($_POST['del'])){
$call->deleteProfileImage('userAvater.jpg');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rom {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 1px dashed black;
            box-shadow: 2px 2px 8px black;
            background-image: url("upload/<?php $call->getUserData('profileimage') ? print $call->getUserData('profileimage') : print 'userAvater.jpg' ?>");
            background-size: cover;

            display: flex;
            justify-content: center;
            align-items: center;
            margin-left:200px;
        }

        .main {
            opacity: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .all {
            display: block;
        }

        .sub {
            position: absolute;
            top: 220px;
        }
        .dpi{
            position: absolute;
            top:270px;
            left:240px;
        }
    </style>
</head>
<body>
    <?php
    require_once("sidebar.php");
    ?>
    <form action="" class="rom"  method="post" enctype="multipart/form-data"  >
        <?php 
if (isset($msg) && !empty($msg)) {
   if ($msg  == 1) {
    ?>
<!-- <p style="border:solid green 2px;
 border-radius:12px ;padding: 10px;
 text-align: center; background:rgba(0, 255, 0, 0.27)
  ">successful !!! 😍🥰💪👍👌</p> -->


<?php
   } else {
    print $msg;
   }
}

?>
         <div></div>
    <input type="file" class="main all" name="file">
    <input type="submit" class="sub all" 
    style="background-color:rgba(0, 255, 13, 0.18);
     border:2px green solid;
     padding:10px;
     border-radius:12px;
     "
    value="change" name="submit">

    </form>
<form action="" class="dpi" method="post">
    <input type="submit" name="del"
     value="delete profile image"
     style="background-color:rgba(255, 0, 0, 0.18);
     border:2px red solid;
     padding:10px;
     border-radius:12px;
     color:red;
     "
     >
</form>


    <?php
    require_once("bottombar.php");
    ?>
</body>
</html>