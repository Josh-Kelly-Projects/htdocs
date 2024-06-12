<?php

// Check if product ID is set in the URL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data using $_POST superglobal
  $productskuid = $_POST["productskuid"];

} else {
  // Redirect if feilds not set
  header("Location: error.php");
  exit;
}
?>

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

  <div class="container" style="padding: 40px;">
    <div class="cointainer-fluid">
      <div class="row justify-content-center">
        <!-- checkout -->
        <div class="col-sm-3">
          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">Place Your Order</h5>

              <div class="input-group mb-3">
                <input type="text" id="username" name="username" class="form-control" placeholder="Username"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <input type="date" id="devdate" name="devdate" class="form-control" aria-label="devdate"
                  aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <input type="text" id="ordersize" name="ordersize" class="form-control" placeholder="Amount to Purchase"
                  aria-label="ordersize" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <input type="text" id="address" name="address" class="form-control" placeholder="Adress to Deliver to"
                  aria-label="address" aria-describedby="basic-addon1">
              </div>

              <form action="purchasecomplete.php" method="post" id="addorder-btn">
                <input type="hidden" name="productskuid" value= "<?php echo htmlspecialchars($productskuid); ?>" id="hidden-productskuid">
                <input type="hidden" name="username" value="" id="hidden-username">
                <input type="hidden" name="devdate" value="" id="hidden-devdate">
                <input type="hidden" name="ordersize" value="" id="hidden-ordersize">
                <input type="hidden" name="address" value="" id="hidden-address">
                <button type="submit" class="btn btn-primary">Place Order</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
<!-- Place the order  -->
<script>
  // JavaScript to set hidden input values before form submission
  document.getElementById('addorder-btn').addEventListener('submit', function (event) {
    // Get username and password values from input fields
    var username = document.getElementById('username').value;
    var devdate = document.getElementById('devdate').value;
    var ordersize = document.getElementById('ordersize').value;
    var address = document.getElementById('address').value;

    // Set the values to the hidden input fields
    document.getElementById('hidden-username').value = username;
    document.getElementById('hidden-devdate').value = devdate;
    document.getElementById('hidden-ordersize').value = ordersize;
    document.getElementById('hidden-address').value = address;
  });
</script>

</html>