<?php
session_start();
if (isset($_SESSION['username']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
    //var_dump($_SESSION['username']);
	header('Location: login.php');
}else {
	if (isset($_SESSION['idmachine']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['idmachine'];
		// Kiểm tra quyền của người đó có phải là admin hay không
        if ($permission != "all") {
            header('Location: login.php');
        }
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>biogas</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>





<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Farm</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin page</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        select machine
      </div>

      <!-- chon chuong -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>select machine</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="machine1.php">Máy 1 (Nam Dinh)</a>
            <a class="collapse-item" href="machine2.php">Máy 2 (Phu Tho)</a>
            <a class="collapse-item" href="machine3.php">Máy 3 (Phu Tho 2)</a>
            <a class="collapse-item" href="machine4.php">Máy 4 (Thai Nguyen)</a>
            <a class="collapse-item" href="machine5.php">Máy 5 (Thai Nguyen 2)</a>
            <a class="collapse-item" href="machine6.php">Máy 6</a>
            <a class="collapse-item" href="machine7.php">Máy 7</a>
            <a class="collapse-item" href="machine8.php">Máy 8</a>
            <a class="collapse-item" href="machine9.php">Máy 9</a>
            <a class="collapse-item" href="machine10.php">Máy 10</a>
            <a class="collapse-item" href="machine11.php">Máy 11</a>
            <a class="collapse-item" href="machine12.php">Máy 12</a>
            <a class="collapse-item" href="machine13.php">Máy 13</a>
            <a class="collapse-item" href="machine14.php">Máy 14</a>
            <a class="collapse-item" href="machine15.php">Máy 15</a>
            <a class="collapse-item" href="machine16.php">Máy 16</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->





    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">9 25, 2020</div>
                    <span class="font-weight-bold">Alerts 1</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">9 25, 2020</div>
                    <span class="font-weight-bold">Alerts 2</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="font-weight-bold">
                    <div class="text-truncate">message 1</div>
                    <div class="small text-gray-500">hieu · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="text-truncate">message 2</div>
                    <div class="small text-gray-500">hieu · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">All Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin</span>
                <img class="img-profile" src="./img/logo-bach-khoa-ha-noi.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->





        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download report</a>
          </div>
          <!-- End of Page Heading -->




          
        <!-- Content Row -->
            <!-- electrical I and U -->
            <div class="row">
              <!-- may1 (nam dinh)-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 1 (Nam Dinh)
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g01daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g01timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g01op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine1.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may2 (phu tho) -->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 2 (Phu Tho)
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g02daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g02timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g02op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>
                    <a href="machine2.php">chi tiết</a>


                  </div>
                </div>
              </div>
              <!-- may3 (phu tho 2 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 3 (Phu Tho 2)
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>
                    <a href="machine3.php">chi tiết</a>


                  </div>
                </div>
              </div>
              <!-- may4 (thai nguyen) -->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 4 (Thai Nguyen)
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g04daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g04timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g04op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>
                    <a href="machine4.php">chi tiết</a>


                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- may5 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 5 (Thai Nguyen 2)
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g05daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g05timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g05op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine5.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may6 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 6
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g06daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g06timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g06op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine6.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may7 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 7
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g07daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g07timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g07op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine7.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may8 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 8
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g08daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g08timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g08op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine8.php">chi tiết</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- may9 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 9
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g09daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g09timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g09op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine9.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may10 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 10
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g10daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g10timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g10op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine10.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may11 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 11
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g11daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g11timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g11op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine11.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may12 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 12
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g12daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g12timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g12op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine12.php">chi tiết</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- may13 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 13
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g13daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g13timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g13op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine13.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may14 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 14
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g14daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g14timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g14op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine14.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may15 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 15
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g15daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g15timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g15op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine15.php">chi tiết</a>
                  </div>
                </div>
              </div>
              <!-- may16 )-->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <h1 class="h5 mb-0 text-gray-900 align-center">May 16
                    </h1>
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g16daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g16timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g16op"></div>
                                  </td>
                                </tr>
                              </tbody>

                            </table>

                          </div>
                        </div>    
                    <a href="machine16.php">chi tiết</a>
                  </div>
                </div>
              </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->





  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!--script src="vendor/chart.js/Chart.min.js"></script-->
  
  <!-- mqtt connector -->
  <script src="js/getData.js"></script>
  <!--script src="js/getData1.js"></script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>
  <script src="js/connectMqtt.js"></script>



</body>

</html>
