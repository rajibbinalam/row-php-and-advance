<?php
// Specify the path to your .txt file
$txtFilePath = './file.txt';

// Directory where you want to create folders
$baseDirectory = 'assets';

// Check if the file exists
if (file_exists($txtFilePath)) {
    // Read the file line by line into an array
    $folders = file($txtFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    if ($folders === false) {
        die("Failed to read the file.");
    }
    
    // Iterate through the lines and create folders
    foreach ($folders as $folderName) {
        
        $folderName = preg_replace('/^[0-9]./', '', $folderName);
        $folderName = trim($folderName); // Remove leading/trailing whitespace
        $folderPath = $baseDirectory . '/' . $folderName;
        
        // Check if the folder doesn't already exist
        if (!file_exists($folderPath)) {
            // if (mkdir($folderPath, 0777, true)) {
            //     echo "Folder '$folderPath' created successfully.<br>";
            // } else {
            //     echo "Failed to create folder '$folderName'.<br>";
            // }
            mkdir($folderPath, 0777, true);

            

        }
        
        $meMdFilePath = $folderPath . "/$folderName.md";
        if (file_put_contents($meMdFilePath, "This is '$folderName'") !== false) {
            echo "$folderName.md file created in '$folderPath'.<br>";
        }
    }

    echo "Complete All Proccess <br/>";
} else {
    echo "The file '$txtFilePath' does not exist.";
}
