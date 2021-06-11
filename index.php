<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?lang=my">Malay</a>
                </li>
            </ul>
            </div>
        </div>
    </nav> -->

    <div class="title">
        <h1>
    <?php
        if(isset($_GET["lang"])) {
            $lang = $_GET["lang"] . ".php";
            include($lang);
            echo $message;
        }else {
            echo "Welcome to Tok Aba koko, Stay here for a while";
        }
    ?>
        </h1>
    </div>
    <div class="new-body">
        <div class="clock">
            
            <div class="hour">
                <div class="hr" id="hr"></div>
            </div>

            <div class="min">
                <div class="mn" id="mn"></div>
            </div>

            <div class="sec">
                <div class="sc" id="sc"></div>
            </div>

        </div>
    </div>
    <script>
         const deg = 6;
        const hr = document.querySelector('#hr');
        const mn = document.querySelector('#mn');
        const sc = document.querySelector('#sc');
        
        setInterval(() =>{
            
             let day = new Date();
        let hh = day.getHours() * 30;
        let mm = day.getMinutes() * deg;
        let ss = day.getSeconds() * deg;
        
        hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
        mn.style.transform = `rotateZ(${mm}deg)`;
        sc.style.transform = `rotateZ(${ss}deg)`;
            
        })
    </script>
</body>
</html>