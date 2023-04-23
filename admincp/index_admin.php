<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admincp.css">
    <title>AdminCP</title>
</head>

<body>
    <div class="wrapper">
        <h3 class="title admin">WELCOME TO ADMIN</h3>
        <?php
        include("./config/config.php");
        include("./module/header.php");
        include("./module/menu_admin.php");
        include("./module/main_admin.php");
        include("./module/footer.php");
        ?>
    </div>
</body>

</html>