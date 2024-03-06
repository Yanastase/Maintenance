<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        
        if (!file_exists($targetFile)) {
            
            move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
            echo "Le fichier a été correctement uploadé.";
        } else {
            echo "Désolé, le fichier existe déjà.";
        }
    } else {
        echo "Une erreur est survenue lors de l'upload du fichier.";
    }
}
?>