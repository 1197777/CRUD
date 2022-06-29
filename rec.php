<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/from.css">
</head>
<body>
    <section class="booking">
        <h1 class="heading-title">book your trip</h1>
        <form action="recensies.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name</span>
                    <input type="text" placeholder="enter your name" name="naam">
                </div>
            </div>
            <div class="inputbox">
                <span>email</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputbox">
                <span>title</span>
                <input type="number" placeholder="enter your tite" name="title">
             </div>
             <div class="inputbox">
                <span>datum</span>
                <input type="date" placeholder="enter your address" name="datum">
            </div>
            <input type="submit" value="submit" class="btn" name="toevoegen">
        </from>
    </section>
    
</body>
</html>