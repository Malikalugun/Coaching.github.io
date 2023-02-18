$(document).ready(function () {
  $(".block").click(function (e) {
    var cid = $(this).attr("cid");
    var url = "customer-action.php";

    $.ajax({
      type: "POST",
      url: url,
      data: { cid: cid, action: "Block" }, // serializes form input
      success: function (data) {
        location.reload();
      },
    });
  });
  $(".unblock").click(function (e) {
    var cid = $(this).attr("cid");
    var url = "customer-action.php";

    $.ajax({
      type: "POST",
      url: url,
      data: { cid: cid, action: "unBlock" }, // serializes form input
      success: function (data) {
        location.reload();
      },
    });
  });
});
