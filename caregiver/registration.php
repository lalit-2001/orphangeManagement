<?php include "assest/constant/config.php";?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Register</title>
    <link href="assest/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <!-- <title>Hello, world!</title> -->
  </head>
  <body class="bg-image"
  style="
     height: 100%;
     background-position:center ;
    background-image: url('assest/img/care.jpeg');
    background-size:cover;
    background-repeat: no-repeat;
  ">
     <section class="py-5">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      </div>
      <div class="card" style="width: 100rem;">
            <div class="card-body">
            <h1 class="card-title text-center">Caregiver Details</h1>
            <hr>
           <form class="row" method="POST" action="assest/app/login.php" enctype="multipart/form-data">
                  <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Full name:</label>
              <input type="text" class="form-control" id="name" name="name">
              </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">Email address:</label>
              <input type="email" class="form-control" id="email" name="email">
              </div>
           <div class="mb-3 col-md-6">
              <label for="password" class="form-label">password:</label>
              <input type="password" class="form-control" id="password" name="password">
            </div> 
              <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Address:</label>
              <textarea type="text"  class="form-control" name="address" ></textarea>
          </div>
               <div class="mb-3 col-md-6">
              <label for="number" class="form-label">Phone no:</label>
              <input type="text" class="form-control"  name="number">
              </div>
              
              
            <!-- <div class="mb-3 col-md-6 py-4">
                <select class="form-select" aria-label="Default select example" name="city">
                    <option selected>City</option>
                    <option value="Nashik">Nashik</option>
                     <option value="Pune">Pune</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="Dhule">Dhule</option>
                    <option value="Thane">Thane</option>
                     </select>  
             </div>
                    <div class="mb-3 col-md-6">
                <label for="age" class="form-label">Age:</label>
              <input type="text" class="form-control"  name="age">
             </div> -->
               

             <div class="mb-3 col-md-6">
                  <p>Gende</p>
                  <input type="radio" id="male" name="gender" value="male">
                        <label for="gender">Male</label>
                        <input type="radio" id="Female" name="gender" value="Female">
                        <label for="gender">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="gender">Other</label>
                   </div>
     
               
                     
                     </ul>
                <div>
                        <button type="submit" name="register"  value="add" class="btn btn-primary" > submit</button>
                        <!-- <a href="login.php">back to login</a> -->
                    </div>
                     <div>
                        <label for="text">Already a member</label><button type="submit" class="btn btn-light"> <a href="index.php">Back login</a></button>   

                    </div>
          </form>


          </div>
        </div>
              
            </div>
          </div>
   </section>
   <script src="../assest/js/bootstrap.bundle.min.js" ></script>
   <!-- <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script> -->
 </body>
</html>