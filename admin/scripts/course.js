$(document).ready(function () {
  //Upload image_url

  $(document).on("change", "#image_url", function () {
    var name = document.getElementById("image_url").files[0].name;
    var form_data = new FormData();
    var ext = name.split(".").pop().toLowerCase();
    if (jQuery.inArray(ext, ["pdf", "jpeg", "jpg", "png"]) == -1) {
      alert("Invalid Image File");
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image_url").files[0]);
    var f = document.getElementById("image_url").files[0];
    var fsize = f.size || f.fileSize;
    if (fsize > 20000000) {
      alert("Image File Size is very big");
    } else {
      form_data.append(
        "image_url",
        document.getElementById("image_url").files[0]
      );

      $.ajax({
        url: "upload.php",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
          $("#uploaded_thumbnail").html(
            "<label class='text-success'>Uploading...</label>"
          );
        },
        success: function (data) {
          $("#uploaded_thumbnail").html(data);
        },
      });
    }
  });

  //-----------------------------------image_url ---------------------------------------

  // jQuery ajax form submit example, runs when form is submitted
  $("#course").submit(function (e) {
    e.preventDefault(); // prevent actual form submit
    var form = $(this);
    var url = form.attr("action"); //get submit url [replace url here if desired]

    $("#btnAdd").val("Adding...");
    $("#btnAdd").prop("disabled", true);
    setInterval(function () {
      $("#btnLogin").prop("disabled", false);
    }, 3000);

    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize(), // serializes form input
      success: function (data) {
        console.log(data);
        $("#btnLogin").val("Add");

        $("#msg").html(data);
        $("#msg").slideDown("slow");
        $("#msg").slideUp(9000000, function () {
          if (!(data == "Please complete all required fields."))
            window.location.href = "course-list.php";
        });
      },
    });
  });

  $(".delete").click(function (e) {
    var id = $(this).attr("id");
    var url = "course-action.php";

    $.ajax({
      type: "POST",
      url: url,
      data: { id: id, action: "Delete" }, // serializes form input
      success: function (data) {
        location.reload();
      },
    });
  });
});
