<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kotak_login"> 
         <h3 class="tulisan_login">Login</h3>    
        <form action="ceklogin.php" method="post" role="form">
           <label>Username</label>
           <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off">
           <label>Password</label>
           <input type="password" name="password" class="form_login" placeholder="Password" autocomplete="off">
           <input type="submit" class="tombol_login" value="Login">


        </form>

    </div>
</body>
</html>