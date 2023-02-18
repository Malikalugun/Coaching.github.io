<?php
include("conn.php");
if ($_POST['action']) {
    $action = $_POST['action'];
    //Add Data Start
    if ($action == "Add") {
        if ($_POST['video']) {
            $group_id = $_POST['group_id'];

            $title = $_POST['title'];
            $video = $_POST['video'];

            $sql = "insert into tbl_video(group_id,title,video)values('$group_id','$title','$video')";
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
        if ($_POST['video']) {
            $id = $_POST['id'];
            $group_id = $_POST['group_id'];

            $title = $_POST['title'];
            $video = $_POST['video'];

            $sql = "update tbl_video set group_id='$group_id',title='$title', video='$video',updated_at=CURRENT_TIMESTAMP() where id='$id'";
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

        $sql = "update tbl_video set deleted_at=CURRENT_TIMESTAMP() where id='$id'";
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
