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
    <title>biodx eccommerse home</title>
</head>

<body>
    <h1>
        <label>Administrator Access</label>
    </h1>

    <div class="container" style="padding: 40px;">
        <div class="cointainer-fluid">
            <div class="row">
                <!-- add employee  -->
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Add an employee</h5>

                            <div class="input-group mb-3">
                                <input type="text" id="username" name="username" class="form-control"
                                    placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" id="password" name="password" class="form-control"
                                    placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                            </div>

                            <form action="addemployee.php" method="post" id="employee-btn">
                                <input type="hidden" name="username" value="" id="hidden-username">
                                <input type="hidden" name="password" value="" id="hidden-password">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- add product  -->
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Add a Product</h5>

                            <div class="input-group mb-3">
                                <input type="text" id="productname" name="productname" class="form-control"
                                    placeholder="Product Name" aria-label="productname" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" id="productdescription" name="productdescription" class="form-control"
                                    placeholder="Description" aria-label="productdescription" aria-describedby="basic-addon1">
                            </div>

                            <form action="addproduct.php" method="post" id="product-btn">
                                <input type="hidden" name="productname" value="" id="hidden-productname">
                                <input type="hidden" name="productdescription" value="" id="hidden-productdescription">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- add product sku  -->
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Add a Product SKU</h5>

                            <div class="input-group mb-3">
                                <input type="text" id="concentration" name="concentration" class="form-control"
                                    placeholder="Concentration" aria-label="concentration" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" id="skudescription" name="skudescription" class="form-control"
                                    placeholder="Description" aria-label="skudescription" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" id="productid" name="productid" class="form-control"
                                    placeholder="Product ID" aria-label="productid" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" id="cost" name="cost" class="form-control"
                                    placeholder="Cost per Ton" aria-label="cost" aria-describedby="basic-addon1">
                            </div>

                            <form action="addproductsku.php" method="post" id="sku-btn">
                                <input type="hidden" name="concentration" value="" id="hidden-concentration">
                                <input type="hidden" name="skudescription" value="" id="hidden-skudescription">
                                <input type="hidden" name="productid" value="" id="hidden-productid">
                                <input type="hidden" name="cost" value="" id="hidden-cost">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- add payment  -->
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Add a Payment</h5>

                            <div class="input-group mb-3">
                                <input type="text" id="orderid" name="orderid" class="form-control"
                                    placeholder="Order ID" aria-label="orderid" aria-describedby="basic-addon1">
                            </div>

                            <form action="addpayment.php" method="post" id="payment-btn">
                                <input type="hidden" name="orderid" value="" id="hidden-orderid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Style for the button */
        button {
            /* Make the button display inline */
            display: inline-block;
            /* Add padding for good spacing */
            padding: 10px 20px;
            /* Set background colour to blue */
            background-color: blue;
            /* Set text color to white */
            color: white;
            /* Remove border */
            border: none;
            /* Remove default text underline */
            text-decoration: none;
            /* Set font size */
            font-size: 16px;
        }
    </style>
    <script>
        function goHome() {
            // Redirect to home
            window.location.href = 'home.php';
        }
    </script>
    <div>
        <button onclick="goHome()">Return Home</button>
    </div>




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

<!-- add employee  -->
<script>
    // JavaScript to set hidden input values before form submission
    document.getElementById('employee-btn').addEventListener('submit', function (event) {
        // Get username and password values from input fields
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Set the values to the hidden input fields
        document.getElementById('hidden-username').value = username;
        document.getElementById('hidden-password').value = password;
    });
</script>
<!-- add product  -->
<script>
    // JavaScript to set hidden input values before form submission
    document.getElementById('product-btn').addEventListener('submit', function (event) {
        // Get username and password values from input fields
        var productname = document.getElementById('productname').value;
        var productdescription = document.getElementById('productdescription').value;

        // Set the values to the hidden input fields
        document.getElementById('hidden-productname').value = productname;
        document.getElementById('hidden-productdescription').value = productdescription;
    });
</script>
<!-- add product sku  -->
<script>
    // JavaScript to set hidden input values before form submission
    document.getElementById('sku-btn').addEventListener('submit', function (event) {
        // Get username and password values from input fields
        var concentration = document.getElementById('concentration').value;
        var skudescription = document.getElementById('skudescription').value;
        var productid = document.getElementById('productid').value;
        var cost = document.getElementById('cost').value;

        // Set the values to the hidden input fields
        document.getElementById('hidden-concentration').value = concentration;
        document.getElementById('hidden-skudescription').value = skudescription;
        document.getElementById('hidden-productid').value = productid;
        document.getElementById('hidden-cost').value = cost;
    });
</script>
<!-- add payment  -->
<script>
    // JavaScript to set hidden input values before form submission
    document.getElementById('payment-btn').addEventListener('submit', function (event) {
        // Get username and password values from input fields
        var orderid = document.getElementById('orderid').value;

        // Set the values to the hidden input fields
        document.getElementById('hidden-orderid').value = orderid;
    });
</script>

</html>