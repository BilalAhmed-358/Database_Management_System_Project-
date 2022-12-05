<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <title>ADmin Panel</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <!----css3---->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!--fontawesome-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />

    <!--google material icon-->
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet"
    />
  </head>

  <style>
    body {
      color: #818896;
    }

    .page-wrapper {
      height: 100vh;
    }

    #sidebar.toggled {
      transform: translateX(-260px);
    }

    /*-----------sidebar-wrapper-------*/

    .sidebar-wrapper {
      width: 260px;
      height: 100vh;
      position: fixed;
      background-color: #31353d;
      top: 0;
      left: 0;
      transition: all 0.5s ease;
      z-index: 999;
    }

    #sidebar .custom-menu {
      display: inline-block;
      position: absolute;
      top: 20px;
      right: 0;
      z-index: 222;
      margin-right: -20px;
      -webkit-transition: 0.3s;
      transition: 0.3s;
    }

    #sidebar .custom-menu .btn {
      background: 0 0;
      border-color: transparent;
    }

    #sidebar .custom-menu .btn {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      position: relative;
    }

    #sidebar .custom-menu button:focus {
      box-shadow: none;
    }

    #sidebar .custom-menu .btn:after {
      z-index: -1;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      content: "";
      transform: rotate(45deg);
      background: #31353d;
      border-radius: 10px;
    }

    #sidebar .custom-menu .btn i {
      margin-right: -40px;
      font-size: 14px;
      color: #fff;
    }

    .sidebar-content {
      max-height: calc(100% - 10px);
      height: calc(100% - 10px);
      overflow-y: auto;
      position: relative;
    }

    ::-webkit-scrollbar {
      background: transparent;
      width: 5px;
    }

    ::-webkit-scrollbar-thumb {
      background: #535965;
      border-radius: 10px;
    }

    .sidebar-wrapper .sidebar-brand > a {
      text-transform: uppercase;
      font-weight: bold;
      flex-grow: 1;
      color: #818896;
      text-decoration: none;
    }

    .sidebar-wrapper .sidebar-brand {
      padding: 10px 20px;
      display: flex;
      align-items: center;
    }

    .sidebar-wrapper .sidebar-header {
      padding: 20px;
      overflow: hidden;
      border-top: 1px solid #3a3f48;
    }

    .sidebar-wrapper .sidebar-header .user-pic {
      float: left;
      width: 60px;
      padding: 2px;
      border-radius: 12px;
      margin-right: 15px;
      overflow: hidden;
    }
    .sidebar-header .user-info > span {
      display: block;
    }
    .sidebar-header .user-info .user-role {
      font-size: 12px;
    }

    .sidebar-header .user-info .user-status {
      font-size: 11px;
      margin-top: 4px;
    }

    .sidebar-header .user-info .user-status i {
      font-size: 8px;
      margin-right: 4px;
      color: #28a745;
    }

    .sidebar-wrapper .sidebar-search > div {
      padding: 10px 20px;
      border-top: 1px solid #3a3f48;
      border-bottom: 1px solid #3a3f48;
    }

    .sidebar-wrapper .sidebar-search input,
    .input-group-text {
      background: #3a3f48;
      border: none;
    }

    .input-group-text i {
      color: #898989;
    }

    .sidebar-menu {
      padding-bottom: 10px;
    }

    #sidebar ul > li {
      padding: 0px 0px;
    }

    #sidebar ul > li.active > a {
      color: #818896;
    }

    #sidebar ul > li.active > a span {
      color: #818896;
      font-weight: 500;
    }

    #sidebar ul li:hover > a i {
      color: #19fffd;
    }
    #sidebar ul li a:hover {
      color: #818896;
    }

    #sidebar ul.components {
      padding: 12px 0;
    }

    .sidebar-menu > ul > li a {
      padding: 7px 30px 7px 20px;
      line-height: 30px;
      font-size: 15px;
      color: #818896;
      position: relative;
      font-weight: 400;
      display: block;
      text-decoration: none;
    }

    .sidebar-menu .header-menu span {
      font-weight: bold;
      font-size: 14px;
      padding: 15px 20px 5px 20px;
      display: inline-block;
    }

    .menu {
      background-color: #3a3f48;
    }

    .menu > li {
      padding-left: 15px !important;
      position: relative;
    }
    .menu > li a:before {
      content: "\f111";
      font-family: "Font Awesome 5 Free";
      font-weight: 400;
      display: inline-block;
      text-align: center;
      text-decoration: none;
      margin-right: 10px;
      font-size: 8px;
    }

    .menu > li a {
      color: #b8bfce;
      position: relative;
      padding: 4px 24px 4px 20px !important;
      font-size: 13px !important;
    }

    #sidebar ul li a span.badge {
      float: right;
      margin-top: 8px;
      margin-left: 5px;
    }

    .badge-sonar {
      display: inline-block;
      background: #980303;
      border-radius: 50%;
      height: 8px;
      width: 8px;
      position: absolute;
      top: 0;
    }

    .dropdown-toggle::after {
      position: absolute;
      right: 18px;
      border: none !important;
      color: #c9c9c9;
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      content: "\f105";
      top: 10px;
    }

    #sidebar ul li a span {
      text-transform: capitalize;
      display: inline-block;
    }

    #sidebar ul li a i {
      margin-right: 10px;
      font-size: 12px;
      width: 30px;
      height: 30px;
      color: #818896;
      line-height: 30px;
      background: #3a3f48;
      text-align: center;
      border-radius: 4px;
    }

    .chiller-theme .sidebar-footer {
      background: #3a3f48;
      box-shadow: 0px -1px 5px #282c33;
      border-top: 1px solid #464a52;
    }

    .sidebar-footer {
      position: absolute;
      width: 100%;
      bottom: 0 !important;
      display: flex;
    }

    .sidebar-footer a {
      flex-grow: 1;
      text-align: center;
      line-height: 30px;
      color: #818896;
      line-height: 30px;
      position: relative;
    }

    .sidebar-footer > a .notification {
      position: absolute;
      top: 0;
    }
  </style>

  <body>
    <div class="page-wrapper chiller-theme">
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="#">Dashboard Panel</a>
          </div>

          <div class="sidebar-header">
            <div class="user-pic">
              <img
                src="img/user1.jpg"
                class="img-fluid img-rounded"
                style="width: 50px"
              />
            </div>
            <div class="user-info">
              <span class="user-name">John<strong>Smith</strong></span>
              <span class="user-role">Administrator</span>
              <span class="user-status">
                <i class="fa fa-circle"></i>
                <span>Online</span>
              </span>
            </div>
          </div>

          <div class="sidebar-search">
            <div>
              <div class="input-group">
                <input
                  type="text"
                  class="form-control search-menu"
                  placeholder="search.."
                />
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-menu">
            <ul class="list-unstyled components">
              <li class="header-menu">
                <span>General</span>
              </li>
              <li class="active">
                <a href="#" class="dashboard">
                  <i class="fas fa-tachometer-alt"></i>
                  <span>Dashboard</span>
                  <span class="badge text-dark badge-pill badge-warning"
                    >New</span
                  >
                </a>
              </li>
              <li class="dropdown">
                <a
                  href="#home1"
                  class="dropdown-toggle"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i class="far fa-user-circle"></i>
                  <span>Profile</span>
                  <span class="badge badge-pill badge-danger">3</span>
                </a>
                <ul class="collapse list-unstyled menu" id="home1">
                  <li>
                    <a href="#"
                      >Home 1
                      <span class="badge badge-pill badge-success">Pro</span>
                    </a>
                  </li>
                  <li><a href="#">Home 2 </a></li>
                  <li><a href="#">Home 3 </a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a
                  href="#home2"
                  class="dropdown-toggle"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i class="fas fa-table"></i>
                  <span>Ship</span>
                </a>
                <ul class="collapse list-unstyled menu" id="home2">
                  <li><a href="#">table 1</a></li>
                  <li><a href="#">table 2 </a></li>
                  <li><a href="#">table 3 </a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a
                  href="#home3"
                  class="dropdown-toggle"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i class="far fa-smile"></i>
                  <span>Port</span>
                </a>
                <ul class="collapse list-unstyled menu" id="home3">
                  <li><a href="#">Icons 1</a></li>
                  <li><a href="#">Icons 2 </a></li>
                  <li><a href="#">Icons 3 </a></li>
                </ul>
              </li>

             
          </div>
        </div>
        <div class="sidebar-footer">
          <a href="#">
            <i class="fa fa-bell"></i>
            <span class="badge badge-pill badge-warning notification">3</span>
          </a>
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span class="badge badge-pill badge-success notification">7</span>
          </a>
          <a href="#">
            <i class="fa fa-cog"></i>
            <span class="badge-sonar"></span>
          </a>
          <a href="#">
            <i class="fa fa-power-off"></i>
          </a>
        </div>
      </nav>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
      $("#sidebarCollapse").click(function () {
        $("#sidebar").toggleClass("toggled");
      });
    </script>
  </body>
</html>
