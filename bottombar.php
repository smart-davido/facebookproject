<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btm {
            display: none;
        }

        @media screen and (max-width:1200px) {
            .btm {
                padding: 5px 10px;
                position: fixed;
                display: flex;
                width: 100%;
                bottom: 0;
                justify-content: space-between;
                 background-color: rgba(16, 16, 93, 0.519);
            }

            .link {
                text-decoration: none;
                display: block;
                padding: 8px;
                color: white;
                font-size:20px;
                width: 16%;
                text-align: center;
border-radius:12px;
border:1px solid blue;
            }

            .link:hover {
                border: 1px solid white;
            }
        }

        /* @media screen and (max-width:500px) {
            .btm {}

            .a {}
        } */
    </style>
</head>

<body>

    <div class="btm">
        <a class="link" href="index.php">🏠</a>
        <a class="link" href="editprofile.php">🛠 </a>
        <a class="link" href="setting.php">⚙</a>
        <a class="link" href="profileimage.php">🧑</a>
        <a class="link" href="logout.php">⚠❌</a>
    </div>
</body>

</html>