<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">    
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
    </head>
    <body>
          <img src="20200709_174113_٠٠٠٠.png" alt="cover" style=" position:relative;width:100%;height:130%;">
          
          
         <div class="rr" style="position:absolute;left:400px;width:350px;">
        <form class="form-signin" method="post" >
  <div class="text-center mb-4">
    <img class="mb-4" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal"> تسجيل الدخول</h1>
    <p>تابع عيادتك الخاصة</p>
  </div>

          
           
  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" name="email" style="background:none;border-bottom:1px solid black;border-left:none;border-right:none;border-top:none;" required autofocus>
    <label for="inputEmail">البريد الالكتروني</label>
  </div>
            <div class="form-label-group">
    <input type="password" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" name="pass" style="background:none;border-bottom:1px solid black;border-left:none;border-right:none;border-top:none;" required autofocus>
    <label for="inputEmail">كلمة السر </label>
  </div>  
            <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div> 
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" style="background:none;color:black;border:1px solid black;">تسجيل</button>

   <div>لو  لديك حساب بالفعل <a href="index.php">اضغط هنا</a></div>
        
        </form>
         </div>
        <?php 
        $conn= mysqli_connect("localhost","root","1234","kix");
        if(isset($_POST['sub'])){
            $email= $_POST['email'];
            $pass= $_POST['pass'];
            $s= "select * from doc where email='$email' and pass='$pass'";
            $q= mysqli_query($conn,$s);
            $f= mysqli_fetch_array($q);
            if($f[0]== True){
                $_SESSION['id']= $f[0];
                header("location: clinic.php");                
            }
            else{
                echo "not";
            }
        }
        
        
        
        ?>
        
        
        
        
        <script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap.min.js"></script>
    
    </body>
</html>