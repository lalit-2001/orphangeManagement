

 <!-- <?php include"assest/constat/config.php";?>  --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>caregiver</title>
    <link href="assest/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body  class="bg-image"
  style="
    height: 100%;
     background-position:center ;
    background-image: url('assest/img/care.jpeg');
    background-size:cover;
    background-repeat: no-repeat;
  ">
    

<div class="container">
    <div></div>
    
    <div class="row justify-content-md-center">
        <div class="col-md-5 py-5">
                       <!-- phpcode -->
            <div class="card ">
                <div class="card-body">
                    <!-- <h5 class="card-title text-center">Sign in your account</h5> -->
                    <!-- <hr> -->
                    <form method="POST" action="assest/app/login.php">
                        <h1 class="text-center bg-light"  > caregiver Login</h1>
                            <hr>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" value="" placeholder="input email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password" value="" placeholder="input password" required>
                        </div>
                      <!-- <div class="g-recaptcha" data-sitekey="6Lf-FkIpAAAAALjOKggHj7aiCfIOL6f1SYf7CAgZ"></div> -->

                    <hr> 
                    <div >
                        <button type="submit" class="btn btn-primary" name="login"> Login</button>
                        <a href="forgot.php">forgot password</a> 
                    </div>
                    <div>
                        <label for="text">Not Have Account</label><button type="submit" class="btn btn-light"> <a href="registration.php">Register here</a></button>   

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      <script src="assest/js/bootstrap.bundle.min.js"></script>
</body>
</html>