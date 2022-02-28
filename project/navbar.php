<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php">Logo</a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>   
        <?php 
        require_once('connection.php');
        $sql = "SELECT * FROM pages";
        $query = mysqli_query( $connect, $sql );
        while( $result = mysqli_fetch_assoc( $query ) ) {
          $page_id = $result['page_id'];
          $page_name = $result['page_name'];
          ?>
          <li class="nav-item">
            <a class="nav-link" href="page.php?page_id=<?php echo $page_id; ?>"><?php echo $page_name; ?></a>
          </li>
          <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link"  href="contact.php">Contact</a>
        </li>
        
        <?php 
        if( ! isset( $_SESSION['email'] ) ) {
          ?>
          <li class="nav-item">
            <a class="nav-link"  href="registration.php">Registration</a>
          </li>
          <?php
        }
        if( isset( $_SESSION['email'] ) ) {
          ?>
          <li class="nav-item">
            <a class="nav-link bg bg-danger text-white"  href="logout.php">Logout</a>
          </li>          
          <?php
        }
        ?>
      </ul>      
    </div>
  </div>
</nav>