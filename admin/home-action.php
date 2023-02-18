<?php
include("conn.php");
session_start();
if ($_POST['action']) {
    $action = $_POST['action'];
    //Add Data Start
    if ($action == "Add") {
        if ($_POST['title']) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image_url = $_SESSION['image_url'];
            $order_item = $_POST['order_item'];



            $sql = "insert into tbl_home(title,description,image_url,order_item)values('$title','$description','$image_url','$order_item')";
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
        if ($_POST['title']) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image_url = $_SESSION['image_url'];
            $order_item = $_POST['order_item'];



            $sql = "update tbl_home set title='$title',description='$description',image_url='$image_url',order_item='$order_item',updated_at=CURRENT_TIMESTAMP() where id='$id';
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

        $sql = "update tbl_home set deleted_at=CURRENT_TIMESTAMP() where id='$id'";
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
