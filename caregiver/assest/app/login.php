<?php include"../constant/config.php";
 include"../assest/constant/check.php";

session_start();
 if(isset($_POST['login'])){

                  $pass=hash('sha256', $_POST['password'] );//first interation
                   function createSalt()
                      {
                        return '2123293dsj2hu2nikhiljdsd';
                   }
                  $salt = createSalt();
                  $password1 = hash('sha256', $salt. $pass);


                  $sql="SELECT * FROM `care` WHERE email=? AND password= ?";
                   $stmt=$conn->prepare($sql); 
                   $stmt->execute([$_POST['email'],$password1]);
                   $data=$stmt->fetchAll();
                  $res_cnt=count($data);
                  if($res_cnt==1){
                     foreach ($data as $key1) {
                         $_SESSION['care_id']= $key1['id'];
                       $_SESSION['email']= $key1['email'];  
                    }
                  	header('location:../../admin/index.php');
                     }
                     
                     else{
                            echo '<script>
                           alert("Invalid Username Password");    
                        </script>';
                     }
                     
                   }



         if(isset($_POST['register'])){

             $pass=hash('sha256', $_POST['password'] );//first interation
                   function createSalt()
                      {
                        return '2123293dsj2hu2nikhiljdsd';
                   }
                  $salt = createSalt();
                  $password1 = hash('sha256', $salt. $pass);




 	               $sql="INSERT INTO `care`( `name`, `email`, `password`, `address`,`number`,`gender`) VALUES (?,?,?,?,?,?)";
                     $stmt=$conn->prepare($sql);
                     $stmt->execute([$_POST['name'],$_POST['email'],$password1,$_POST['address'],$_POST['number'],$_POST['gender']]);
                   // header('location:../../login.php');
                      ?>
                        <script type="text/javascript">
                                alert("registration successful");
                                window.location = "index.php";
                        </script> 

                <?php
                }  
            

                  if(isset($_POST['edit'])){
                  if($_POST['old_pass']==$_POST['password']){
                    $password1=$_POST['old_pass'];
                  }
                  else{
                  //password encrypt
                  $pass=hash('sha256', $_POST['password']);//first iteration

                   function createSalt()
                                  {
                                      return '2123293dsj2hu2nikhiljdsd';
                                  }
                                  $salt = createSalt();
                                  $password1 = hash('sha256', $salt . $pass);//2nd iteration
                                }

                                     // print_r($_POST); exit;
            $sql="UPDATE data SET name=?, email=?, password=?,address=? where id=?";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$_POST['name'],$_POST['email'],$password1,$_POST['address']]);
             header('location:../../admin/index.php');


            }



            ?>