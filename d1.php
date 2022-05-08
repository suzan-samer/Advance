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

                <a href="d1.php" class="active"><span class="las la-shopping-bag"> Films</span></a>

            </li>
            <li>

                <a href="adminx.php" ><span class="las la-shopping-bag"> Add Films</span></a>

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
    <main>

        <div class="recent-grid" style="grid-template-columns: 100% auto;margin-top: 0;padding-top: 0;">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3> Recent Products</h3>
                    <a href="adminx.php">    <button > Add Product  <span class="las la-arrow-right"></span></button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                <tr>
                                    <td>
                                       Film Name
                                    </td>

                                    <td>
                                        Film Id
                                    </td>

                                    <td>
                                        Film Image
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> Bridget Jones's Diary</td>
                                    <td> 1</td>

                                    <td> <img src="image/91.jpg" height="80px"width="70px" style="border-radius: 20%;text-align: center"></td>
                                </tr>
                                <tr>
                                    <td> Someone Great</td>
                                    <td> 2</td>

                                    <td> <img src="image/92.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>


                                <tr>
                                    <td> A Star Is Born</td>
                                    <td> 3</td>

                                    <td> <img src="image/93.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td>  The Half of ItPEACHY</td>
                                    <td> 4</td>

                                    <td> <img src="image/94.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td> Sylvie's Love</td>
                                    <td> 5</td>

                                    <td> <img src="image/1.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td> Pride and Prejudice 2005</td>
                                    <td> 6</td>

                                    <td> <img src="image/96.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>
                                <tr>
                                    <td> Say Anything</td>
                                    <td> 7</td>

                                    <td> <img src="image/97.jpg" height="80px"width="70px" style="border-radius: 20%"></td>

                                </tr>


                                <tr>
                                    <td> KuzGun</td>
                                    <td> 8</td>

                                    <td> <img src="image/kk.png" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td>  Sleepless in Seattle</td>
                                    <td> 9</td>

                                    <td> <img src="image/122.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td> Love Actually</td>
                                    <td> 10</td>

                                    <td> <img src="image/lash1.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td> The Patman</td>
                                    <td> 11</td>

                                    <td> <img src="image/ba.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td>No Time to Die</td>
                                    <td> 12</td>

                                    <td> <img src="image/no.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td> The Suicide Squad</td>
                                    <td> 13</td>

                                    <td> <img src="image/se.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>

                                <tr>
                                    <td> Kill Bill: Volume 1</td>
                                    <td> 14</td>

                                    <td> <img src="image/ki1.jpg" height="80px"width="70px" style="border-radius: 20%"></td>
                                </tr>







                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

</body>
</html>

