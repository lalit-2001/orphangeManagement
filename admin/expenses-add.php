<link href="../assets/css/popup_style.css" rel="stylesheet">
<?php
include("app/dbconnection.php");
// include("admin/app/crud.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $type = $_POST['e_type'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
   
 
   


    $checkQuery = "SELECT * FROM expenses WHERE id = :e_type";
    $stmt = $conn->prepare($checkQuery);
    // var_dump($stmt);die;
    $stmt->bindParam(':e_type', $type);
    $stmt->execute();
    $checkResult = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($checkResult) {
        echo "<script>alert('name already exists. Please use a different name.')</script>";
    } else {

        $insertQuery = "INSERT INTO expenses(e_type,amount,date) VALUES (:e_type, :amount,:date)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bindParam(':e_type', $type);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':date', $date);
        
        
        if ($stmt->execute()) {
           
            ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
        <h3 class="popup__content__title">Success</h3>
        <p>Added Successfully</p>
        <p>
            <?php echo "<script>setTimeout(\"location.href = 'expenses.php';\",1500);</script>"; ?>
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
                <form action="expenses-add.php" method="post" enctype="multipart/form-data">
                    <h2 class="text-center mb-4">Expenses Registration form</h2>
                    <div class="form-group">
                        <label for="e_type">Expense Type:</label>
                        <input type="text" class="form-control" name="e_type" placeholder="Enter type">
                    </div>
                    <div class="form-group">
                        <label for="text">Amount</label>
                        <input type="text" class="form-control" name="amount" placeholder="Enter amount">
                    </div>
                   
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date" placeholder="select date">
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