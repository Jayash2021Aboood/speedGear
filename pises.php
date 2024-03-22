<?php include("includes/lib.php"); ?>
<?php
$company_id = null;
$car_id = null;
$section_id = null;
$title = "";

if (isset($_GET['company_id'])) {
    $company_id = $_GET['company_id'];
}
if (isset($_GET['car_id'])) {
    $car_id = $_GET['car_id'];
    $cars = select("SELECT Id, Name FROM CARS WHERE Id= $car_id");
    $title .=  $cars[0]["Name"];
} else {
    $cars = select("SELECT Id, Name FROM CARS");
}
if (isset($_GET['section_id'])) {
    $section_id = $_GET['section_id'];
    $sections = select("SELECT Id, Name FROM SECTIONS WHERE Id=$section_id");
    $title .= " - " . $sections[0]["Name"];
} else {
    $sections = select("SELECT Id, Name FROM CARS");
}

$modelsQuery = "SELECT MIN(modelFrom) as low, MAX(modelTo) as heigh FROM PIECES where condition =1";
// $all = select("SELECT id_pieces, namePie, img,sellprice FROM PIECES where condition =1");
$query = "SELECT * FROM PIECES where condition =1";
if (!is_null($company_id)) {
    $query .= " AND id_company=$company_id";
    $modelsQuery .= " AND id_company=$company_id";
}
if (!is_null($car_id)) {
    $query .= " AND id_car=$car_id";
    $modelsQuery .= " AND id_car=$car_id";
}
if (!is_null($section_id)) {
    $query .= " AND id_section=$section_id";
    $modelsQuery .= " AND id_section=$section_id";
}
$all = select($query);
$minAndMax = select($modelsQuery);

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title> <?php echo $title; ?> </title>
    <?php include("template/head.php"); ?>
    <link rel="stylesheet" href="assets/css/pises.css">
</head>

