<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Example</title>
</head>
<body>
    <h2>Upload a file</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_FILES['uploaded_file'])){
        $file = $_FILES['uploaded_file'];
        if($file['error'] === UPLOAD_ERR_OK){
            $filename = $file['name'];
            echo "File uploaded successfully!<br>";
            echo "File name: " . htmlspecialchars($filename);
        }else{
            echo "Error uploading file. Error code: " . $file['error'];
        }
    }else{
        echo "No file uploaded.";
    }
}
?>