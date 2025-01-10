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
        padding-left: 60px;
        padding-right: 60px;
        padding-top: 40px;
        padding-bottom: 30px;
        border: rgba(83, 109, 255, 0.47) solid 2px;
    }

    h1 {
        color: black;
        position: relative;
    }
</style>

<body>
    <h1>Welcome to Mark Entry</h1>
    <form action="" method="post">
        <div class="contain">
            <table>
                <td><label for="">Select Student to Enter Marks : </label></td>
                <td><select name="opt" id="">
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "studentreg");
                        if ($con) {
                            $query = "SELECT ID from students WHERE 1";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                foreach ($row as $key => $value) {
                                    echo "<option value=$value>$value</option>";
                                }
                            }
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td><label>Enter Course Code </label></td>
                    <td><input type="text" name="course"></td>
                </tr>
                <tr>
                    <td><label for="">Enter Internal marks</label></td>
                    <td><input type="Number" name="internal" max="40"></td>
                </tr>
                <tr>
                    <td><label for="">Enter External Marks</label></td>
                    <td><input type="Number" name="external" max="60"></td>
                </tr>
                <tr>
                    <td align ="center" colspan="2"><input type="submit" name="sub"></td>
                </tr>
            </table>
        </div>
    </form>
    <?php
        session_start();

        if (isset($_SESSION["id"])) {
            if ($_SESSION["id"] == "admin") {
                if (isset($_POST['sub'])) {
                    $course = $_POST['course'];
                    $intern = $_POST['internal'];
                    $extern = $_POST['external'];
                    $id = $_POST['opt'];
            
                    $tot = $intern + $extern;
                    if ($tot > 90) {
                        $grade = 'S';
                    } elseif ($tot > 80) {
                        $grade = 'A';
                    } elseif ($tot > 70) {
                        $grade = 'B';
                    } elseif ($tot > 60) {
                        $grade = 'C';
                    } elseif ($tot > 50) {
                        $grade = 'P';
                    } else {
                        $grade = 'F';
                    }
            
            
                    $query1 = "SELECT * from marks WHERE id='$id' and course_code='$course'";
                    $result1 = mysqli_query($con, $query1);
            
                    if(mysqli_num_rows($result1) > 0){
                        $entry = "UPDATE marks SET course_code='$course', internal='$intern', external='$extern', total='$tot', grade='$grade' WHERE id='$id'";
                        $enter = mysqli_query($con, $entry);
            
                        if ($enter) {
                            echo '<h4 color="red">Mark Entry Succesfull</h4>';
                            echo "<a href='admin.php'><button>back to admin</button></a>";
                        } else {
                            echo "Failed Update: " . mysqli_error($con);
                        }
                    }
                    else 
                    {
                        $entry = "INSERT into marks (id, course_code, internal, external, total, grade) values ('$id','$course', '$intern', '$extern', '$tot', '$grade')";
                        $enter = mysqli_query($con, $entry);
                        if ($enter) {
                            echo "<h4 color='red'>Mark Entry Succesfull</h4>";
                            echo "<a href='admin.php'><button>back to admin</button></a>";
                        } else {
                            echo "Failed Update: " . mysqli_error($con);
                        }
                    }
            
                    
                }
            }
            else {
                echo "<h1>You cannot access this page.</h1>";
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