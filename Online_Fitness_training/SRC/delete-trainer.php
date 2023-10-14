<?php
include ("config.php");

$id = $_GET['id'];

echo "<script>
    var confirm = confirm('Are you sure you want to delete this trainer?');
    if(confirm == false){
        window.location.href='admin.php';
    }
    </script>";

$sql = "DELETE FROM trainer WHERE t_ID='$id'";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Trainer Deleted Successfully');
    window.location.href='admin.php';
    </script>";
} else {
    echo "<script>
    alert('Error Deleting Trainer');
    window.location.href='admin.php';
    </script>";
}

close ($conn);


?>