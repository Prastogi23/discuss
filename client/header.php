<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="./public/img/logo.png" alt="logo" />
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Latest Question</a>
        </li>
        <?php
        // Check if the user is logged in
        if (isset($_SESSION['user']['username'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" href="?ask=true">Ask a Question</a>
          </li>
        <?php 
        }
        ?>
      </ul>
      
      <!-- Center: Search Form -->
      <div class="d-flex mx-auto" style="max-width: 500px; flex-grow: 1; justify-content: center;">
        <form class="d-flex" role="search" style="width: 100%;">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="flex-grow: 1; max-width: 300px;">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

      <!-- Right Side: Login Button -->
      <div class="d-flex">
        <?php
        // Check if the user is logged in
        if (isset($_SESSION['user']['username'])) {
        ?>
          <!-- Logout Button -->
          <a class="btn btn-primary me-3" href="./server/requests.php?Logout=true">LogOut</a>
        <?php 
        } else {
        ?>
          <!-- Login and SignUp Buttons -->
          <a class="btn btn-primary me-3" href="?Login=true">Login</a>
          <a class="btn btn-primary" href="?Signup=true">SignUp</a>
        <?php } ?>
      </div>

    </div>
  </div>
</nav>
