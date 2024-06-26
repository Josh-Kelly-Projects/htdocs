


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="./Images/biodx logo.jpg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <?php if (isset($_SESSION['username'])): ?>

          <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
            <?php session_destroy(); ?>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="checkorders.php">Check your orders</a>
        </li>
      </ul>
    </div>
  </div>
</nav>