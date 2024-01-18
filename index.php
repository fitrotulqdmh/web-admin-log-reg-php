<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleL.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Login</title>
</head>

<body>
    <div class="input">
        <h1>LOGIN</h1>
        <form action="login.php" method="POST" onsubmit="return validasi()">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="password" name="password">
            </div>
            <button type="submit" name="login" class="btn-input">Login</button>
            <div class="bottom">
                <p>Belum punya akun?
                    <a href="register.html">Register disini</a>
                </p>
            </div>
        </form>
    </div>

<script type="text/javascript">
    function validasi(){
        var username=document.getElementById("username").value;
        var username=password.getElementById("password").value;

        if(username!=""&&password!=""){
            return true;
        }else {
            alert('Tolong diisi kolom yang kosong');
            return false;
        }
    }
</script>
</body>

</html>