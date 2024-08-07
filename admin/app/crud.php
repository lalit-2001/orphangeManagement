<link href="../assets/css/popup_style.css" rel="stylesheet">
<?php
// include("dbconnection.php");
if(isset($_GET['del_id'])){
    $sql="DELETE from childdata where id=?";
    $stmt=$conn->prepare($sql);
    $stmt->execute([$_GET['del_id']]);
    ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
        <h3 class="popup__content__title">Error</h3>
        <p>Deleted successfully</p>
        <p>
            <?php echo "<script>setTimeout(\"location.href = 'manage.php';\",1500);</script>"; ?>
        </p>
    </div>
</div>

<?php
}










 if(isset($_POST['edit_user'])){
     //for edit file upload
    
     //for edit file upload
  
    

    $sql="UPDATE childdata SET  name=?,age=?, status=? where id=?";
    $stmt=$conn->prepare($sql);
    
    $stmt->execute([$_POST['name'],$_POST['age'],$_POST['status'],$_POST['id']]);
    ?>
     <div class="popup popup--icon -success js_success-popup popup--visible">
                        <div class="popup__background"></div>
                        <div class="popup__content">
                            <h3 class="popup__content__title">Success</h3>
                            <p>Updated Successfully</p>
                            <p>
                                <?php echo "<script>setTimeout(\"location.href = 'manage.php';\",1500);</script>"; ?>
                            </p>
                        </div>
                    </div>
    <?php

    
   
}
?>
<?php
if(isset($_POST['edit_care'])){
     //for edit file upload
    
     //for edit file upload
  
    

    $sql="UPDATE caredata SET  c_name=?,c_contact=?, c_address=? where id=?";
    $stmt=$conn->prepare($sql);
    
    $stmt->execute([$_POST['c_name'],$_POST['c_contact'],$_POST['c_address'],$_POST['id']]);
    ?>
     <div class="popup popup--icon -success js_success-popup popup--visible">
                        <div class="popup__background"></div>
                        <div class="popup__content">
                            <h3 class="popup__content__title">Success</h3>
                            <p>Updated Successfully</p>
                            <p>
                                <?php echo "<script>setTimeout(\"location.href = 'care-manage.php';\",1500);</script>"; ?>
                            </p>
                        </div>
                    </div>
    <?php

    
   
}
?>
<?php
if(isset($_POST['edit_adpt'])){
     //for edit file upload
    
     //for edit file upload
  
    

    $sql="UPDATE adoptdata SET  name=?,relation=?,a_status=? where id=?";
    $stmt=$conn->prepare($sql);
    
    $stmt->execute([$_POST['name'],$_POST['relation'],$_POST['a_status'],$_POST['id']]);
    ?>
     <div class="popup popup--icon -success js_success-popup popup--visible">
                        <div class="popup__background"></div>
                        <div class="popup__content">
                            <h3 class="popup__content__title">Success</h3>
                            <p>Updated Successfully</p>
                            <p>
                                <?php echo "<script>setTimeout(\"location.href = 'adoption.php';\",1500);</script>"; ?>
                            </p>
                        </div>
                    </div>
    <?php

    
   
}
?>
<?php
if(isset($_POST['edit_esp'])){
     //for edit file upload
    
     //for edit file upload
  
    

    $sql="UPDATE expenses SET  e_type=?,amount=?,date=? where id=?";
    $stmt=$conn->prepare($sql);
    
    $stmt->execute([$_POST['e_type'],$_POST['amount'],$_POST['date'],$_POST['id']]);
    ?>
     <div class="popup popup--icon -success js_success-popup popup--visible">
                        <div class="popup__background"></div>
                        <div class="popup__content">
                            <h3 class="popup__content__title">Success</h3>
                            <p>Updated Successfully</p>
                            <p>
                                <?php echo "<script>setTimeout(\"location.href = 'expenses.php';\",1500);</script>"; ?>
                            </p>
                        </div>
                    </div>
    <?php

    
   
}
?>