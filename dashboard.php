<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // إذا لم يكن المستخدم مسجلاً، قم بإعادة توجيهه إلى صفحة تسجيل الدخول
  header('Location: login.html');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h1>Welcome to your dashboard!</h1>
  </body>
</html>
