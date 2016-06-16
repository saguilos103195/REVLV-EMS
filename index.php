<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="loginbg">
    <div class="wrapper">
        <div class="clearfix overlay orbitron center">

            <form action="index.php" method="POST">
                <h1 class="title">REVLV-EMS</h1>
                <div class="invalid">
                <?php
                    if($_POST['password'] == 1)
                    {
                        echo "<p>Account does not Exist</p>";
                    }
                ?>
                </div>
                <p><input class="type-interface orbitron" type="text" name="username" placeholder="username"></p>
                <p><input class="type-interface orbitron" type="password" name="password" placeholder="password"></p>
                <p><button class="btn-interface orbitron" type="submit">ENTER</button></p>
            </form>

        </div>
    </div>
</div>

</body>
</html>