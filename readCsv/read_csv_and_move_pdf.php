<?php
// Read CSV, Create Folder and Move pdf to Specific Folder which pdf are matched
$csv_arr = file("task.csv");
$baseTo = "File/";
foreach ($csv_arr as $key => $file) {
    $folderName = explode(',', $file);

    if(is_int(+trim($folderName[1]))){

        if(!file_exists($folderName[0])){
            mkdir($folderName[0], 0777, true);
        }

        if(file_exists($folderName[0])){
            $source =$baseTo.trim($folderName[1]).'.pdf';
            $destination = $folderName[0].'/'.trim($folderName[1]).'.pdf';

            if(file_exists($source)){
                if (rename($source, $destination)) {
                    echo 'File was successfully moved <br>';
                } else {
                    echo 'Error moving file';
                }
            } else {
                echo 'Already moved <br>';
            }
        }

    }

}