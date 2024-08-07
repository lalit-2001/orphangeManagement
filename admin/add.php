<link href="../assets/css/popup_style.css" rel="stylesheet">
<?php
include("app/dbconnection.php");
// include("admin/app/crud.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_FILES['img']['name']);die;
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender=$_POST['gender'];
    $status = $_POST['status'];
   
 
   


    $checkQuery = "SELECT * FROM childdata WHERE id = :name";
    $stmt = $conn->prepare($checkQuery);
    // var_dump($stmt);die;
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $checkResult = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($checkResult) {
        echo "<script>alert('name already exists. Please use a different name.')</script>";
    } else {

        $insertQuery = "INSERT INTO childdata(name, age,gender,status) VALUES (:name, :age,:gender,:status)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':status', $status);
        
        
        if ($stmt->execute()) {
           
            ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
        <h3 class="popup__content__title">Success</h3>
        <p>Child Added Successfully</p>
        <p>
            <?php echo "<script>setTimeout(\"location.href = 'manage.php';\",1500);</script>"; ?>
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
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <h2 class="text-center mb-4">Child Registration form</h2>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="age" class="form-control" name="age" placeholder="Enter your email">
                    </div>
                   
                    
                    <div class="form-group">
                        <label>Select Gender :</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                   
                        <div class="form-group">
                            <label for="textarea">Health status :</label>
                            <div class="form-floating  ">
                                <textarea class="form-control" placeholder="Leave a comment here" name="status">
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