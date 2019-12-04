<?php
   include ("db_connection/config.php");
   session_start();
   error_reporting (E_ALL ^ E_WARNING || E_NOTICE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE username = '$username' && password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("username");
         $_SESSION['login_user'] = $username;
         
         // echo "<br><div class='alert alert-info'>Login Sukses</div>";
         header("location: dashboard.php");
         
        
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Admin</title>
      
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
      
   </head><br><br><br><br>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;" align = "center"><b>Login Admin</b></div>
				
            <div style = "margin:10px">
               
               <form class="form-signin" METHOD="POST">        
                  <label>username  :</label><input type = "text" name = "username" class = "form-control"/>
                  <label>password  :</label><input type = "password" name = "password" class = "form-control"/><br>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Log in">Submit</button>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>