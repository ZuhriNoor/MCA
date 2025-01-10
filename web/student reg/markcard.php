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
    table{
        align-items: center;
        background-color: rgba(255, 255, 255, 0.82);
        padding: 50px;
        border-collapse: collapse;
        width: 460px;
        height: 200px;
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
        $id = $_SESSION['id'];

        $con = mysqli_connect("localhost", "root", "", "studentreg");
    
        if ($con) {
            $query = "SELECT course_code,internal, external, total, grade FROM marks WHERE id='$id'";
            $result = mysqli_query($con, $query);
    
            if (!$result) {
                echo "fetching Details Failed";
            } else {
                $row = mysqli_fetch_assoc($result);
                $course = $row["course_code"];
                $int = $row["internal"];
                $ext = $row["external"];
                $Tot = $row["total"];
                $grad = $row["grade"];
    
                echo "<center><h1>Logged in as $id</h1></center>";
                echo "<h1>Welcome to ScoreCard</h1>";
    
                echo "<table border='1px'>";
                echo "<tr>";
                echo "<td align='center' colspan='2'>Your Marks for $course</td>";
                echo "</tr>";
                echo "<tr><td align='center'>Internal marks</td><td align='center'>$int</td></tr>";
                echo "<tr><td align='center'>External marks</td><td align='center'>$ext</td></tr>";
                echo "<tr><td align='center'>Total marks</td><td align='center'>$Tot</td></tr>";
                echo "<tr><td align='center'>Grade</td><td align='center'>$grad</td></tr>";
                echo"<tr><td align='center' colspan='2'><a href='student.php'><button>Home</button></a></td></tr>";
                echo "</table>";
            }
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