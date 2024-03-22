<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>
     <!--مكتبة خطوط-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
<!--مكتبة خطوط-->
<link rel="stylesheet" href="create account.css">
</head>
<body>
    <!--هنا تغيير الخلفية-->
<div class="hero">
    <!--هنا المربع الابيض -->
<div class="form-box">
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">تسجيل</button>
        <button type="button" class="toggle-btn" onclick="register() ">إنشاء حساب</button>
    
    </div>
    <form id="login" class="input-group">
        <input type="text" class="input-field" placeholder=" الاسم" required>
        <input type="text" class="input-field" placeholder="كلمة المرور" required>
        <button type="submit" class="submit-btn">تسجيل دخول</button>
        
        
        <div class="remember">
            <a href="Alter2.html">نسيت كلمة المرور ؟</a>
          </div>
    </form>
    <form id="register" class="input-group">
        <input type="text" class="input-field" placeholder=" الاسم" required>
        <input type="email" class="input-field" placeholder="كلمة المرور " required>
        <input type="number" class="input-field" placeholder=" الهاتف" required>
        <input type="text" class="input-field" placeholder=" العنوان" required>
        <input type="text" class="input-field" placeholder=" البريد الالكتروني" required>
        
        <!--<input type="email" class="input-field" placeholder="الهاتف" required>
        <input type="text" class="input-field" placeholder="العنوان " required>!-->
        <input type="checkbox" class="chech-box"><span>أوافق على الشروط والأحكام</span>
        <button type="submit" class="submit-btn">تسجيل</button>
    </form> 
</div>
</div>
<!--اعدادات تحرك من تسجيل الدخول الى انشاء الحساب-->
 <script>
  var x=document.getElementById("login");
  var y=document.getElementById("register");
  var z=document.getElementById("btn");
   
  function register(){
    x.style.left="-400px";
    y.style.left="50px";
    z.style.left="110px";
  }

  function login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0";
  }

 </script>
</body>
</html>