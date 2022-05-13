<?php 
session_start();
ob_start();

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
    <link type="text/css" rel="stylesheet" href="index2.css">
        <title></title>
    </head>
    
    <body style="background-color:;">
        <img src="20200709_174113_٠٠٠٠.png" alt="cover" style="">
      <!--  <form method="post">
            <input type="text" name="name" placeholder="اسم الطبيب">
            <input type="text" name="email" placeholder="البريد الالكتروني">
            <input type="password" name="pass" placeholder="كلمة السر">
            <label for="country">اختر الدولة</label>
            <select name="country" >
                <option>مصر</option>
                <option>السعودية</option>
                <option>الامارات</option>
                <option>قطر</option>
                <option>الكويت</option>
                <option>البحرين</option>
            </select>
                <input type="submit" name="sub">
        </form>
        
        -->
        <div class="rr" style="">
        <form class="form-signin" method="post" >
  <div class="text-center mb-4">
    <img class="mb-4" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">انشاء حساب</h1>
    <p> انشء حساب للحصول علي الخدمة الان</p>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" name="name" style="background:none;border-bottom:1px solid black;border-left:none;border-right:none;border-top:none;" required autofocus>
    <label for="inputEmail">اسم الطبيب</label>
  </div>          
            
  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" name="email" style="background:none;border-bottom:1px solid black;border-left:none;border-right:none;border-top:none;" required autofocus>
    <label for="inputEmail">البريد الالكتروني</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="كلمة السر" name="pass" style="background:none;border-bottom:1px solid black;border-left:none;border-right:none;border-top:none;" required>
    <label for="inputPassword">كلمة السر</label>
  </div>
            <label for="country">اختر الدولة</label>
<select class="form-control form-control-lg" name="country" style="background:none;border-bottom:1px solid black;border-left:none;border-right:none;border-top:none;">
   <option>مصر</option>
                <option>السعودية</option>
                <option>الامارات</option>
                <option>قطر</option>
                <option>الكويت</option>
                <option>البحرين</option>
</select>
  <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div>          
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" style="background:none;color:black;border:1px solid black;">تسجيل</button>

   <div>لو ليس لديك حساب <a href="log.php">اضغط هنا</a></div>
        
        
            
  
  
  <p class="mt-5 mb-3 text-muted text-center" style="background-color:black;color:red;">&copy; 2020 KIX , INC</p>
</form>
  </div>         
        
        
        <?php
        
        $conn= mysqli_connect("localhost","root",'1234','kix');
        mysqli_set_charset($conn,"utf8");
        if(isset($_POST['sub'])){
            $name= $_POST['name'];
            $email= $_POST['email'];
            $pass= $_POST['pass'];
            $country =$_POST['country'];
            
        
        $s= "select * from doc where email='$email' and pass='$pass'";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        if($f[0] == True){
            echo '<p>الرجاء تغيير عنوان البريد الالكتروني</p>';
        }
        else{            
            $i= "insert into doc values('','$name','$email','$pass','$country')";
            $q= mysqli_query($conn,$i);
            $_SESSION['id']= mysqli_insert_id($conn);
            $_SESSION['name']= $name;
            header("location: add.php");
            
            
        }
        }
        ?>
        
        
        
        
<script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap.min.js"></script>
    
    </body>
</html>
