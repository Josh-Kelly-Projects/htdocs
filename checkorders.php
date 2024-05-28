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
    <title>biodx eccommerse check orders</title>
</head>

<body>



    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <!-- Input field for username -->
            <div class="col-md-6">
                <input type="text" id="username" class="form-control" placeholder="Enter Username">
            </div>
            <!-- Button to populate cards -->
            <div class="col-md-6">
                <button id="populateBtn" class="btn btn-primary">Populate Cards</button>
            </div>
        </div>

        <!-- Card container -->
        <div id="cardContainer" class="row mt-3"></div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        // Function to populate cards
        function populateCards() {
            var username = $('#username').val(); // Get the value of the username input field

            $.ajax({
                url: 'getcardsfororders.php', // PHP script to fetch cards
                type: 'GET',
                data: { username: username }, // Send the username as a parameter
                success: function (response) {
                    $('#cardContainer').html(response); // Append cards to card container
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Event listener for button click
        $('#populateBtn').click(function () {
            populateCards();
        });
    </script>

</body>

</html>