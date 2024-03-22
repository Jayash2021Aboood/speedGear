<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--مكتبة ايقونات-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <!--مكتبة خطوط-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
<!--مكتبة خطوط-->
    <title>السله</title>
    <link rel="stylesheet" href="shopping_cart.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>
<body>
        <!--يمين الهيدر-->
        <section class="container">
            <main class="navbar">
            <div class="logo">
                <a href="#الرئيسية">
                <img src="./imegs/شعار المشروع.png" alt="speed geer" ></a>
            </div>
            
            <!--وسط الهيدر-->
            <div class="list">
        
            <a href="#الرئيسية">الرئيسية </a>
            <a href="#">مشترياتي</a>
            <a href="#">سياسة الاسترجاع</a>
            <a href="#تواصل بنا">تواصل بنا</a>
        </div>
        <!--يسار الهيدر-->
        <div class="left">
            <span class="material-symbols-outlined">shopping_cart</span>
            <button>تسجيل دخول</button>
            
        </div>
        </main>
        </section>
            <!--نهاية الهيدر-->
            <div class="container2">
                <div class="cart">
                    <div class="top">
                        <h2> سلـة التسـوق</h2>
                        <h2 id="itemA"> قطع 4</h2>
                    </div>
                    <table cellspacing="0" class="table-head">
                        <tr>
                            <th width="150" class="head-img">الصورة</th>
                            <th width="360">إسم القطعة </th>
                            <th width="150">السعر</th>
                            <th width="70">حذف</th>
                        </tr>
                    </table>
                    <table id="root" cellspacing="0"></table>
                    <hr>
                </div>
                <div class="summary">
                    <div class="top">
                        <h2> تفاصيل الطلب</h2>
                    </div>
                    <div class="detail">
                        <h2 id="itemB"> قطع 4</h2>
                        <h2 id="totalA">YER 600.00</h2>
                    </div>
                    <div style="margin-top: 30px; padding: 0 30px;">
                        <h2>العنوان</h2>
                        <input type="text" placeholder="أضف عنوانك (اسم الحي - الشارع)">
                        <h2>هل لديك كود خصم ؟</h2>
                        <input type="text" placeholder="أدخل كود الخصم" id="promocode">
                        <button class="first-btn" id="promo" onclick="promo()">التحقق</button>
                    </div>
                    <hr>
                    <div class="top">
                        <h2>الإجمالي</h2>
                        <h2 id="totalB">YER 600.00</h2>
                    </div>
                    <div style="padding: 0 10px; margin-bottom: 20px;">
                        <button class="checkout">تأكيد</button>
                    </div>
                </div>
            </div>
            
            <script src="shopping_cart.js"></script>
</body>
</html>