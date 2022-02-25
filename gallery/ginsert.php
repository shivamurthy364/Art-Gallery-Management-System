 <?php
    if(isset($_POST['G_ID']) && isset($_POST['GNAME']) && isset($_POST['LOCATION'])):
    $gid = $_POST['G_ID'];
    $gname = $_POST['GNAME'];
    $location = $_POST['LOCATION'];
        $filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];

        $folder = "images/".$filename;

        move_uploaded_file($filetmpname,$folder);


        $link = new mysqli('localhost','root','','art_gallery');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO GALLERY(gid, gname, location, image) VALUES('".$gid."', '".$gname."', '".$location."','".$folder."')";

      

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into GALLERY table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?>
