<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="register_script.php" method="POST">
    <div class="form-group">
        <input type="text"  class="form-control" placeholder="Name" name="name"  required>
    </div>
    <div class="form-group">
        <input type="email"  class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
        <?php
        if(isset($_GET["m1"])){
            echo $_GET['m1'];
        }
        ?>
    </div>
    <div class="form-group">
        <input type="password"  class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
    </div>
    <div class="form-group">
        <input type="tel"  class="form-control" placeholder="Contact" name="contact" maxlength="10" size="10" required>
        <?php
        if(isset($_GET["m2"])){
            echo $_GET['m2'];
        }
        ?>
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" placeholder="City" name="city">
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" placeholder="Address" name="address">
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
</body>
</html>