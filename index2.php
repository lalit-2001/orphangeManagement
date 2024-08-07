<?php
session_start();

include("admin/app/dbconnection.php");
if(isset($_POST['g-recaptcha-response'])){
    $secret="6LcOsj8pAAAAAKEo4L_z3F7jCR_De5rZmnf8O1IJ";
    $ip=$_SERVER['REMOTE_ADDR'];
    $response=$_POST['g-recaptcha-response'];
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip";
    $fire= file_get_contents($url);
      // print_r($fire);
  $data=json_decode($fire);
  // print_r($data); exit;
  if($data->success== true){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['admin_login'])) {
        // Handle Admin Login
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Add your admin login validation logic here
        // For example:
        if ($email === 'lalit@gmail.com' && $password === '1234') {
         
            header('Location: admin/manage.php');
            exit();
        } else {
            echo '<script>alert("Invalid admin credentials");</script>';
        }
    }
}
  }
}
  


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container overflow-hidden center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
           
                <div class="login-form">
                    <!-- Nav tabs -->
                    <img src="assets/img/logo.png" class="rounded mx-auto d-block" style="width:200px">
                    <ul class="nav nav-tabs" id="loginTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin" role="tab"
                                aria-controls="admin" aria-selected="true">Admin Login</a>
                                 
                       
                        </li>
                      
                        
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-3" id="loginTabsContent">
                        <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                            <form method="post">
                                <div class="form-group">
                                    <label for="admin-email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="admin-email"
                                        placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="admin-password">Password</label>
                                    <input type="password" class="form-control" name="password" id="admin-password"
                                        placeholder="Password" required>
                                    <div class="g-recaptcha mt-2"
                                        data-sitekey="6LcOsj8pAAAAAEy2HblqrqjfRssVNSnRKRPnOvBY"></div>
                                </div>
                                <button type="submit" name="admin_login" class="btn btn-primary">Login as Admin</button>
                                </form>
                                
                           
                            <a href="caregiver/index.php" class="btn btn-primary" role="button">Caregiver
                                Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // Activate the tabs
        $(document).ready(function () {
            $('#loginTabs a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        });
    </script>
</body>

</html>
