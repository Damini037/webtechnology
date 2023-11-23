<!----9.1---->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files were uploaded without errors
    if (isset($_FILES["files"]) && is_array($_FILES["files"]["name"])) {
        $targetDir = "uploads/";
        
        // Create the "uploads" directory if it doesn't exist
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $uploadedFiles = [];

        // Loop through each file
        for ($i = 0; $i < count($_FILES["files"]["name"]); $i++) {
            $fileName = basename($_FILES["files"]["name"][$i]);
            $targetFile = $targetDir . $fileName;

            // Check if the file already exists
            if (file_exists($targetFile)) {
                echo "File '$fileName' already exists.<br>";
            } else {
                // Move the uploaded file to the specified directory
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $targetFile)) {
                    $uploadedFiles[] = $fileName;
                } else {
                    echo "Error uploading file '$fileName'.<br>";
                }
            }
        }

        // Display the list of uploaded files
        if (!empty($uploadedFiles)) {
            echo "Files uploaded successfully:<br>";
            foreach ($uploadedFiles as $file) {
                echo "$file<br>";
            }
        }
    } else {
        echo "No files were uploaded.";
    }
}
?>
