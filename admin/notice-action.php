<?php
include("conn.php");
if ($_POST['action']) {
  $action = $_POST['action'];
  //Add Data Start
  if ($action == "Add") {
    if ($_POST['notice']) {
      $type = $_POST['type'];
      $notice_date = $_POST['notice_date'];
      $title = $_POST['title'];
      $notice = $_POST['notice'];

      $sql = "insert into tbl_notice_board(type,notice_date,title,notice)values('$type','$notice_date','$title','$notice')";
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
    if ($_POST['notice']) {
      $id = $_POST['id'];
      $type = $_POST['type'];
      $notice_date = $_POST['notice_date'];
      $title = $_POST['title'];
      $notice = $_POST['notice'];

      $sql = "update tbl_notice_board set type='$type',notice_date='$notice_date',title='$title', notice='$notice',updated_at=CURRENT_TIMESTAMP() where id='$id'";
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

    $sql = "update tbl_notice_board set deleted_at=CURRENT_TIMESTAMP() where id='$id'";
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
