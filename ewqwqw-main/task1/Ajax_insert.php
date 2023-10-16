<?php

// use JetBrains\PhpStorm\Language;

require_once 'connection.php';

//start
$error = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($error)) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $Dstart = $_POST['Dstart'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $path = $_FILES['path'];
        $target_path = "uploads/";
        // echo "here";
        // print_r($_FILES);die;
        if (isset($_FILES['path'])) {
            $file_name = $_FILES['path']['name'];
            $file_size = $_FILES['path']['size'];
            $file_tmp = $_FILES['path']['tmp_name'];
            $file_type = $_FILES['path']['type'];
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
        }
        $Show_path = $target_path . $file_name;
        $address = $_POST['address'];
        $zip = $_POST['zip'];

        if (isset($_REQUEST['gender_name'])) {
            $gender_name = $_REQUEST['gender_name'];
        }
        // $language = isset($_POST['language']) ? implode(', ', $_POST['language']) : '';
        $language = "";
        $count = count($_POST['language']);
        // $key = array_keys($_POST['language']);
        // print_r($language);
        for ($i = 0; $i < $count; $i++) {
            if ($count-1==$i) {
                // print_r($language[$i]);
                $language[$i];
                var_dump($language[$i]);
               
            } else {
                $language = ($language[$i]."".",");
                // echo "here1";
             
            }
            
            // print_r($language,"",",");
            //     if($_POST['language']);
            // print_r($_POST['language'].key )

        }

        // arra = [hindi, eng, urg]
        // lang = "hindi,engl,urga";


        $sql = "insert into registration_from(fname, lname, Dstart, email, phoneno, path, address, zip, gender_name, language ) values
        ('{$fname}','{$lname}','{$Dstart}','{$email}','{$phoneno}','{$Show_path}','{$address}','{$zip}','{$gender_name}','{$language}')";


        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo 'done';
        } else {
            echo 'error';
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



// $getCity = function () use ($conn) {
//     $sql = "SELECT id, name FROM states where country_id = 101";
//     $result = $conn->Execute($sql);
    
//     if ($user->total_rows($sql)) {
//         $output = "<option value=''>-select-</option>";
//         while ($state = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//             $sid = $state['id'];
//             $name = $state['name'];
//             $output .= "<option value='" . $sid . "'>" . $name . "</option>";
//         }
//         echo $output;
//     }
// };                                 



// if(isset($_POST['type']) && $_POST['type']== 'city'){
//     $getCity();
// }