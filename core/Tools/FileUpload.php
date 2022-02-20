<?php

namespace core\Tools;

class FileUpload
{
    public function upload($img, $target_dir = "/", $extensions = array("jpeg", "jpg", "png"))
    {
        if (isset($img)) {
            $errors = array();
            $file_size = $img['size'];
            $file_tmp = $img['tmp_name'];
            $file_ext = @strtolower(end(explode('.', $img['name'])));
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }
            if (empty($errors) == true) {
                $new_name = md5(date("y:m:d h:i:s")) . '.' . $file_ext;
                move_uploaded_file($file_tmp, __DIR__ . "/../../public/" . $target_dir . $new_name);
                return $target_dir . $new_name;
            } else {
                return $errors;
            }
        }
    }
}
