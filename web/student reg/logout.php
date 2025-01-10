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
    session_destroy();

    header("Location: login.php");
    ?>


</body>

</html>