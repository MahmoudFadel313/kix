<?php
session_start();
ob_start();
$id= $_SESSION['id'];
$name= $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
    
        <title></title>
   
    </head>
    <body>
         <img src="20200709_174113_٠٠٠٠.png" alt="cover" style="position:relative;width:100%;height:130%;">
         
         
         
         
         
          <div style="position:absolute;left:400px;width:350px;">
        <form class="form-signin" method="post" >
  <div class="text-center mb-4">
    <img class="mb-4" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal"><?php echo "مرحبا, $name"?> </h1>
    <p>انشئ عيادتك الخاصة الان</p>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" name="name" style="background:none;border-bottom:2px solid black;border-left:none;border-right:none;border-top:none;" required autofocus>
    <label for="inputEmail">اسم العيادة</label>
  </div>          
            
          <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div>   
            
  <div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" name="address" style="background:none;border-bottom:2px solid black;border-left:none;border-right:none;border-top:none;" required autofocus>
    <label for="inputEmail"> عنوان العيادة</label>
  </div>
<div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div> 
  
            <label for="dep">اختر التخصص</label>
<select class="form-control form-control-lg" name="dep" style="background:none;border-bottom:2px solid black;border-left:none;border-right:none;border-top:none;">
   <option>عظام</option>
                <option>امراض جلدية</option>
                <option>انف واذن</option>
                <option>نساء وتوليد</option>
                <option>اطفال</option>
                <option>اسنان</option>
                <option>باطنة</option>
</select>
  <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div>          
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" style="background:none;color:black;border:2px solid black;">تسجيل</button>

  <p class="mt-5 mb-3 text-muted text-center" style="background-color:black;color:red;">&copy; 2020 KIX , INC</p>
</form>

        
        
            </div>
        <?php 
       $conn= mysqli_connect("localhost","root",'1234','kix');
        mysqli_set_charset($conn,"utf8");
        if(isset($_POST['sub'])){
            $name= $_POST['name'];
            $dep= $_POST['dep'];
            $addr= $_POST['address'];
           // $country =$_POST['country'];
            
        $i= "insert into addnew values('','$id','$name','$dep','$addr','')";
            $q= mysqli_query($conn,$i);
       // $s= "select * from doc where email='$email' and pass='$pass'";
        //$q= mysqli_query($conn,$s);
        //$f= mysqli_fetch_array($q);
        if($q == True){
            $_SESSION['cid']= mysqli_insert_id($conn);
            header("location: clinic.php");
        }
        else{            
            
          //  $_SESSION['id']= mysqli_insert_id($conn);
           // $_SESSION['name']= $name;
            //header("location: add.php");
            echo "nooooooooon";
            echo mysqli_error($conn);
        }
        }
        ?>
        
      
        
        
        
        
        <script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap.min.js"></script>
    
    </body>
</html>


