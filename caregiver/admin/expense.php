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
<section class="py-5">
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-12">
      </div>
      <div class="card" style="width: 50rem;">
            <div class="card-body ">
            <h1 class="card-title text-center">Expense</h1>
            <hr>
           <form class="row" method="POST" action="app/data.php" enctype="multipart/form-data">
                  <div class="mb-3 col-md-6">
              <label for="etype" class="form-label">Expense type</label>
              <input type="text" class="form-control" id="name" name="etype">
              </div>
               <div class="mb-3 col-md-6">
              <label for="amount" class="form-label">amount</label>
              <input type="text" class="form-control" id="name" name="amount">
              </div>
             
             
                     <div class="mb-3 col-md-6 py-5">
                        <label for="registation"> Date</label>
                        <input type="date" id="date" name="date">
                        </div>
                         </ul>
                <div>
                        <button type="submit" name="submit"  value="add" class="btn btn-primary" >submit</button>
                      
                    </div>
                   </form>


          </div>
        </div>
              
            <!-- </div> -->
          </div>
   </section>
<script src="../assest/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>