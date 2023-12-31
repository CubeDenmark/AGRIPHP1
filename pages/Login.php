
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="/stylings/Login.css" />
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
  </head>
  <body>
    <main class="container bg-body-tertiary p-5 login_cont">
      <!--Image Container-->
      <div class="row">
        <div class="col d-none d-lg-block my-auto">
          <img
            class="img-fluid"
            src="/assets/login2.svg"
            alt="Login Pic"
            lazy
          />
        </div>
        <!--Form Container-->
        <div class="col mx-auto">
          <h1 class="form-label text-center">Login</h1>
          <form class="" onsubmit="signUp()" action="Login.php" method="post">
            <div class="form-floating">
              <input
                type="email"
                name="uname"
                class="form-control mb-3"
                id="email-inp"
                placeholder="Enter Email here"
                <?php include_once('../conns/server.php'); session_start(); if(isset($_GET['user'])){  echo 'value="'. $_GET['user'].'"';} ?>
              />
              <label for="email-inp">Email</label>
            </div>
            <div class="form-floating">
              <input
              name="upass"
                type="password"
                class="form-control mb-3"
                id="pass-inp"
                placeholder="Enter Password here"
              />
              <label for="pass-inp">Password</label>
            </div>
            <button type="submit" name="oksbut" class="btn btn-success w-100 mb-3">
              Submit
            </button>
          </form>
          <small
            >Don't have an account? <a href="SignUp.html">Sign Up</a></small
          >
        </div>
        <!--Form Container-->
      </div>
    </main>
    <script src="/index.js"></script>
  </body>
</html>
