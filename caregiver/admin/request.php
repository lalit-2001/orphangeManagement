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
    
<section class="py-5">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      </div>
      <div class="card" style="width: 100rem;">
            <div class="card-body">
            <h1 class="card-title text-center">Adoption request</h1>
            <hr>
           <form class="row" method="POST" action="app/data.php" enctype="multipart/form-data">
                  <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Full name:</label>
              <input type="text" class="form-control" id="name" name="name">
              </div>
            
              <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Address:</label>
              <textarea type="text"  class="form-control" name="address" ></textarea>
          </div>
               <div class="mb-3 col-md-6">
              <label for="number" class="form-label">Phone no:</label>
              <input type="text" class="form-control"  name="number">
              </div>
              
              
            <div class="mb-3 col-md-6 py-4">
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected>Status</option>
                    <option value="single">single</option>
                     <option value="married">married</option>
                    <option value="divorce">divorce</option>
                    <option value="other">other</option>
                    
                     </select>  
             </div>
                     <div class="mb-3 col-md-6 py-5">
                        <label for="registation">Registation Date</label>
                        <input type="date" id="date" name="date">
                        </div>
               

            
               
                     
                     </ul>
                <div>
                        <button type="submit" name="request"  value="add" class="btn btn-primary" >Request</button>
                      
                    </div>
                    <!--  <div>
                        <label for="text">Already a member</label><button type="submit" class="btn btn-light"> <a href="login.php">Back login</a></button>   

                    </div> -->
          </form>


          </div>
        </div>
              
            </div>
          </div>
   </section>

<script src="../assest/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>