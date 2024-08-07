<?php include"../../assest/constant/config.php"; 
		 include"../../assest/constant/check.php";
   

   if(isset($_POST['request'])){

 			$sql="INSERT INTO `adopt`( `name`, `address`, `number`, `date`)VALUES (?,?,?,?)";
               $stmt=$conn->prepare($sql);
               $stmt->execute([$_POST['name'],$_POST['address'],$_POST['number'],$_POST['date']]);

             header('location:../adopt.php');
           }



            if(isset($_POST['submit'])){

 			$sql="INSERT INTO `expense`( `etype`, `amount`, `date`)VALUES (?,?,?)";
               $stmt=$conn->prepare($sql);
               $stmt->execute([$_POST['etype'],$_POST['amount'],$_POST['date']]);

             header('location:../report.php');
           }


           ?>