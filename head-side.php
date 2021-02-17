<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Angu</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet"/>


  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!--Main Navigation-->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0">Code Learning Application</a>
          </div>
        </li>
        <!-- Logo -->

        <!--Search Form-->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>
        <!--Search Form-->
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i> Forms<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../forms/basic.html" class="waves-effect">Basic</a>
                  </li>
                  <li><a href="../forms/extended.html" class="waves-effect">Extended</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Tables<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../tables/basic.html" class="waves-effect">Basic</a>
                  </li>
                  <li><a href="../tables/extended.html" class="waves-effect">Extended</a>
                  </li>
                  <li><a href="../tables/datatables.html" class="waves-effect">DataTables.net</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-map"></i> Maps<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../maps/google.html" class="waves-effect">Google Maps</a>
                  </li>
                  <li><a href="../maps/full.html" class="waves-effect">Full screen map</a>
                  </li>
                  <li><a href="../maps/vector.html" class="waves-effect">Vector world map</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Simple link -->
            <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
                Alerts</a></li>

            <li><a href="../modals/modals.html" class="collapsible-header waves-effect"><i class=" fas fa-bolt"></i>
                Modals</a></li>

            <li><a href="../charts/charts.html" class="collapsible-header waves-effect"><i class=" fas fa-chart-pie"></i>
                Charts</a></li>

            <li><a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class=" far fa-calendar-check"></i>
                Calendar</a></li>

            <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
                Sections</a></li>

          </ul>
        </li>
        <!-- Side navigation links -->
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <p>Code Learning Application</p>
      </div>

      <!--Navbar links-->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
          <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="badge red">3</span> <i class="fas fa-bell"></i>
            <span class="d-none d-md-inline-block">Notifications</span>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">
              <i class="fas fa-money mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 13 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-money mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 33 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-line-chart mr-2" aria-hidden="true"></i>
              <span>Your campaign is about to end</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 53 min</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Log Out</a>
            <a class="dropdown-item" href="#">My account</a>
          </div>
        </li>

      </ul>
      <!--/Navbar links-->
    </nav>
    <!--Navbar -->

  </header>
  <!--Main Navigation-->
  <!-- Main layout -->
  <main>
    <div class="container-fluid">
