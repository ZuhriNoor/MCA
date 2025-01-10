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
            echo "<h1>Please Register a Student</h1>
                    <form action='' method='post'>
                        <div class='contain'>
                            <table>
                                <tr>
                                    <td><label>Student Name</label></td>
                                    <td><input type='text' name='name'></td>
                                </tr>
                                <tr>
                                    <td><label>Student ID</label></td>
                                    <td><input type='text' name='ID'></td>
                                </tr>
                                <tr>
                                    <td><label>Password</label></td>
                                    <td><input type='password' name='pass' id='pass'></td>
                                </tr>
                                <tr><td></td><td><br></td></tr>
                                <tr>
                                    <td align='center' colspan='2'><input type='submit' name='sub'></td>
                                </tr>
                            </table>
                        </div>
                    </form>";
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


    

    <?php
    if (isset($_POST["sub"])) {
        $name = $_POST['name'];
        $Id = $_POST['ID'];
        $pass = $_POST['pass'];

        $con = mysqli_connect('localhost', 'root', '', 'studentreg');
        if (!$con) {
            echo "Connection not established";
        } else {
            $query = "INSERT INTO students(name, id, password) VALUES('$name','$Id','$pass')";
            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<h2>Student Registration Complete</h2>";
                header("Location: admin.php");
            } else {
                echo "<h4>Student Registration FAILED!</h4>";
            }
        }
        mysqli_close($con);
    }
    ?>
</body>

</html>