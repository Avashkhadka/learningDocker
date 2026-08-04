<?php

$connect = mysqli_connect("localhost", "root", "", "test_file_upload");
function saveUserFile($connect, $full_name, $email, $file_url)
{
    $sql = "INSERT INTO test_user_files('full_name','email','file_url') values('$full_name','$email','$file_url')";
    try {
        $res = mysqli_connect($connect, $sql);
        if ($res) {
            echo "stored successifylly";
        }
    } catch (exception $e) {
        echo "something went wrong. please try again ";
    }
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir);
    }
    $upload_file_target = $upload_dir . basename($_FILES['file_to_upload']['name']);
    if (isset($_FILES['file_to_upload']) && $_FILES['file_to_upload']['error'] == 0) {
        $file_ext_config = array(
            "png" => "image/png",
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "PNG" => "image/PNG",
            "JPG" => "image/JPG",
            "JPEG" => "image/JPEG",
        );

        $file_name = time() . $_FILES['file_to_upload']['name'];
        $file_type = $_FILES['file_to_upload']['type'];
        $file_size = $_FILES['file_to_upload']['size'];
        $file_tmp_name = $_FILES['file_to_upload']['tmp_name'];

        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (!array_key_exists($file_ext, $file_ext_config)) {
            echo "unsupported file extension";
        } else {
            $max_file_size = 2 * 1024 * 1024;
            if ($file_size > $max_file_size) {
                echo "please upload file less than 2MB";
            } else {
                if (!in_array($file_type, $file_ext_config)) {
                    echo "please upload image file only";
                } else {
                    if (!file_exists("uploads/$file_name")) {
                        if (move_uploaded_file($file_tmp_name, $upload_file_target)) {
                            $full_name = $_REQUEST['full_name'];
                            $email = $_REQUEST['email'];
                            $file_url = "uploads/$file_name";
                            saveUserFile($connect, $full_name, $email, $file_url);
                        } else {
                            echo "Something went wrong while uploading . pleas etyr again ";
                        }
                    } else {
                        echo "file $file_name already exists. try again.";
                    }
                }
            }
        }

    }
}

?>