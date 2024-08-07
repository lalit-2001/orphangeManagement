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
    <title>Edit Patient</title>
  </head>
  <body>
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
                  <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i>profile</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa fa-key"></i>change password</a></li>
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
                 <form class="row" action="../assest/app/login.php" method="POST" enctype="multipart/form-data">
                           <?php
                             //print_r($_GET); exit;
                             $sql="SELECT * FROM `care`";
                              $stmt=$conn->prepare($sql);
                             $stmt->execute();
                              $record=$stmt->fetchAll();
                              // print_r($record);exit;
                              foreach($record as $key)
                              {
                           
                          ?> 

                          <input type="hidden" class="form-control" name="id" value="<?php echo $key['id']?>">
                                        
                            <div class="mb-3 col-md-6">
                              <label for="name" class="form-label"> Name</label>
                              <input type="text" class="form-control" name="name" value="<?php echo $key['name'];?>">
                              
                            </div>
                            <div class="mb-3  col-md-6">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" value="<?php echo $key['email'];?>">
                              </div>
                            
                           <div class="mb-3 col-md-6">
                                <label for="password" class="form-label">password</label>
                              <input type="hidden" class="form-control" id="password" name="old_pass" value="<?php echo $key['password'];?>">
                               <input type="password" class="form-control" id="password" name="password" value="<?php echo $key['password'];?>">
                                </div>

                               <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address:</label>
                            <textarea type="text"  class="form-control" name="address" value="<?php echo $key['address'];?>" ></textarea>
                        </div>
                           <!--   <div class="mb-3 col-md-6">
                            <label for="number" class="form-label">Phone no:</label>
                            <input type="text" class="form-control"  name="number" value="<?php echo $key['number'];?>">
                            </div> -->
                            
                            <div class="col-md-12">
                            <button type="submit" name="edit" class="btn btn-primary">update</button>
                             <a href="index.php">Back</a>
                            </div>
                           <?php }?>

                          </form>
                            </div>
                          </section>
    <script src="../assest/js/bootstrap.bundle.min.js" ></script>

</body>
</html>