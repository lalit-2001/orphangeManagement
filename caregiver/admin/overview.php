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
        <div class="row">
          <div class="col-md-12">
              <?php

              ?>
              <div class="card">
            <h5 class="card-header text-center">children overview</h5>
            <div class="card-body">

                  <table class="table table-bordered display" id="example">
                    <thead>
                      <tr>
                       
                        <th>name</th>
                        <th >age</th>
                       <th >gender</th>
                          <th >hstatus</th>
                         <th >action</th>

                      </tr>
                    </thead>
                    <tbody>
                       <?php


                     $sql="SELECT * FROM `child`";
                  $stmt= $conn->prepare($sql);
                  $stmt->execute();
                  $record=$stmt->fetchAll();
                  // print_r($record);exit;
                  foreach($record as $key){
                 ?>
                    <tr>
                      <td ><?php echo $key['name'];?></td>
                      <td><?php echo $key['age'];?></td>
                      <td><?php echo $key['gender'];?></td> 
                     <td><?php echo $key['hstatus'];?></td> 



                         
                      <td>
                        <a class="btn btn-primary" href="request.php" role="button">Adopt</a>
                        <!-- <a href="request.php?edit_id=<?php echo $key['id'];?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                       <a href="app/data.php?del_id=<?php echo $key['id'];?>"
                        onclick="return confirm('Are you sure you want to delete?');"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --></td>
                    </tr>
                  
                   <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>


            </div>
            </div>
          </div>
   </section>
 <script src="../assest/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>