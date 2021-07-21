<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
      <img src="logo.png" width="30%">
  <h1 class="text-center my-3"> Upload Your Consent Form</h1>
  <div class="container my-5" style="width:50%">
  
    <form action="insert.php"  enctype="multipart/form-data" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Roll Number</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="roll_no">
        <div class="input-group mb-3 my-2">
          <input type="file" class="form-control" id="file" name="file" required>
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>

        <input type="submit" class="btn btn-primary" value="submit" name="submit">
    </form>
  </div>
</body>

</html>