<?php
    session_start();
    include("connect_db.php");

    
    $r_user = $_POST['r_user'];
    $r_email = $_POST['r_email'];
    $r_password = $_POST['r_password'];

    if(!preg_match("/^(?=.*[0-9])[a-zA-Z0-9._%+-]+@gmail\.com$/", $r_email)) {
        echo "<script>
                alert('อีเมลต้องมีตัวเลขและใช้ @gmail.com เท่านั้น');
                window.location = 'register.php';
              </script>";
        exit();
    }

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