<body>

    <?php include("template/navbar.php"); ?>
    <input type="radio" name="photos" id="check1" checked>
    <?php
    $c = 1;
    for ($i = $minAndMax[0]['low']; $i <= $minAndMax[0]['heigh']; $i++) {
    ?>
        <input type="radio" name="photos" id="check<?php echo ++$c; ?>">
    <?php } ?>

    <!-- <input type="radio" name="photos" id="check1" checked>
    <input type="radio" name="photos" id="check2">
    <input type="radio" name="photos" id="check3"> -->
    <!-- <input type="radio" name="photos" id="check4">
    <input type="radio" name="photos" id="check5">
    <input type="radio" name="photos" id="check6"> -->

    <div class="titlee">

    </div>



    <div class="container2">



        <?php
        if (!is_null($section_id)) {
            $row = $sections[0];
            echo "<h1><b> قسم - " . $row['Name'] . "</h1>";
        } else {
            echo "<h1><b>  كل الفئات  : </h1>";
        }
        ?>



        <!--
        <a href="parts1.html">أخطأت في تحديد نوع القطعه الخاصه بك ؟ </a>
        -->
        <div class="top-content">
            <h4>إختر موديل سيارتك : </h4>
            <label for="check1">كل الموديلات </label>
            <?php
            $c = 1;
            for ($i = $minAndMax[0]['low']; $i <= $minAndMax[0]['heigh']; $i++) {
            ?>
                <label for="check<?php echo ++$c; ?>"> <?php echo $i; ?></label>
            <?php } ?>
            <!-- <label for="check1">كل الموديلات </label>
            <label for="check2"> 2018</label>
            <label for="check3">2019 </label> -->
            <!-- <label for="check4"> 2020</label>
            <label for="check5"> 2021</label>
            <label for="check6"> 2022</label> -->
        </div>

        <div class="photo-gallery">



            <?php

            foreach ($all as $row) { ?>


                <a href="pises.php?id=<?php echo $row['id_pieces']; ?>">
                    <div class="pic b">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['img']); ?>" alt="">
                        <h3 class="title"> <?php echo $row['namePie']; ?> </h3>
                        <span class="post"> <?php echo $row['sellprice'] . "YER"; ?> </span>
                    </div>
                </a>

            <?php  } ?>

            <?php foreach ($all as $row) {
                continue; ?>

                <div class="pic a">
                    <div class="card">
                        <div class="card_image">
                            <a href="pises.php?id=<?php echo $row['id_pieces']; ?>">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['img']); ?>" width="170px" height="200px">
                            </a>
                        </div>
                        <div class="card_title">
                            <h3 class="title">
                                <p><?php echo $row['namePie']; ?></p>
                            </h3>
                        </div>

                        <span class="post">
                            <p><?php echo $row['sellprice'] . "YER"; ?></p>
                        </span>

                    </div>


                </div>
            <?php  } ?>

            <!-- <div class="pic b">
                <div class="card">
                    <div class="card_image">
                        <a href="pises.php?id=77">
                            <img src="imegs/شداد سير المكينة.png" alt="">
                        </a>
                    </div>
                    <div class="card_title">
                        <h3 class="title">
                            <p>شداد سير المكينة</p>
                        </h3>
                    </div>

                    <span class="post">
                        <p> 00</p>
                    </span>

                </div>

            </div>

            <div class="pic c">
                <div class="card">
                    <div class="card_image">
                        <a href="pises.php?id=77">
                            <img src="imegs/شداد سير المكينة.png" alt="">
                        </a>
                    </div>
                    <div class="card_title">
                        <h3 class="title">
                            <p>شداد سير المكينة</p>
                        </h3>
                    </div>

                    <span class="post">
                        <p> 00</p>
                    </span>

                </div>

            </div> -->


            <!-- 
            <div class="pic b">
                <img src="imegs/شداد سير المكينة.png" alt="">
                <h3 class="title"> شداد سير المكينة</h3>
                <span class="post"> 00 </span>
            </div>

            <div class="pic c">
                <img src="imegs/وجه غطاء بلوف.png" alt="">
                <h3 class="title"> وجه غطاء بلوف</h3>
                <span class="post"> 00 YER</span>
            </div>

            <div class="pic d">
                <img src="imegs/بلف بخاخ المكينة.png" alt="">
                <h3 class="title"> بلف بخاخ المكينه</h3>
                <span class="post"> 00 YER</span>
            </div>

            <div class="pic e">
                <img src="imegs/كرسي قير.png" alt="">
                <h3 class="title"> كرسي قير</h3>
                <span class="post">00 YER</span>
            </div>

            <div class="pic f">
                <img src="imegs/ترمستات مكيف.png" alt="">
                <h3 class="title"> ترمستات مكيف</h3>
                <span class="post"> 00 YER</span>
            </div>

            <div class="pic g">
                <img src="imegs/جلد بلوف.png" alt="">
                <h3 class="title"> جلد بلوف</h3>
                <span class="post"> 00 YER</span>
            </div>

            <div class="pic h">
                <img src="imegs/ثلاجة مكينة.png" alt="">
                <h3 class="title"> ثلاجة مكينة</h3>
                <span class="post"> 00 YER</span>
            </div>

            <div class="pic i">
                <img src="imegs/كرسي مكينة خلفي.png" alt="">
                <h3 class="title"> كرسي مكينة خلفي</h3>
                <span class="post">00 YER</span>
            </div>

            <div class="pic j">
                <img src="imegs/دينمو مكينة.png" alt="">
                <h3 class="title"> دينمو مكينة</h3>
                <span class="post"> 00 YER</span>
            </div>

            <div class="pic k">
                <img src="imegs/وجه قزوز.png" alt="">
                <h3 class="title"> وجه قزوز</h3>
                <span class="post">00 YER</span>
            </div>

            <div class="pic l">
                <img src="imegs/حساس حرارة.png" alt="">
                <h3 class="title"> حساس حرارة</h3>
                <span class="post">00 YER</span>
            </div>

            <div class="pic m">
                <img src="imegs/طرمبة ماء.png" alt="">
                <h3 class="title"> طرمبة ماء</h3>
                <span class="post">00 YER</span>
            </div>

            <div class="pic n">
                <img src="imegs/ماصورة مبرد.png" alt="">
                <h3 class="title"> ماصورة مبرد</h3>
                <span class="post">00 YER</span>
            </div>

            <div class="pic o">
                <img src="imegs/قاعدة كوع ماء.png" alt="">
                <h3 class="title">قاعدة كوع ماء </h3>
                <span class="post">00 YER</span>
            </div>

            <div class="pic p">
                <img src="imegs/فلتر بنزين.png" alt="">
                <h3 class="title"> فلتر بنزين </h3>
                <span class="post">00 YER</span>
            </div> -->




        </div>
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