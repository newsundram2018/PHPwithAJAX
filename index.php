<html>

<head>
  <title>Form submit without refresh</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest Compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!--jquery library-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!--Notification Library-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
<div class="container mt-5">

  <h1 class="display-4"> PHP with Ajax</h1>
  <div class="row">
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <form method="post" action="" id="contactform">
          <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name">
      </div>
          <div class="form-group">
        <label for="email">City:</label>
        <input type="text" class="form-control" id="city">
      </div>
          <div class="form-group">
        <label for="message">Occupation</label>
        <textarea name="message" class="form-control" id="occupation"></textarea>
      </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="result">

</div>
    <!--Showing data div-->
    <div class="col-6">
      <div class="card"> 
        <div class="card-body">
          <div id="getdata">
            
          </div>
        </div>
      </div>
    </div>
</div>  
</body>
<script>
  $(document).ready(function () {
    $('.btn-primary').click(function (e) {
      e.preventDefault();
      var name = $('#name').val();
      var city = $('#city').val();
      var occupation = $('#occupation').val();
      
      $.ajax
        ({
          type: "POST",
          url: "form_submit.php",
          data: { "name": name, "city": city, "occupation": occupation },
          success: function (data) {
            $('.result').html(data);
            toastr.success("Record Inserted Succesfully" ,'Success' ,{timeout:2000});
            
            $('#contactform')[0].reset();

            getdata();
          }

          
        });

        //getdata
        function getdata(){
          $.ajax({
            url:'getdata.php',
            success:function(response){
              $('#getdata').html(response);
            },
            error:function(){
              toastr.error("There is some error" ,'Error' ,{timeout:2000});
            }

            });
        }

    });
  });
</script>
</html>