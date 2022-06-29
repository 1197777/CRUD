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
            <header>Registreer</header>
            <form id="form" action="#" method="post">
                <div class="field2">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Gebruikernaam..." name="username">
                </div>
                <div class="field2">
                    <span class="fa fa-envelope"></span>
                <input type="text" required placeholder="Email..." name="el" id="email" onkeydown="validation()">
                <span id="text"></span>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="password" required placeholder="Wachtwoord..." name="password">
                    <span class="show">Show</span>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="password" required placeholder="Wachtwoord herhalen..." name="password">
                    <span class="show">Show</span>
                </div>
                <div class="field2">
                    <a href="login.php">
                    <input type="submit" value="Registreer" name="submit">
                    </a>
                </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validation()
        {
            var form = document.getElementById("form");
            var email = document.getElementById("email").value
            ;
            var text = document.getElementById("text");
            var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (email.match(pattern))
            {
                form.classList.add("valid");
                form.classList.remove("invalid");
                text.innerHTML = "Your Email Adress Is Valid";
                text.style.color = "#00ff00";
            }
            else
            {
                form.classList.remove("valid");
                form.classList.add("invalid");
                text.innerHTML = "Please Enter Valid Email Adress";
                text.style.color = "#B90000;"
                
            }
            if (email =="")
            {
                form.classList.remove("valid");
                form.classList.remove("invalid");
                text.innerHTML = "";
                text.style.color = "#B90000";
            }
        }
        </script>
    <script>
        const pass_field = document.querySelector('.password');
        const show_Btn = document.querySelector('.show');
        show_Btn.addEventListener('click', function(){
            if(pass_field.type === "password"){
                pass_field.type = "text";
                show_Btn.style.color = "#222";
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