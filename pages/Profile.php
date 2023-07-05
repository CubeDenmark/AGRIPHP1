<?php
  session_start();
  if(!isset($_SESSION['username2'])) {
    //$_SESSION['msg'] = "<h1>You must log in first</h1>";
    echo "<h1>You must log in first</h1>";
    header('location: ../index.php');
  }
  if(isset($_GET['logout'])) {
    unset($_SESSION['username2']);
    header('location: Login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <!-- Boostrap CSS -->
    <link
      rel="stylesheet"
      href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <!-- Boostrap Javascript -->
    <script
      defer
      src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"
    ></script>
    <link rel="stylesheet" href="/stylings/Profile.css" />
    <script
      src="https://kit.fontawesome.com/fae056ab45.js"
      crossorigin="anonymous"
    ></script>
    <!--Font Links-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap"
      rel="stylesheet"
    />
    <!--Font Links-->
  </head>
  <body>
    <!--Navigation Bar-->
    <nav
      class="navbar nav-underline sticky-lg-top navbar-expand-xxl bg-body-tertiary"
    >
      <div class="container-fluid">
        <a
          class="navbar-brand d-flex align-items-center text-success"
          id="brand"
          href="#"
          ><img src="/assets/logo-nobg.png" class="img-fluid logo-pic" />
          <p class="title">Agrikultur'App</p></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon fs-1"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul
            class="navbar-nav ms-auto mb-2 mb-lg-0 text-end d-flex align-items-xxl-center"
          >
            <li class="nav-item me-2">
              <a
                class="nav-link active text-success"
                id="nav-link"
                aria-current="page"
                href="AuctionPage.html"
                ><i class="fa-solid fa-gavel"></i> Auction Page</a
              >
            </li>
            <li class="nav-item d-block d-xxl-none">
              <a class="nav-link text-success" href="#contact" id="nav-link"
                ><i class="fa-solid fa-bell"></i> Notifications</a
              >
            </li>
            <li class="nav-item me-2">
              <a
                class="nav-link text-success"
                href="Guidelines.html"
                id="nav-link"
                ><i class="fa-solid fa-table"></i> Pricing Guidelines</a
              >
            </li>
            <li class="nav-item">
              <p class="desc text-end d-block d-xxl-none">
                Logged In as:
                <strong
                  ><a
                    href="Profile.html"
                    class="nav-link text-success text-decoration-underline"
                    >Teddy Pascual</a
                  ></strong
                >
              </p>
            </li>

            <li class="nav-item me-2">
              <a
                class="btn btn-success w-auto fs-3 d-block d-xxl-none float-end"
                href="/pages/Login.php"
                >Sign Out</a
              >
            </li>
          </ul>
          <div class="nav-pic d-none d-xxl-block btn-group dropdown">
            <button
              type="button"
              class="btn dropdown-toggle"
              id="dropdownMenuButton"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img src="/assets/Teddy.jpg" class="img-fluid rounded-circle" />
            </button>
            <div
              class="dropdown-menu fs-3"
              id="dropdown-menu"
              aria-labelledby="dropdownMenuButton"
            >
              <a class="dropdown-item text-success" href="Profile.html"
                ><i class="fa-solid fa-user"></i> Profile</a
              >
              <a class="dropdown-item text-success" href="#"
                ><i class="fa-solid fa-bell"></i> Notifications</a
              >
              <div class="dropdown-divider"></div>
              <a class="btn btn-success w-100 fs-3" href="/pages/Profile.php?logout"
                ><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!--Navigation Bar-->
    <main class="container-fluid">
      <div class="row row-cols-1 row-cols-lg-2">
        <!--Image Container-->
        <div
          class="col d-flex flex-column align-items-center justify-content-center img-section"
        >
          <img
            src="/assets/avatar1.svg"
            class="img-fluid rounded-circle"
            alt=""
            id="profile-pic"
          />
          <label for="change-prof" class="md-title mt-5"
            >Change Profile Picture</label
          >
          <form action="" class="w-755">
            <div class="input-group">
              <input
                type="file"
                class="form-control bg-transparent"
                id="change-prof"
                accept="image/png, image/jpeg"
              />
              <button
                type="submit"
                class="btn btn-success"
                id="save-img-btn"
                disabled
                onclick="saveProfPic()"
              >
                Save
              </button>
            </div>
            <!--Image Container-->
          </form>
        </div>
        <!--Information Container-->
        <div class="col d-flex flex-column align-items-center">
          <form action="" class="fs-5 information-section p-4" id="info-form">
            <p class="title text-light">Personal Information</p>
            <!--Name Information-->
            <div class="d-flex mb-3">
              <input
                type="text"
                class="form-control"
                id="name_inp"
                placeholder="Teddy Pascual"
                onchange="boom()"
                disabled
              />
              <button
                class="edit-btn text-success"
                id="edit-info-btn"
                type="button"
                onclick='ror("name_inp")'
              >
                <i class="fa-solid fa-pen-to-square"></i>
              </button>
            </div>
            <!--Name Information-->

            <!--Email Information-->
            <div class="d-flex mb-3">
              <input
                type="text"
                class="form-control"
                id="email_inp"
                placeholder="kledted23@gmail.com"
                onchange="boom()"
                disabled
              />
              <button
                class="edit-btn text-success"
                id="edit-info-btn"
                type="button"
                onclick='ror("email_inp")'
              >
                <i class="fa-solid fa-pen-to-square"></i>
              </button>
            </div>
            <!--Email Information-->

            <!--Address Information-->
            <div class="d-flex mb-3">
              <input
                type="text"
                class="form-control"
                id="address_inp"
                placeholder="Capas,Tarlac"
                onchange="boom()"
                disabled
              />
              <button
                class="edit-btn text-success"
                id="edit-info-btn"
                type="button"
                onclick='ror("address_inp")'
              >
                <i class="fa-solid fa-pen-to-square"></i>
              </button>
            </div>
            <!--Address Information-->

            <!--Mobile Number Information-->
            <div class="d-flex mb-3">
              <input
                type="text"
                class="form-control"
                id="mobileNum_inp"
                placeholder="09982409945"
                onchange="boom()"
                disabled
              />
              <button
                class="edit-btn text-success"
                id="edit-info-btn"
                type="button"
                onclick='ror("mobileNum_inp")'
              >
                <i class="fa-solid fa-pen-to-square"></i>
              </button>
            </div>
            <!--Mobile Number Information-->
            <button
              type="submit"
              class="btn btn-success fs-1"
              id="save-btn"
              disabled
            >
              Save
            </button>
          </form>
        </div>
        <!--Information Container-->
      </div>
    </main>
    <script src="/index.js"></script>
  </body>
</html>
