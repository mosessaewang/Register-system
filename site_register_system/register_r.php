<?php
    session_start();
    include("connect_db.php");

    $r_user = $_POST['r_user'];
    $r_email = $_POST['r_email'];
    $r_password = $_POST['r_password'];

    $sql = "INSERT INTO tb_register(r_user, r_email, r_password)
            VALUES('$r_user', '$r_email', '$r_password')";

    $rs = $conn->query($sql);
    if($rs){?>
        <script>
            alert("สมัครเรียนร้อยครับ")
            window.location = "login.php";
        </script>
        <?php
    }else{ ?>
        <script>
            alert("ข้อมูลไม่ถูกต้องอภัยด้วย");
            window.location = "register.php";
        </script>
        <?php
    }
?>