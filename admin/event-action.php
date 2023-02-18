<?php
include("conn.php");
session_start();
if ($_POST['action']) {
    $action = $_POST['action'];
    //Add Data Start
    if ($action == "Add") {
        if ($_POST['title']) {
            $title = $_POST['title'];
            $date_event = $_POST['date_event'];
            $description = $_POST['description'];
            $location = $_POST['location'];
            $image_url = $_SESSION['image_url'];




            $sql = "insert into tbl_event(title,date_event,description,location,image_url)values('$title','$date_event','$description','$location','$image_url')";
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
            $date_event = $_POST['date_event'];
            $description = $_POST['description'];
            $location = $_POST['location'];
            $image_url = $_SESSION['image_url'];




            $sql = "update tbl_event set title='$title',date_event='$date_event',description='$description',location='$location',image_url='$image_url',updated_at=CURRENT_TIMESTAMP() where id='$id';
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

        $sql = "update tbl_event set deleted_at=CURRENT_TIMESTAMP() where id='$id'";
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
