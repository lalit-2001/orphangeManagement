
 <?php include"assest/constant/config.php";?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>forgot password</title>
    <link href="assest/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
     <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>
<body>
    

<div class="container">
    <div></div>
    
    <div class="row justify-content-md-center">
        <div class="col-md-5">
                       <!-- phpcode -->
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title text-center">Sign in your account</h5> -->
                    <!-- <hr> -->
                    <form method="POST" action="assest/app/forgotdata.php">
                       




                        <h1 class="text-center bg-light" > forgot password</h1>
                         <hr>
                         <!-- <input type="hidden" class="form-control" name="id" value=""> -->
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" value="" placeholder="input email" required>
                        </div>
                       

                    <hr> 
                    <div >
                        <button type="submit" class="btn btn-primary" name="forget">Update</button><br>
                        <a href="index.php">Back login</a>
                        <!-- <a href="forgot.php">forgot password</a>  -->
                    </div>
                 

                    <!-- <div>
                        <label for="text">Not Have Account</label><button type="submit" class="btn btn-light"> <a href="register.php">Register here</a></button>   

                    </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
      <script src="assest/js/bootstrap.bundle.min.js"></script>
</body>
</html>