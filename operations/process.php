<?php
session_start();
//echo $_POST['name'];
/*if($_POST['name'] === ''){
    echo "من فضلك ادخل اسم مريض ";
    
}
else{
    $pname= $_POST['name'];
    $cid= $_SESSION['cid'];
    $id= $_SESSION['id'];
    $conn= mysqli_connect("localhost","root","1234","kix");
    $i= "insert into clin values('','$cid','$id','$pname','')";
    $q= mysqli_query($conn,$i);
    if($q === True){
        echo "تم ادخال المريض بنجاح";
    }
    else{
        echo "عفوا";
    }
}*/
header("location: log.php");
//$answer= json_encode($_POST['answer']);
foreach($_POST as $er){
    echo $er;
}
//echo $_POST['name'];
echo count($n);
echo $n[1];
//echo count($answer);
//echo $answer[0][0];
//echo $_POST['name'];
class clinic{
    public $query;
    
    
    public function put(){
        $id= $_SESSION['id'];
        $cid= $_SESSION['cid'];
        $sconn= mysqli_connect("localhost","root","1234","kix");
        $s= "select * from addnew where cid=$cid";
        $q= mysqli_query($sconn,$s);
        $f= mysqli_fetch_array($q);
       
        if($this->query != ''){
            $pconn= mysqli_connect("localhost","root","1234","kix");
            $i= "insert into clin values('','$cid','$id','$this->query','')";
            $q= mysqli_query($pconn,$i);
            echo "تم ادخال المريض بنجاح";
        }
        else{
            echo "لم يتم ادخال مريض";
        }
         if($f[5] == 0){
             $lid= mysqli_insert_id($sconn);
            $u= "update addnew set ind='$lid' where cid='$cid'";
            $q= mysqli_query($sconn,$u);
            if($q != True){
                echo mysqli_error($sconn);
            }
            else{
                echo "$this->query";
            }
        }
    }
    
    public function show(){
        //echo $this->query;
        $cid= $_SESSION['cid'];
        $arr= array();
        $sconn= mysqli_connect("localhost","root","1234","kix");
        $s= "select * from addnew where cid=$cid";
        $q= mysqli_query($sconn,$s);
        $f= mysqli_fetch_array($q);
        if($f[5] != 0){
            $c1= $f[5] - 1;
            $c3= $f[5] + 1;
            $sa= "seletc * from clin";
            $qa= mysqli_query($sconn,$sa);
            $fa= mysqli_fetch_array($qa);
            
            while($fa[0] == True){
                if($cid === $fa[1]){
                    
                }
            }
            $u= "update addnew set ind='$c3' where cid=$cid";
            $q= mysqli_query($sconn,$u);
            $s1= "select * from clin where cid=$c3";
            $s2= "select * from clin where cid=$f[5]";
            $s3= "select * from clin where cid=$c3";
            $q3= mysqli_query($sconn,$s3);
            $f3= mysqli_fetch_array($q3);
            if($f3 != True){
                echo mysqli_error($sconn);
            }
            echo $f3[3];
        }
        else{
            echo "لم يتم ادخال مرضي";
        }
       
        
        
        
        
        
        
       /* while($f= mysqli_fetch_array($q)){
            if($f[1] === "$cid"){
                $arr[count($arr)]= $f[3];
                
            }
        }
        if(count($arr) != 0){
            //echo $this->query;
           $n= count($arr) - 4;
           for($i = 0 ; $i < 3; $i++){
            echo $arr[$n];
            $n++;
           }
        }   
        else{
            echo "fffff";
    
            }
        */
    }
    
    
    public function search(){
        
    }
    
}


    $put= new clinic();
    @$put->query= $_POST['name'];
    
    
    
    
    $show= new clinic();   
    @$show->query= $_POST['p'];
    
    
    
    
    $search= new clinic();
   // $search->query= $_POST[''];
    
if(@$_POST['name']){
    $put->put(); 
}    
  
if(@$_POST['p']){
    $show->show();
}

//[1,2,3,4,5,6]

?>