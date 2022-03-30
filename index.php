<?php
 
// Inicia uma validação interna de usuário
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'joao' and $_POST['password'] == '123mudar'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Joao Castro';
         header("location: welcome.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .container{ width: 350px; padding: 20px; }
        .center-element{ text-align: center;}
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p>Favor inserir usuário e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="joao">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="123mudar">
                <span class="help-block"></span>
            </div>
            <div class="form-group center-element">
                <input type="submit" class="btn btn-success" value="Login">
            </div>
        </form>
    </div>    
</body>
</html>