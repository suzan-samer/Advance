<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'shop';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$NoProduct = '';
$enter="";
$type='';
if(isset($_POST['submit'])){
    $enter=$_POST['month'];
}

if($enter=='January') {
    $sql = "SELECT * FROM jan";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $NoProduct = $NoProduct . '"' . $row['NoProduct'] . '",';

    }
    $NoProduct = trim($NoProduct, ",");
    $type='line';
}
if($enter=='February') {
    $sql = "SELECT * FROM feb";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $NoProduct = $NoProduct . '"' . $row['NoProduct'] . '",';

    }
    $NoProduct = trim($NoProduct, ",");
    $type='pie';
}
if($enter=='March') {
    $sql = "SELECT * FROM march";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $NoProduct = $NoProduct . '"' . $row['NoProduct'] . '",';

    }
    $NoProduct = trim($NoProduct, ",");
    $type='doughnut';
}
if($enter=='April') {
    $sql = "SELECT * FROM april";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $NoProduct = $NoProduct . '"' . $row['NoProduct'] . '",';

    }
    $NoProduct = trim($NoProduct, ",");
    $type='bar';
}
if($enter=='May') {
    $sql = "SELECT * FROM may";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $NoProduct = $NoProduct . '"' . $row['NoProduct'] . '",';

    }
    $NoProduct = trim($NoProduct, ",");
    $type='pie';
}


?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="p.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <title>Rose Boutique</title>
    <link rel="stylesheet"href="css/style3.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
        body{
            font-family: Arial;


            color: #d91616;

            background: white;
        }

        .container {
            color: #E8E9EB;
            background: black;
            border: rgb(156, 10, 10) 7px solid;
        }
        input[type=text], select {
            width: 60%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style the submit button */
        button[type=submit] {
            width: 30%;
            background-color: white;
            color: rgb(156, 10, 10);
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Add a background color to the submit button on mouse-over */
        button[type=submit]:hover {
            background-color: black;
            color: white;
        }
    </style>

</head>

<body>

<div class="full-page">
    <div class='headernav'>
        <nav class="navbar navbar-expand-lg navbar-light">

        </nav>
    </div>

<h1 style="font-family: cursive;color: #fe4c50;margin-left: 300px;color: #FFFFFF">  Percentages of watching movies  </h1>
<br>
<br>
<div class="main-content"style="width: 80%;padding-left: 0;margin-left: 150px; margin-top: 50px">
    <section>
        <form action="chart.php" method="post" style="width:100%" >
            <div class="container">
                <h3 style="font-family: cursive;font-weight: bolder">Select the month to show the percentage   :</h3>
                <input type="text" id="month" name="month" >
                <button type="submit" name="submit"  >submit</button>
            </div>
        </form>
    </section>
    <div class="container">

        <canvas id="chart" style="width: 100%; height: 65vh; background: white; border: 1px solid #555652; margin-top: 10px;"></canvas>

        <script>
            var ctx = document.getElementById("chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: '<?php echo "$type"?>',
                data: {
                    labels: ['Action Movies' ,  'Romance Movies' , 'Horor Movies' , 'Comedy Movies' , 'Horor Movies' ],
                    datasets:
                        [{
                            label: 'Percentages of watching movies during the months  ',
                            data: [<?php echo $NoProduct; ?>],
                            backgroundColor:
                                ['rgb(156, 10, 10)',
                                    'rgb(156, 10, 10)',
                                    'rgb(128,27,27)',
                                    'rgb(76,16,16)',
                                    'rgb(50,9,9)',

                                ],

                            borderColor:'rgb(245,239,239)',
                            borderWidth: 3
                        },

                        ]
                },

                options: {
                    scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                    tooltips:{mode: 'index'},
                    legend:{display: true, position: 'top', labels: {fontColor: 'rgb(156, 10, 10)', fontSize: 16}}
                }
            });
        </script>
    </div>

</body>
</html>

