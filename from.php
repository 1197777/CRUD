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
        <form action="book.php" method="post" class="book-form">
            <div class="inputbox">
                <span>ReisID</span>
                <input type="text" placeholder="enter your email" name="reisID">
            </div>
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
                <span>phone</span>
                <input type="number" placeholder="enter your phone" name="phone">
             </div>
             <div class="inputbox">
                <span>address</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputbox">
                <span>besteming</span>
                <input type="text" placeholder="enter your besteming" name="bestemming">
            </div>
            <div class="inputbox">
                <span>personen</span>
                <input type="number" placeholder="enter your personen" name="personen">
            </div>
            <div class="inputbox">
                <span>startDatum</span>
                <input type="date" placeholder="enter your startDatum" name="startDatum">
            </div>
            <div class="inputbox">
                <span>eindDatum</span>
                <input type="date" placeholder="enter your startDatum" name="eindDatum">
            </div>

            <input type="submit" value="submit" class="btn" name="toevoegen">
        </from>
    </section>
    
</body>
</html>