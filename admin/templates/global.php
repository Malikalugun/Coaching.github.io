<?php

  include("conn.php");
  $sql_setting="select * from tbl_setting";

  $smt_setting=mysqli_query($conn,$sql_setting);
  $settings=mysqli_fetch_array($smt_setting);

  ?>