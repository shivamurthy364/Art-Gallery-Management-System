<?php
        $filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];

        $folder = "images/".$filename;

        move_uploaded_file($filetmpname, $folder);
        echo "<img src='$folder' height='100' width='100'/>";



        echo "<img src='$folder' height='100' width='100'/>";



?>



