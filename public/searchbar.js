function fill(Value) {
   $('#search').val(Value);
   $('#suggestions').hide();
}

$(document).ready(function() {
   $("#search").keyup(function() {
       var name = $('#search').val();
       if (name == "") {
           $("#suggestions").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",
               data: {
                   search: name
               },
               success: function(html) {
                   $("#suggestions").html(html).show();
               }
           });
       }
   });
});