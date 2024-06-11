<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="Styles/Stylesheet.css">
  <title>biodx eccommerse checkout</title>
</head>

<body>



  <?php include 'navbar.php'; ?>

  <div class="input-group mb-3">
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username"
      aria-describedby="basic-addon1">
  </div>

  <div class="input-group mb-3">
    <input type="text" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password"
      aria-describedby="basic-addon1">
  </div>

  <form action="addemployee.php" method="post">
    <input type="hidden" name="username" value="" id="hidden-username">
    <input type="hidden" name="password" value="" id="hidden-password">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php include 'footer.php'; ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
<script>
    // JavaScript to set hidden input values before form submission
    document.querySelector('form').addEventListener('submit', function (event) {
        // Get username and password values from input fields
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Set the values to the hidden input fields
        document.getElementById('hidden-username').value = username;
        document.getElementById('hidden-password').value = password;
    });
</script>
</html>