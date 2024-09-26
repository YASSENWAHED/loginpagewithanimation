<?php
// افترض أنك قمت بتوصيل قاعدة البيانات الخاصة بك هنا

// الحصول على بيانات المستخدم من النموذج
$username = $_POST['username'];
$password = $_POST['password'];

// التحقق من صحة بيانات المستخدم (استبدل هذا بالتحقق الفعلي من قاعدة البيانات)
if ($username === 'user' && $password === 'password') {
  // بدء جلسة
  session_start();
  $_SESSION['logged_in'] = true;

  // إعادة التوجيه إلى الصفحة الجديدة
  header('Location: dashboard.php');
  exit();
} else {
  // إذا كانت البيانات غير صحيحة، يمكنك عرض رسالة خطأ
  echo "Username or password incorrect";
}
?>
