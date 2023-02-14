<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= (isset($pageTittle)) ? $pageTittle :'WeeChaFam Admin' ; ?></title>
        
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
         
         
        <style>
        
          *{
            list-style: none;
            text-decoration: none;
            margin: 2px;
            padding: 0.25rem;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
          } 
          .animation-name {
              animation-name: none 0.5s ease;
          }

          /* Navbar */
          .navbar {
              background-color: #c204f1;
          }
          /* Navbar search */
          .navbar-search-block {
              background-color: #f5f5f5;
              padding: 0.5rem;
              border-radius: 0.5rem;
          }

          .navbar-search-block form {
              margin-bottom: 5px;
          }

          .navbar-search-block .form-control {
              border-radius: none;
          }
          
          .navbar-search-block {
              display: inline;
          }

          .navbar-search-block .form-inline {
              display: flex;
          }

          .navbar-search-block .input-group {
              width: 100%;
          }

          /* Navbar links */
          .navbar a {
              color: silver;
              font-size: 1.5rem;
              text-decoration: dashed;
          }
          
          .wrapper .sidebar{ 
            position: relative;
            top: auto;
            left: auto;
            width: 250px;
            height: 90%;
            padding: 1px;
            transition: all 0.8s ease;
            background-color: orangered;
          }
          .wrapper .sidebar .profile
          {
          margin-bottom: 5px;
          text-align: left;
          text-decoration: wavy;
          }
          .wrapper .sidebar .profile img 
          {
            display: inline-block;
            width: 75px;
            height: 75px;
            border-radius: 75%;
            margin: 5px;
          }
          
          body.active .wrapper .sidebar
          {
                left: -225px;
          }

          body.active .wrapper .section
          {
            margin-left: 0;
            width: 100%;
          }

          /* Dark mode */
          body.light-mode {
              background-color: #212529;
              color: #fff;
              width: 200px;
          }

          /* User panel */
          .user-panel {
              background-color: #f5f5f5;
          }

          /* Sidebar search */
          .form-inline {
              margin-bottom: 1rem;
          }

          .form-inline .form-control {
              border-radius: 0.5rem;
          }

          /* Sidebar menu */
          .nav-pills .nav-link {
              color: orange;
          }
        
          .wrapper.container
          {
            display: inline-block;
          }

          .wrapper .sidebar ul li a{
          display: inline-block;
          padding: 5px ;
          border-bottom: 5px solid #10558d;
          color: rgb(241, 237, 237);
          font-size: 16px;
          position: relative;
          }

          .wrapper .sidebar ul li a .icon{
          color: #dee4ec;
          width: 300px;
          display: inline-block;
          }
          .wrapper .sidebar ul li a:hover,
          .wrapper .sidebar ul li a.active{
          color: #0c7db1;

          background:white;
          border-right: 2px solid rgb(5, 68, 104);
          }

          .wrapper .sidebar ul li a:hover .icon,
          .wrapper .sidebar ul li a.active .icon{
              color: #0c7db1;
          }

          .wrapper .sidebar ul li a:hover:before,
          .wrapper .sidebar ul li a.active:before
          {
          display: flex;
          }
          .content {
          min-height: 250px;
          padding: 15px;
          margin-right: auto;
          margin-left: auto;
          padding-left: 5px;
          padding-right: 5px;
          display: block;
          text-decoration: wavy;
         
          }

          .input-group 
          {
            width: 60%;
            margin: 5px 2.5px 1.25px;
            display: flex;
            align-items: center;
            justify-content: center;
          }

          .form-control 
          {
            border-radius: 25px 75px;
            padding: 12px 48px;
            font-size: 20px;
            box-shadow: none;
            border: 2px strong gold;
            color: gold;
            transition: all 0.2s ease-in-out;
            width: 100%;
            text-align: center;
          }

          .form-control:focus

          {
            outline: auto;
            box-shadow: 0 0 10px gold;
            border-color: gold;
          }

          @media (max-width: 767px) 

          {
            .input-group 
            {
              width: 80%;
            }
          }

          section 
          {
          display: inline-block;
          }
          /* Set a modern and clean font for the body text */
          body {
              font-family: 'Open Sans', sans-serif;
          }

          /* Add spacing between elements to create a more visually pleasing layout */
          h1, h2, h3 {
              padding-top: 0.5rem;
              padding-bottom: 0.5rem;
          }
          p {
              margin-bottom: 0.5rem;
          }

          /* Use a color scheme that is pleasing to the eye and easy on the eyes */
          body {
              background-color: grey;
              color: #333;
          }

          /* Add some hover effects and animations to buttons and links */
          a, button {
              transition: all 0.2s ease;
          }
          a:hover, button:hover {
              color: #c204f1;
          }

          /* Use images and icons that are relevant to the content of the page */
          img {
              max-width: 100%;
              height: auto;
          }

          /* Use responsive design techniques */
          @media (max-width: 768px) {
              /* Make adjustments for small screens */
          }

          /* Use CSS frameworks like Bootstrap or Foundation */
          @import url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

          /* Use CSS variables to help you keep the code clean and maintainable */
          :root {
              --primary-color: #c204f1;
              --secondary-color: #333;
          }
          .back-video{
            position: absolute;
            z-index: -1;
          }

          

        </style>


  </head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!--Top menu -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark align-items-right">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="text-align: center; display: inline-flex;">

        <li class="nav-item d-none d-sm-inline-block">
          <a href="Wee" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item" style="text-align: center; display: inline-flex;">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>

              </div>

            </form>

          </div>

        </li>

      </ul>
    
    </nav>
        
    <!-- /.navbar -->
  <div class="container">

    <!-- Main Sidebar Container -->

    <div class="main-sidebar sidebar-dark-primary elevation-4">


      <!-- Sidebar -->
        <div class="sidebar">

          <div class="profile">
          
            <img src="Won/Bak.jpg" class="img-circle elevation-2" alt="profile_picture">
            <h3>Ted Chachs</h3>
                <p>Team Lead</p>
            
        
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->

          <div>
              <ul>
                <li  class="nav-item menu-open">
                    <a href="Homedash">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li  class="nav-item menu-open">
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li  class="nav-item menu-open">
                    <a href="homedash/show">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">WeeChaFam Data</span>
                    </a>
                </li>
                

              </ul>

          </div>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </div>

      
    </div>

          <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">WeeChaFam Data Section</h1>

            <video autoplay loop muted plays-inline class="back-video">

              <source src="won/vin20.mp4" type="video/mp4"></source>

            </video>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </div>

    <!-- /.content-header --> 

          <!-- Main content -->
        
            <div class="content">
              <div class="container-fluid">

                <p>I am progressing well</p>
                
                <?=$this->rendersection('content'); ?>

              </div><!-- /.container-fluid -->

            </div>
           
          <!-- Main content -->

        </div>

   
      
    </section>

   
  </div>
      

  <!-- Main Footer -->
    <footer class="main-footer" style="background-color: lightblue; color: #081a03;">
        <strong>Copyright &copy; 2022-2023 <a href="<?= base_url()?>">WeechaFam.com</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0.0
        </div>
    </footer>
    
  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src=".public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="public/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="pubic/plugins/raphael/raphael.min.js"></script>
<script src="public/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="public/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/dist/js/pages/dashboard2.js"></script>
</body>
</html>
