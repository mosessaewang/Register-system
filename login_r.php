<?php
session_start();
include("connect_db.php");

$r_email= $_POST['r_email'];
$r_password= $_POST['r_password'];

//โค้ดตรงนี้เอาไว้ตรวจว่า email และ password เป็นค่าว่างหรือเปล่า
if($r_email == "" || $r_password == "") {
    ?>
        <script>
            alert("คุณยังไม่ได้กรอกข้อมูล กรุณากรอกข้อมูลด้วยครับ");
            window.location = "login.php";
        </script>
    <?php
//สิ้นสุดการตรวจ
}  else {

$sql = "SELECT * FROM tb_register WHERE r_email = '$r_email' AND r_password = '$r_password'";
$rs = $conn->query($sql);
$row = mysqli_num_rows($rs);
$r = $rs->fetch_object();

//ข้อมูลตรงกันก็จะเข้าไปหน้า index ทันที
if($row>0){
                 $_SESSION['r_email']= $r->r_email;
                 header("location:index.php");
//
//ถ้าไม่ตรงหรือว่าผิดก็จะเข้ามาที่โค้ดนี้และต้องกรอกใหม่
} else { ?>
                 <script language="javascript">
                 alert("ข้อมูลไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง");
                 window.location = "login.php";
                 </script>
        <?php 
    } 
  }
?>
//