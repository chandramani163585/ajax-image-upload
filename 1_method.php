<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php 
     
  ?>

   <form id="my_form" method="post" action="http://localhost/debug/ajax.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" name="m_image" id="my_image" placeholder="Please Select Image" aria-describedby="fileHelpId">
        <small id="fileHelpId" class="form-text text-muted">Help text</small>
      </div>

    <div class="form-group" style="width: 300px;">
      <label for=""></label>
      <input type="email" class="form-control" name="m_email" id="" aria-describedby="emailHelpId" placeholder="">
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
      <button id="form_btn_click" type="button">Submit </button>
   </form>

  <script>
   $(document).ready(function (e) {
    $('#my_form').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    $("#form_btn_click").on("click", function() {
        $("#my_form").submit();
    });
});
       
  </script>
   
  </body>
</html>