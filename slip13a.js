$(document).ready(function() {
    $("#name").keyup(function() {
      var name = $(this).val();
      if (name != "") {
        $.get("slip13a.php", {name: name}, function(response) {
          $("#response").text(response);
        });
      } else {
        $("#response").text("Stranger, please tell me your name.");
      }
    });
  });
  
  