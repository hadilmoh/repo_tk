<!DOCTYPE html>
<html lang="en"> <!-- dir="rtl" -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- start css files -->
            <!-- botstrap link -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
            <!-- datatable link -->
        <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
               <!-- this link i get it from youtube video to put icon -->
        <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
            <!-- rendear allelement normaly -->
        <link rel="stylesheet" href="css/normalize.css">
            <!-- font Awesome Library -->
        <link rel="stylesheet" href="css/all.min.css">
            <!-- master file -->
        <link rel="stylesheet" href="css/master.css">
        <!-- end css files -->
        <!-- google fonts  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Work+Sans:wght@200;400;600;700&display=swap" rel="stylesheet">
        <!-- end google fonts  -->
    </head>
    <body>

        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Goal of Ticket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <!-- start body of modal -->
                
                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">How many tickets do you want to access?</label>
                    <input type="number" name="g_id" class="form-control" />
                </div>
                <!-- end body of modal -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>

        <div class="page">
            <!--sidebar for all pages-->
            <div class="sidebar">
                <div class="logo-company">
                    <img src="image//dea0f3b7f480b1151c08db4a402a43b9.jpg" alt="">
                    <h3>Company</h3>
                </div>
                <ul>
                    <li>
                        <a class="actives op-nav" href="dashboard.php">
                            <i class="fa-solid fa-chart-simple"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="op-nav" href="">
                            <i class="fa-solid fa-clipboard-list"></i>
                            <span>Tickets</span>
                        </a>
                    </li>
                    <li>
                        <a class="op-nav" href="support.php">
                            <i class="fa-solid fa-headset"></i>
                            <span>Support Requests</span>
                        </a>
                    </li>
                    <li>
                        <a class="op-nav" href="departments.html">
                            <i class="fa-solid fa-building"></i>
                            <span>Departments</span>
                        </a>
                    </li>
                    <li>
                        <a class="op-nav" href="">
                            <i class="fa-solid fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="op-nav" href="">
                            <i class="fa-solid fa-user-tie"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a class="op-nav" href="">
                            <i class="fa-solid fa-file-signature"></i>
                            <span>Report</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="op-nav" href="group.php">
                            <i class="fa-solid fa-user-lock"></i>
                            <span>Group</span>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a class="op-nav" href="setting.html">
                            <i class="fa-solid fa-gear"></i>
                            <span>Settings</span>
                        </a>
                    </li> -->
                    <li>
                        <div class="op-nav menu-coll">
                            <i class="fa-solid fa-gear"></i>
                            <span>Settings</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="#" class="collapse__sublink">Account</a>
                                <a href="#" class="collapse__sublink">Language</a>
                                <a href="#" class="collapse__sublink">Chanels</a>
                                <a href="#" class="collapse__sublink">Job Title</a>
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <a class="last op-nav" href="index.html">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <!-- start head -->
                <div class="head">
                    <button>+ New</button>
                    <div class="icons">
                        <span class="notific">
                            <i class="fa-regular fa-bell"></i>
                        </span>
                        <img src="image/person.png" alt="">
                    </div>
                </div>
                <!-- end head -->

                <!-- start container -->
                <div class="dashboard-page cont">
                    <!-- first row -->
                    <div class="row-dash">
                        <div class="side-one">
                            <div class="small-box box-dash">
                                <div class="icon-small-box">
                                    <i class="fa-solid fa-ticket"></i>
                                </div>
                                <div class="text-small-box">
                                    <h3>200</h3>
                                    <p>Total Tickets</p>
                                </div>
                            </div>
                            <div class="small-box box-dash">
                                <div class="icon-small-box">
                                    <i class="fa-solid fa-calendar-check"></i>
                                </div>
                                <div class="text-small-box">
                                    <h3>40</h3>
                                    <p>Solved Tickets</p>
                                </div>
                            </div>
                            <div class="small-box box-dash">
                                <div class="icon-small-box">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="text-small-box">
                                    <h3>130</h3>
                                    <p>Total clinets</p>
                                </div>
                            </div>
                            <div class="small-box box-dash">
                                <div class="icon-small-box">
                                    <i class="fa-solid fa-ticket-simple"></i>
                                </div>
                                <div class="text-small-box">
                                    <h3>130</h3>
                                    <p>Today's Tickets</p>
                                </div>
                            </div>
                        </div>

                        <div class="side-two box-dash">
                            <div class="head-box">
                                <h3>Goals</h3>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    ADD
                                </button>
                            </div>
                            <div class="circle-prog">
                                <div class="prograss-bar">
                                <div class="circular-progress">
                                    <div class="value-container">0%</div>
                                        <span id="value-of-percent" class="d_none">40</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- second row -->
                    <div class="row-dash">
                        <div class="side-one side-one-row-two box-dash">
                            <div class="head-box">
                                <h3>Recently Tickets</h3>
                                <button>View</button>
                            </div>
                                                       
                            <div class="table">
                                <table id="datatableid" class="table" style="width:100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Assigned to</th> 
                                        </tr>
                                    </thead>
                                    <tbody>                              
                                        <tr class="text-center">
                                            <td>h</td>
                                            <td>h</td>
                                            <td>h</td>     
                                        </tr>
                                        <tr class="text-center">
                                            <td>h</td>
                                            <td>h</td>
                                            <td>h</td>     
                                        </tr>
                                        <tr class="text-center">
                                            <td>h</td>
                                            <td>h</td>
                                            <td>h</td>     
                                        </tr>
                                    </tbody>
                                </table>
                            </div>        
                       
                        </div>
                        <div class="side-two box-dash">
                            <h3 style="margin-bottom: 20px;">Active</h3>
                            <!-- user  -->
                            <div class="user-active">
                                <div class="img-user">
                                    <img src="image/default-user-image.png" alt="">
                                </div>
                                <div class="text">
                                    <h4>User Name</h4>
                                    <p>Active Now</p>
                                </div>
                            </div>
                            <!-- user  -->
                            <div class="user-active">
                                <div class="img-user">
                                    <img src="image/default-user-image.png" alt="">
                                </div>
                                <div class="text">
                                    <h4>User Name</h4>
                                    <p>Active Now</p>
                                </div>
                            </div>
                            <!-- user  -->
                            <div class="user-active">
                                <div class="img-user">
                                    <img src="image/default-user-image.png" alt="">
                                </div>
                                <div class="text">
                                    <h4>User Name</h4>
                                    <p>Active Now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- end container -->
            </div>
        </div>

       
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>

        <script type="text/javascript">
            $(function() {
                $('.chart').easyPieChart({
                size: 160,
                barColor: "#4d4dff",
                scaleLength: 0,
                lineWidth: 15,
                trackColor: "#525151",
                lineCap: "circle",
                animate: 2000,
                });
            });
        </script> -->

        <!--start links for form  -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <!--end links for form  -->

        <!-- datatable link "last block to run" -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <!-- <script>
            $(document).ready(function () {
                $('#datatableid').DataTable();
            }); 
        </script> -->
        
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="js/main.js"></script>

        
    </body>
</html>