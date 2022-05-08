<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Admin Page </title>
    <link rel="stylesheet"href="css/style3.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>
<body>
<input type="checkbox" id="nav-toggle">

<div class="sidebar">
    <div class="sidebar-brand">
        <h2> <span class="lab la-accusoft"> </span> <span>Admin</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li style="color: white;">

                <a href="adminx.php" class="active"><span class="las la-shopping-bag">Add Film</span></a>

            </li>
            <li>

                <a href="d1.php"><span class="las la-shopping-bag"> Films</span></a>

            </li>

            <li>

                <a href="chart.php"><span class="las la-chart-line">Charts</span></a>

            </li>
            <li>

                <a href="f.php" onclick="w()"><span class="las la-igloo">LogOut</span></a>

            </li>
        </ul>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

    function w(){
        Swal.fire(
            'logged out Succsesfully!',
            'Good Job !!',
            'success'
        );

    };
</script>

<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Admin Page
        </h2>
        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="search here ">
        </div>
        <div class="user-wrapper">
            <img src="image/k3.jpg" width="40px" height="40px" alt="">
            <div>
                <h4> Suzan Samer</h4>
                <small> Super Admin</small>
            </div>
        </div>
    </header>
<div class="grid_10">
    <div class="box round first">

        <div class="block" style="padding-top: 40px;padding-left: 40px;font-size: 20px">

            <form  name="form1" action="" method="post" enctype="multipart/form-data">
                <table border="0">
                    <tr>
                        <td style="padding-right: 30px;color: darkred;font-family: 'Segoe Print'">Film Name</td>
                        <td><input type="text" name="pnm"></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 30px;color: darkred;font-family: 'Segoe Print'">Film Id</td>
                        <td><input type="text" name="pprice"></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 30px;color: darkred;font-family: 'Segoe Print'"> Film release year</td>
                        <td><input type="text" name="pqty"></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 30px;color: darkred;font-family: 'Segoe Print'" >Film Image</td>
                        <td><input type="file" name="pimage"></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 30px;color: darkred;font-family: 'Segoe Print'">Film Categoty</td>
                        <td>
                            <select name="pcategory">
                                <option value="action">action</option>
                                <option value="comic">comic</option>
                                <option value="romantic">romantic</option>
                                <option value="documentary">documentary</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-right: 30px;color: darkred;font-family: 'Segoe Print'">Film Description</td>
                        <td>
                            <textarea cols="15" rows="10" name="pdesc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td  colspan="2" align="center"><input style="background-color: darkred;color: white;font-size: 20px;font-family: 'Segoe Print';width: 90%;" type="submit" name="submit1" value="upload"></td>
                    </tr>


                </table>


            </form>

            <?php
            if(isset($_POST["submit1"]))
            {
                $v1=rand(1111,9999);
                $v2=rand(1111,9999);

                $v3=$v1.$v2;

                $v3=md5($v3);


                $fnm=$_FILES["pimage"]["name"];
                $dst="./product_image/".$v3.$fnm;
                $dst1="product_image/".$v3.$fnm;
                move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
                mysqli_query($link,"insert into administorx values('','$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]')");


            }

            ?>


        </div>
    </div>
