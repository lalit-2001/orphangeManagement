<?php
include("app/dbconnection.php");
// Establish a connection to the database

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the start and end dates from the form
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Prepare the SQL statement to fetch data within the specified date range
    $sql = "SELECT * FROM expenses WHERE date BETWEEN :start_date AND :end_date";
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src='../assets/img/logo.png' width="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <img src='../assets/img/nav.png' width="400px">
                            </a>
                        </li>
                          
                    </ul>
                    <form class="d-flex">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/img/profile.png" width="60px">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-key"></i>Change Password</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../logout.php"><i
                                            class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item pt-2">
                            <a class="nav-link active" aria-current="page" data-bs-toggle="collapse" href="#submenu5">
                                <h6>Child Management</h6>
                            </a>
                            <div class="collapse" id="submenu5">
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="manage.php">Display</a></li>
                                    <li><a class="nav-link" href="add.php">Add</a></li>

                                    <!-- Add more subtasks as needed -->
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item py-2">
                            <a class="nav-link active" aria-current="page" data-bs-toggle="collapse" href="#submenu1">
                                <h6>Caregiver's Management</h6>
                            </a>
                            <div class="collapse" id="submenu1">
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="care-manage.php">Display</a></li>
                                    <li><a class="nav-link" href="care-add.php">Add</a></li>
                                    <li><a class="nav-link" href=""></a></li>
                                    <!-- Add more subtasks as needed -->
                                </ul>
                            </div>
                        </li>
                        <!-- Add more main options with submenus as needed -->
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" data-bs-toggle="collapse" href="#submenu2">
                                <h6>Adoption Request</h6>
                            </a>
                            <div class="collapse" id="submenu2">
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="adoption.php">Display</a></li>
                                    <li><a class="nav-link" href="#"></a></li>
                                    <!-- Add more subtasks as needed -->
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item py-2">
                            <a class="nav-link active" aria-current="page" data-bs-toggle="collapse" href="#submenu3">
                                <h6>Expense Tracking</h6>
                            </a>
                            <div class="collapse" id="submenu3">
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="expenses.php">Display</a></li>
                                    <li><a class="nav-link" href="expenses-add.php">Add</a></li>
                                    <li><a class="nav-link" href="#"></a></li>
                                    <!-- Add more subtasks as needed -->
                                </ul>
                            </div>
                        </li>
                        <!-- Add more main options with submenus as needed -->
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" data-bs-toggle="collapse" href="#submenu4">
                                <h6>Report</h6>
                            </a>
                            <div class="collapse" id="submenu4">
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="report.php">Display</a></li>
                                    <li><a class="nav-link" href="#"></a></li>
                                    <!-- Add more subtasks as needed -->
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
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
                    <h5>Expense Report for the specified date range:</h5>
                    <table class="table mx-auto">
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
                                <td><?php echo $row['e_type']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </main>
            <!-- Bootstrap JS and dependencies -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
                
</body>

</html>