<link href="../assets/css/popup_style.css" rel="stylesheet">
<?php
include("app/dbconnection.php");
// include("admin/app/crud.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $status = $_POST['a_status'];
   
 
   


    $checkQuery = "SELECT * FROM adoptdata WHERE id = :name";
    $stmt = $conn->prepare($checkQuery);
    // var_dump($stmt);die;
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $checkResult = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($checkResult) {
        echo "<script>alert('name already exists. Please use a different name.')</script>";
    } else {

        $insertQuery = "INSERT INTO adoptdata(name,relation,a_status) VALUES (:name, :relation,:a_status)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':relation', $relation);
        $stmt->bindParam(':a_status', $status);
        
        
        if ($stmt->execute()) {
           
            ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
        <h3 class="popup__content__title">Success</h3>
        <p>Added Successfully</p>
        <p>
            <?php echo "<script>setTimeout(\"location.href = 'adoption.php';\",1500);</script>"; ?>
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
                <form action="adoption-add.php" method="post" enctype="multipart/form-data">
                    <h2 class="text-center mb-4">Adoption Registration form</h2>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="text">Realation with child</label>
                        <input type="text" class="form-control" name="relation" placeholder="Enter your email">
                    </div>
                   
                    
                    <div class="form-group">
                        <label>Adoption status :</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="a_status" id="male" value="adopted">
                            <label class="form-check-label" for="adopted">Adopted</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="a_status" id="female" value="In process">
                            <label class="form-check-label" for="female">In process</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="a_status" id="other" value="Not adopted">
                            <label class="form-check-label" for="other">Not adopted</label>
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