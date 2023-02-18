<?php
include("conn.php");
session_start();
if ($_POST['action']) {
    $action = $_POST['action'];
    //Add Data Start
    if ($action == "Add") {
        if ($_POST['name']) {
            $description = $_POST['description'];
            $name = $_POST['name'];
            $bio = $_POST['bio'];
            $team_photo = $_SESSION['team_photo'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];




            $sql = "insert into tbl_teams(description,name,bio,team_photo,phone,email)values('$description','$name','$bio','$team_photo','$phone','$email')";
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
        if ($_POST['description']) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $bio = $_POST['bio'];
            $team_photo = $_SESSION['team_photo'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];




            $sql = "update tbl_teams set description='$description',name='$name',bio='$bio',team_photo='$team_photo',phone='$phone',email='$email',updated_at=CURRENT_TIMESTAMP() where id='$id';
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

        $sql = "update tbl_teams set deleted_at=CURRENT_TIMESTAMP() where id='$id'";
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
