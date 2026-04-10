<?php
session_start();      // เริ่ม session
session_destroy();    // ลบ session ทั้งหมด

header("Location: login.php"); // กลับไปหน้า login
exit();
?>