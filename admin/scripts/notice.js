
$(document).ready(function(){


// jQuery ajax form submit example, runs when form is submitted
$("#notice").submit(function(e) {
    e.preventDefault(); // prevent actual form submit
    var form = $(this);
    var url = form.attr('action'); //get submit url [replace url here if desired]
    
    $("#btnAdd").val("Adding...");
    $("#btnAdd").prop('disabled', true);
    setInterval(function () {$("#btnLogin").prop('disabled', false);}, 3000);

    
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes form input
            success: function(data){

                console.log(data);
                $("#btnLogin").val("Add");

                $("#msg").html(data); 
                $("#msg").slideDown("slow");
                $("#msg").slideUp(3000,function(){ 
                if(!(data=="Please complete all required fields."))
                window.location.href="notice-list.php";
                 });
                

            }
        });
    
});

$(".delete").click(function(e) {

    var id= $(this).attr("id");
    var url="notice-action.php";
   
     $.ajax({
            type: "POST",
            url: url,
            data:{'id':id,'action':'Delete'}, // serializes form input
            success: function(data){

                location.reload();
            
            }
        });

});


	
});
 




