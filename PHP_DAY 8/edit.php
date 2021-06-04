<?php
$connection = mysqli_connect("localhost","root","","db_phpinternship");



$editid = $_GET['id'];
//select data from Table
$editq = mysqli_query($connection,"select * from tbl_user where user_id='{$editid}'")or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);
 
   

?>
<html>
        <body>
           <form method="post">
               Name : <input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1"/>
               </br>
               Gender : Male<input type="radio" <?php if($editdata['user_gender']=="Male"){ echo "checked";} ?> checked='manual' value="Male" name="txt2"/>
               Female<input type="radio" <?php if($editdata['user_gender']=="Female"){ echo "checked";} ?> checked='manual' value="Female" name="txt2"/>
               </br>
               Mobile : <input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="txt3"/>
               </br>
                            
             <input type="submit"/>
            
            </form>
         </body>
       </html>


