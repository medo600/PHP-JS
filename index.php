<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>PHP & JS</title>
  </head>
  <body class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">PHP & JS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php"></a>
        </div>
      </div>
    </nav>
    
    <div class="card" style="margin-top:50px">
      <h5 class="card-header">PHP & JS</h5>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="access">Number 1</label>"
            <input type="number" class="form-control" id="num1" name="num1" onkeyup="add()">
          </div>
          <div class="form-group">
            <label for="access">Number 2</label>"
            <input type="number" class="form-control" id="num2" name="num2" onkeyup="add()">
          </div>
          <div class="form-group">
            <label for="access">Result</label>
            <input type="number" class="form-control" id="res" name="res">
          </div>
         
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
      <script> 
      function add(){
            var num1 = document.getElementById("num1").value;
            var num2 = document.getElementById("num2").value;
            var res = +num1 + +num2;
            document.getElementById("res").value = res;
      }
    </script>
  </body>
</html>