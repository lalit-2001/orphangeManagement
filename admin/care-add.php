<link href="../assets/css/popup_style.css" rel="stylesheet">
<?php
include("app/dbconnection.php");
// include("admin/app/crud.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_FILES['img']['name']);die;
    $cname = $_POST['c_name'];
    $ccontact = $_POST['c_contact'];
    $caddress=$_POST['c_address'];
   
   
 
   


    $checkQuery = "SELECT * FROM caredata WHERE id = :c_name";
    $stmt = $conn->prepare($checkQuery);
    // var_dump($stmt);die;
    $stmt->bindParam(':c_name', $cname);
    $stmt->execute();
    $checkResult = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($checkResult) {
        echo "<script>alert('name already exists. Please use a different name.')</script>";
    } else {

        $insertQuery = "INSERT INTO caredata(c_name,c_contact,c_address) VALUES (:c_name, :c_contact,:c_address)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bindParam(':c_name', $cname);
        $stmt->bindParam(':c_contact', $ccontact);
        $stmt->bindParam(':c_address',$caddress);
      
         if ($stmt->execute()) {
           
            ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
        <h3 class="popup__content__title">Success</h3>
        <p>Caregiver Added Successfully</p>
        <p>
            <?php echo "<script>setTimeout(\"location.href = 'care-manage.php';\",1500);</script>"; ?>
        </p>
    </div>
</div>
<?php
            exit();
        } else {
            echo "<script>alert('Registration unsuccessful')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/app/css/popup_style.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="care-add.php" method="post" >
                    <h2 class="text-center mb-4">Caregiver's Registration form</h2>
                    <div class="form-group">
                        <label for="c_name">Name</label>
                        <input type="text" class="form-control" name="c_name" placeholder="Enter  name">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="contact" class="form-control" name="c_contact" placeholder="Enter  contact">
                    </div>
                        <div class="form-group">
                            <label for="textarea">Address:</label>
                            <div class="form-floating  ">
                                <textarea class="form-control" placeholder="Leave a comment here" name="c_address">
                        </textarea>
                            </div>

                        </div>
                        <button type="submit" name="add_user" class="btn btn-primary btn-block"> Register</button>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (if needed) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery (required for Bootstrap JS) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>