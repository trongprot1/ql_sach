<?php
/**
 * Created by PhpStorm.
 * User: nvtro
 * Date: 11/5/2018
 * Time: 10:37 PM
 */

class Hinhanh
{
    function upload()
    {
        if(isset($_FILES)){
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["images"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["images"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
                return;
            }

            if (file_exists($target_file)) {
                $uploadOk = 0;
                return $target_dir.basename($_FILES["images"]["name"]);
            }
            if ($_FILES["images"]["size"] > 5000000) {
                $uploadOk = 0;
                return;
            }
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                $uploadOk = 0;
                return;
            }

            if ($uploadOk == 0) {
                return;
            } else {
                if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
                    return $target_dir.basename($_FILES["images"]["name"]);
                } else {
                    return;
                }
            }
        }
    }
}