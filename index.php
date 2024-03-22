<?php include("includes/lib.php"); ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>الرئيسية </title>
    <?php include("template/head.php"); ?>
    <style>
        .card_image img {
            width: 158px;
            height: 112px;
        }
    </style>
</head>

<body>


    <?php include("template/navbar.php"); ?>

    <!-- الخلفية-->
    <section class="hero" id="الرئيسية">
        <div class="hero-section">
            <div class="content">
                <h4>تســوّق بـأمـــان, تســوّق بسـرعـــة !</h4>
                <h1>
                    إكتشف قطع غيار لسيارتك بأفضل الأسعـار ووفّـر الجهد والوقت ...
                </h1>
                <p>
                    <b>سبيد جير</b> هو موقع لشراء قطع الغيار ..
                    <span>جودة وسرعة وأمان</span>
                    أثناء تسوقك
                </p>
            </div>

            <div class="hero-image">
                <img src="/imegs/الخلفيه.jpeg">
            </div>
        </div>
    </section>
    <!-- نهاية الخلفية -->
    <!--جملة اختر شركة سيارتك   -->
    <div class="titlee">
        <h1><b> إخـتـر شـركـة سيـارتــك :</h1>
    </div>
    <br>
    <br>
    <!--صور الشركات-->
    <div class="cards-list">

        <?php

        $all = select("SELECT Id, Name, img FROM Company");

        foreach ($all as $row) { ?>

            <div class="card">
                <div class="card_image">
                    <a href="car-kinds.php?company_id=<?php echo $row['Id']; ?>">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['img']); ?>" width="158px" height="112px">
                    </a>
                </div>
                <div class="card_title">
                    <p><?php echo $row['Name']; ?></p>
                </div>
            </div>

        <?php        } ?>

        <br>

    </div>
    <!-- بداية الفوتر -->
    <section class=" contact" id="تواصل بنا">
        <div class="footer">
            <h2>تواصل معنـا</h2>
            <!-- يمين الفوتر  -->
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3>ارسل رسالة</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="your name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="your email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="your message"></textarea>
                        </div>
                        <button type="submit">ارسل </button>
                    </form>
                </div>
                <!-- يسار الفوتر  -->
                <div class="contact-info">
                    <h3>معلوماتنا</h3>
                    <p>777777777 967+ <i class="fas fa-phone"></i></p>
                    <p>geer@gmail.com<i class="fas fa-envelope"></i></p>
                    <p>الجمهورية اليمنية - صنعـاء <i class="fas fa-map-marker-alt"></i></p>
                </div>
            </div>

        </div>
    </section>
    <!-- نهاية الفوتر -->
</body>

</html>