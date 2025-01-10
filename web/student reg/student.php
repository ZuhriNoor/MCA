<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: white;
        color: black;
        width: 98%;
        height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .contain {
        background-color: rgba(255, 255, 255, 0.47);
        padding: 50px;
        border: rgba(83, 109, 255, 0.47) solid 2px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h1 {
        color: black;
        position: relative;
    }
</style>

<body>
    <?php
        session_start();
        if (isset($_SESSION["id"])){
            echo "<h1>Welcome to Students Page</h1>
                <div class='contain'>
                    <a href='streg.php'><button>click Here for registration</button></a><br><br><br>
                    <a href='markcard.php'><button>Click Here for viewing marks Card</button></a><br><br>
                    <a href='logout.php'><button>Logout</button></a>
                </div>";
        } else {
            echo "<h1>Please login to continue.</h1>
                <div class='contain'>
                    <a href='login.php'><button>Click here to login</button></a><br><br><br>
                </div>";
        }
    ?>
    
</body>

</html>