<?php
session_start();
echo 'welcome to your clinic';
?>
<!DOCTYPE html>
<html>
    <p id="<?php echo "tt"?>"></p>
    <head>
        <meta charset="utf-8" />
         <script src="jquery-3.4.1.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    </head>
    <body>
        <p id="serverResponse"></p>
        <p id="p"></p>
        <div><input type="text" name="add" id="new"  placeholder="اضف مريض جديد">
            <button   onclick="co()" >get in</button></div>
        <button  id="ffffff" onclick="com(this.id)"  >set in</button>
        
        <?php 
        echo $_SESSION['cid'];
        ?>
        <script type="text/javascript">
            function com(id){
                 const xhr = new XMLHttpRequest();
           var element= document.getElementById('new').value;
           xhr.onload = function(){
               const serverResponse = document.getElementById("p");
               serverResponse.innerHTML = this.responseText;
              
               //document.write(this.responseText);
           };
           xhr.open("post", "process.php",true);
           xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhr.send("p=" + id  e4rgt);
            };
        function co(){
          const xhr = new XMLHttpRequest();
           var element= document.getElementById('new').value;
           var el= document.getElementById('new').value;
           xhr.onload = function(){
               const serverResponse = document.getElementById("serverResponse");
               serverResponse.innerHTML = this.responseText;
               //document.write(this.responseText);
           };
           xhr.open("post", "process.php",true);
           xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhr.send("name=" + id);
          // xhr.send('name=' + element );
           
           
        };
       /* $(function(){
        $("button").on('click', function(){
            $.post('process.php?answer="ttttt"', function(one,two,three){
                document.write(one);

            });

        });
    });*/
        
        </script>
       
    </body>
</html>

