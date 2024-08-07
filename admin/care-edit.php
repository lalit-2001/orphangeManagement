<?php
include("app/dbconnection.php");
include("app/crud.php");

if(isset($_GET['del_id'])){
    $sql="DELETE from caredata where id=?";
    $stmt=$conn->prepare($sql);
    $stmt->execute([$_GET['del_id']]);
    ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
        <h3 class="popup__content__title">Error</h3>
        <p>Deleted successfully</p>
        <p>
            <?php echo "<script>setTimeout(\"location.href = 'care-manage.php';\",1500);</script>"; ?>
        </p>
    </div>
</div>

<?php
}
?>





<!doctype html>
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
    <link href="../assets/app/css/popup_style.css" rel="stylesheet">

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
    <?php
   
    ?>
    <section class="py-5">
        <div class="container">
            <div row="row">
                <div class=col-md-12>
                    <div class="card">
                        <h5 class="card-header text-center">Manage Caregiver</h5>
                        <div class="card-body">
                            <form class="" action="" method="POST"  enctype="multipart/form-data">
                                <?php 
                                
                                    $sql="SELECT * FROM caredata where id=?";
                                    $stmt= $conn->prepare($sql);
                                    $stmt->execute([$_GET['edit_id']]);
                                    $record=$stmt->fetchAll();
                                    foreach($record as $key){

                                    ?>
                                <input type="hidden" class="form-control" name="id" value="<?php echo $key['id'];?>">
                               

                                <div class="container">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="fullName">Full Name</label>
                                                <input type="text" class="form-control" name="c_name"
                                                    value="<?php echo $key['c_name'];?>">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="contact">Contact :</label>
                                                <input type="contact" class="form-control" name="c_contact"
                                                    value="<?php echo $key['c_contact'];?>">
                                            </div>
                                        </div>
                             
                                        <div class="col-6">
                                            <label for="textarea">Address :</label>
                                            <div class="form-floating ">

                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                value="<?php echo $key['c_address'];?>"
                                                name="c_address">
                                                </textarea>

                                            </div>

                                        </div>
                                      
                                </div>

                            <button type="submit" name="edit_care" class="btn btn-primary ">
                                    Update</button>
                                <?php
                                    }
                            ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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