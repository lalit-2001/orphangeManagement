<?php include"../assest/constant/config.php";
 include"../assest/constant/check.php";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the start and end dates from the form
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];

  // Prepare the SQL statement to fetch data within the specified date range
  $sql = "SELECT * FROM expense WHERE date BETWEEN :start_date AND :end_date";
  $stmt = $conn->prepare($sql);

  // Bind parameters
  $stmt->bindParam(':start_date', $startDate);
  $stmt->bindParam(':end_date', $endDate);

  // Execute the query
  $stmt->execute();

  // Fetch all the rows as an associative array
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <title>caregiver</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="../assest/img/care1.png" width="70px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assest/img/care2.png" width="50px">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="edit.php"><i class="fa fa-user"></i>profile</a></li>
                                <li><a class="dropdown-item" href="../forgot.php"><i class="fa fa-key"></i>change
                                        password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../logout.php"><i
                                            class="fa fa-sign-out"></i>logout</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- 
         <div class="row">
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
            <input placeholder="Select date" type="text" id="example" class="form-control col-md-6">
            <label for="example">from Date</label>
            <i class="fas fa-calendar input-prefix"></i>
          </div>

          <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
            <input placeholder="Select date" type="text" id="example" class="form-control col-md-6">
            <label for="example">To Date</label>
            <i class="fas fa-calendar input-prefix"></i>
          </div>
        </div>
               -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <?php

                            ?>
                    <div class="card" style="width: 80rem;">
                        <div class="card-body ">
                            <!-- <div class="card"> -->
                            <!--   <h5 class="card-header text-center">Report</h5>
                          <div class="card-body">
               -->
                            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                                <div class="container mt-4">
                                    <h3>Report Generator</h3>
                                    <form method="POST">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="startDate" class="form-label">Start Date</label>
                                                <input type="date" class="form-control" id="startDate" name="startDate">
                                            </div>
                                            <div class="col">
                                                <label for="endDate" class="form-label">End Date</label>
                                                <input type="date" class="form-control" id="endDate" name="endDate">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Generate Report</button>
                                    </form>

                                    <!-- Display the fetched data -->
                                    <?php if (!empty($result)) { ?>
                                    <div class="data py-5">
                                        <h5>Expense Report for the specified date range:</h5>
                                        <table class="table mx-auto py-5">
                                            <thead>
                                                <tr>
                                                    <th>Expense Type</th>
                                                    <th>Amount</th>
                                                    <th>Expense Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($result as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row['etype']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php } ?>
                                </div>
                            </main>
    </section>
    <script src="../assest/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
    </script>
</body>

</html>