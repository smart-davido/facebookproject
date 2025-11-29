<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        aside {
            max-width: 200px;
            position: fixed;
            left: 0;
        }

        .a {
            text-decoration: none;
            display: block;
            color: black;
            background-color: white;
            box-shadow: 0px 0px 2px;
            padding: 10px;
           
            margin: 30px 10px;
            border-radius: 10px 50% 50% 10px;
        }

        .a:hover {
            border: 1px solid blue;
        }
        @media screen and (max-width:1200px) {
         aside{
            display: none;
         }   
        }
    </style>
</head>

<body>

    <aside>
        <a class="a" href="index.php"> Home</a>
        <a class="a" href="editprofile.php"> edit profile</a>
        <a class="a" href="setting.php"> setting</a>
        <a class="a" href="profileimage.php"> profile image</a>
        <a class="a" href="logout.php">logout</a>
    </aside>
</body>

</html>