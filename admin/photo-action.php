<?php
include("conn.php");
session_start();
if ($_POST['action']) {
    $action = $_POST['action'];
    //Add Data Start
    if ($action == "Add") {
        if ($_POST['type']) {
            $type = $_POST['type'];
            $name = $_POST['name'];

            $thumbnail = $_SESSION['thumbnail'];




            $sql = "insert into tbl_gallery(type,name,thumbnail)values('$type','$name','$thumbnail')";
            if (mysqli_query($conn, $sql)) {
                echo "Record added successfully.";
            } else {
                echo "Record not added. Error:" . mysqli_error($conn);
            }
        } else {
            echo "Please complete all required fields.";
        }
    }
    //Add Data End  
    //Update Data Start
    else if ($action == "Edit") {
        if ($_POST['name']) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $type = $_POST['type'];
            $thumbnail = $_SESSION['thumbnail'];




            $sql = "update tbl_gallery set type='$type',name='$name',thumbnail='$thumbnail',updated_at=CURRENT_TIMESTAMP() where id='$id';
            ";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully.";
            } else {
                echo "Record not updated. Error:" . mysqli_error($conn);
            }
        } else {
            echo "Please complete all required fields.";
        }
    }
    //Update Data End
    //Delete Data Start
    else if ($action == "Delete") {
        $id = $_POST['id'];

        $sql = "update tbl_gallery set deleted_at=CURRENT_TIMESTAMP() where id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully.";
        } else {
            echo "Record not deleted. Error:" . mysqli_error($conn);
        }
    }
    //Delete Data End
} else {
    echo "Invalid action specified.";
}
mysqli_close($conn);
