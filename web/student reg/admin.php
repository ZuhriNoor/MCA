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
    if (isset($_SESSION['id'])) {
        if ($_SESSION['id'] == "admin") {
            echo "<h1>Welcome to Admin Page</h1>
        <div class='contain'>
            <a href='entry.php'><button>Click here to enter the marks</button></a><br><br><br>
            <a href='reg.php'><button>Click here to Register a Student</button></a><br><br>

            <a href='login.php'><button>Logout</button></a>
        </div>";
        }
        else {
            echo "<h1>You do not have access to this page.</h1>
            <div class='contain'>
                <a href='student.php'><button>Go to home</button></a><br><br><br>
            </div>";
        }
    }
    else {
        echo "<h1>Please login to continue.</h1>
            <div class='contain'>
                <a href='login.php'><button>Click here to login</button></a><br><br><br>
            </div>";
    }
    ?>


</body>

</html>