<html>
    <head>
        <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet"> 
    <link id="forlogin" href="assets/css/login.css" rel="stylesheet"/>
        <body>
                <div class="wrapper">
                    <?php
                      session_start();

                      ob_start();

                      include ("db_connection/konek.php");
                    ?>
                        <form class="form-signin" METHOD="POST">       
                          <h2 class="form-signin-heading">Please login</h2>
                          <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
                          <input type="password" class="form-control" name="password"  id="password" placeholder="Password" required=""/>      
                          <label class="checkbox">
                            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                          </label>
                          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit">Login</button>   
                        </form>
                        <?php       
                          error_reporting (E_ALL ^ E_WARNING || E_NOTICE);
                          if(isset($_POST['submit'])){
                            $username = $_POST['username'];
                            $pwd = $_POST['password'];
                            // $hash = password_hash($password, PASSWORD_DEFAULT);
                            $query = "SELECT * FROM admin WHERE username = '$username' && password = '$pwd'";
                            $data = mysqli_query($query);
                            $total = mysqli_num_rows($data);

                            if($total==1){
                              $_SESSION['username'] = $username;
                              // echo "<br><div class='alert alert-info'>Login Sukses</div>";
                              // echo ("meta http-equiv='refresh' content='1;url=index.php'>");
                              // header('location:index.php');
                              // echo "<script>location='index.php'</script>";
                              session_start();
                              echo "<script>alert('Login Sukses')</script>";
                              session_destroy();
                              echo "<script>location='index.php?logintest=done'</script>";
                            }else{
                              echo "<br><div class='alert alert-danger'>Login Gagal</div>";
                              header ("meta http-equiv='refresh' content='1;url=login2.php'>");
                            }
                         }
				              ?>
                      </div> 
        </body>
    </head>
</html>