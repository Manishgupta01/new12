 <?php
// echo "here";
require_once 'connection.php';

// if(isset($_POST['type']) && $_POST['type']== 'delete'){
   //$bar = isset($_POST['bar']) ? $_POST['bar'] : null;
    $Did=$_POST['id'];
    print_r($Did);
    $sql5 = "delete from registration_from where Id =".$Did;
    // print_r($sql5);die;
    $result = mysqli_query($conn,$sql5);
    print_r($result);die;
    // if (mysqli_num_rows($result)) {
     
    // }
// }else{
//     print_r('hell');die;
// }



?> 

