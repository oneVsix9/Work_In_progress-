<?php
include 'connect.php';


// $plo = mysqli_query($conn, $sql);
// $nums=mysqli_num_rows($query);


// $sql="SELECT* from student_t";

// $query = mysqli_query($conn,$sql);
// // $nums=mysqli_num_rows($query);
// while ($res=mysqli_fetch_assoc($query)){
//   echo $res['studentID']."<br>";
// }
// // $fet=mysqli_fetch_assoc($query);
// // echo $fet[1];


//
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/41c61c6dc3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <nav class="navigation1">
        <div class="content2 flex-con">
            <div>
                <h4>Ezaz Ahmed <br> Student</h4>
            </div>
            <div><a href="#"><img src="icons8-kuroo-48.png" alt=""></a></div>
        </div>

        <ul>
            <li class="list active">
                <a href="#">
                    <span class="icon">
                        <i class="fa-solid fa-chart-pie fa-beat-fade fa-xl"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="list">
                <a href="OVERALL_PLO_ANALYSIS.php">
                    <span class="icon">
                        <i class="fa-brands fa-react fa-xl"></i>
                    </span>
                    <span class="title">OVERALL PLO ANALYSIS</span>
                </a>
            </li>
            <li class="list">
                <a href="S_COURSE_WISE_PLO_ANALYSIS.php">
                    <span class="icon">
                        <i class="fa-solid fa-thumbtack fa-xl"></i>
                    </span>
                    <span class="title">COURSE WISE PLO ANALYSIS</span>
                </a>
            </li>
            <li class="list">
                <a href="S_PLO_ACHIEVEMENT_TABLE.php">
                    <span class="icon">
                        <i class="fa-solid fa-bell fa-xl"></i>
                    </span>
                    <span class="title">PLO ACHIEVEMENT TABLE</span>
                </a>
            </li>
            <li class="list">
                <a href="S_GRADE_WISE_CO_ANALYSIS.php">
                    <span class="icon">
                        <i class="fa-solid fa-chart-line fa-xl"></i>
                    </span>
                    <span class="title">GRADE WISE CO ANALYSIS</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <i class="fa-solid fa-person-running fa-xl"></i>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="check">
        <input type="checkbox" name="check" id="check" class="checkbox1">
        <label for="check"><i class="fa-solid fa-gear fa-spin fa-2xl"></i></label>
    </div>

    <div class="content1">
        <div style="background-color: #4187f6; margin-right: 10px; text-align: center;">
            <h2>STUDENT PERFORMANCE MONITORING SYSTEM</h2>
        </div>
        

    </div>

    <script src="main.js"></script>
    

</body>

</html>