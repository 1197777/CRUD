<?php 
session_start();
include_once('connection.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $stmt = $connect->prepare("select * from gebruikers where gebruikersnaam= :gebruikersnaam AND wachtwoord= :wachtwoord");
    $stmt->execute(['gebruikersnaam' => $username, 'wachtwoord' => $password]); 
    $data = $stmt->fetch();
    $gevondenRows = $stmt->rowCount();
    var_dump($data);
    echo ($gevondenRows);
    if ($gevondenRows) {
        $_SESSION['gebruikerID'] = $data['gebruikerID'];
        $_SESSION['user'] = $data['username'];
        if ($data['admin'] == '1') {
            $_SESSION['admin'] = true;
            header("Location: admin.php");
            exit();
        }
        header("Location: admin.php");
        exit();
    } else {
        // header("Location: login.php");
        // exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
    <div class="bg-img">
        <div class="content">
            <header>Login</header>
            <form action="#" method="post">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Gebruikernaam..." name="username">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="password" required placeholder="Wachtwoord..." name="password">
                    <span class="show">Show</span>
                </div>
                <div class="pass">
                    <a href="register.php">Wachtwoord vergeten?</a>
                </div>
                <div class="field">
                    <input type="submit" value="LOGIN" name="submit">
                </div>
                <div class="login">of log in met</div>
                <div class="link">
                    <div class="facebook">
                        <a href="https://nl-nl.facebook.com/">
                        <i class="fab fa-facebook-f"><span>Facebook</span></i>
                        </a>
                    </div>
                    <div class="instagram">
                        <a href="https://www.instagram.com/">
                        <i class="fab fa-instagram"><span>Instagram</span></i>
                        </a>
                    </div>
                </div>
                <div class="signup">Nog geen account?
                    <a href="register.php">Registreer Nu</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        const pass_field = document.querySelector('.password');
        const show_Btn = document.querySelector('.show');
        show_Btn.addEventListener('click', function(){
            if(pass_field.type === "password"){
                pass_field.type = "text";
                show_Btn.style.color = "#3498db";
                show_Btn.textContent = "HIDE";
            }else{
                pass_field.type = "password";
                show_Btn.style.color = "#222";
                show_Btn.textContent = "SHOW";
            }
        });
    </script>
</body>
</html>