 <?php include"../assest/constant/config.php";
  include"../assest/constant/check.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>caregiver</title>
  </head>
  <body >
    <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="../assest/img/care1.png" width="70px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="overview.php">Child Overview</a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="adopt.php">Adoption Request</a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="expense.php">Expense</a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="report.php">report</a>
      </li>
         
        </ul>
      <form class="d-flex">
       <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <img src="../assest/img/care2.png" width="50px">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="edit.php"><i class="fa fa-user"></i>profile</a></li>
            <li><a class="dropdown-item" href="../forgot.php"><i class="fa fa-key"></i>change password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out"></i>logout</a></li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</nav>
</header>
<section>
  <div class="py-5">
  <img src="../assest/img/care3.png"  class="rounded mx-auto d-block" alt="Big Heart Orphanage" width="500" height="105">
</div>
</section>
<section class="py-5 px-5 my-5">

      <div class="row justify-content-md-center">
        <div class="col-md-4 fs-2">
          <img src="../assest/img/bigheart.jpeg" class="d-block w-100" alt="..." height ="500px">
        </div>
           
            <div class="card" style="width: 30rem;">
        <div class="card-body text-center py-5 mt-5" >
          <h4 class="card-title text-center fs-2 font-weight-bold text-danger">MISSION STATEMENT</h5>
          <h6 class="card-subtitle mb-2 text-muted fs-3"></h6>
          <p class="card-text font-weight-bold py-3">"Big Heart exists to be a Christ centered home for the fatherless. We aim to give each child every opportunity to reach their full potential. Equipping them with the knowledge and abilities they need to ensure a great future."</p>
        
        </div>
      </div>
    
    </div>
    </section>




  <script src="../assest/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>