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
            <div><h4>Ezaz Ahmed <br> Student</h4></div>
            <div><a href="#"><img src="icons8-kuroo-48.png" alt=""></a></div>         
        </div>

        <ul>
        <li class="list">
            <a href="S_Dashboard.php">
            <span class="icon">
                <i class="fa-solid fa-chart-pie fa-xl"></i>
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
        <li class="list active">
            <a href="#">
            <span class="icon">
                <i class="fa-solid fa-chart-line fa-beat-fade fa-xl"></i>
            </span>
            <span class="title">GRADE WISE CO ANALYSIS</span>
            </a>
        </li>
        <li class="list">
            <a href="index.php">
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
        <div style="background-color: rgb(75, 192, 192); margin-right: 10px; text-align: center;">
            <h2>STUDENT PERFORMANCE MONITORING SYSTEM</h2>           
        </div>
        <h1>GRADE WISE CO ANALYSIS</h1>
        <div>
            <canvas id="myChart" width="1200" height="400"></canvas>
        </div>
        <script>
            const ctx = document.getElementById('myChart').getContext('2d');
           

            new Chart(ctx, {
                type: 'bar',
                data: {


                    labels: ['C01','C02','C03','C04'],
                    datasets: [{
                        label: ['Course_1'] ,
                        data: ['44','20','70','50'],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            // 'rgba(255, 159, 64, 0.6)',
                            // 'rgba(255, 205, 86, 0.6)',
                            // 'rgba(75, 192, 192, 0.6)',
                            // // 'rgba(54, 162, 235, 0.6)',
                            // // 'rgba(153, 102, 255, 0.6)',
                            // // 'rgba(201, 203, 207, 0.6)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            // 'rgb(255, 159, 64)',
                            // 'rgb(255, 205, 86)',
                            // 'rgb(75, 192, 192)',
                            // 'rgb(54, 162, 235)',
                            // 'rgb(153, 102, 255)',
                            // 'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: ['Course_2'] ,
                        data: ['20','35','50','60'],
                        backgroundColor: [
                           
                            'rgba(75, 192, 192, 0.6)'
                            
                        ],
                        borderColor: [
                            
                            
                            'rgb(75, 192, 192)'
                            
                        ],
                        borderWidth: 1
                    },
                    {
                        label: ['Course_3'] ,
                        data: ['35','45','10','80'],
                        backgroundColor: [
                           
                           
                            'rgba(54, 162, 235, 0.6)'
                            
                        ],
                        borderColor: [
                            
                             
                            'rgb(54, 162, 235)',
                            
                        ],
                        borderWidth: 1
                    },
                    {
                        label: ['Course_4'] ,
                        data: ['55','45','50','60'],
                        backgroundColor: [
                           
                            
                             'rgba(153, 102, 255, 0.6)'
                            
                        ],
                        borderColor: [
                            
                            
                             'rgb(153, 102, 255)'
                            
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    legend: {


                    },
                    scales: {
                        x: {
                            stacked :true
                        },
                        y: {
                            stacked:true,
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        
    </div>

    <script src="main.js" ></script>
</body>
</html>