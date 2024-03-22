<?php include("includes/lib.php"); ?>
<?php
$company_id = null;
$car_id = null;
$title = "الاقسام الاساسيه لقطع السيارة ";
if (isset($_GET['company_id'])) {
    $company_id = $_GET['company_id'];
}
if (isset($_GET['car_id'])) {
    $car_id = $_GET['car_id'];
    $cars = select("SELECT Id, Name FROM CARS WHERE Id= $car_id");
    $title = "الاقسام الاساسيه لقطع " . $cars[0]["Name"];
} else {
    $cars = select("SELECT Id, Name FROM CARS");
}

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title> <?php echo $title; ?> </title>
    <?php include("template/head.php"); ?>
</head>

<body>

    <?php include("template/navbar.php"); ?>
    <!--نهاية الهيدر-->
    <div class="titlee">
        <?php
        if (!is_null($car_id)) {
            $row = $cars[0];
            echo "<h1><b>  :فـئـه " . $row['Name'] . "</h1>";
        } else {
            echo "<h1><b>  كل الفئات  : </h1>";
        }
        ?>

    </div>




    <br>
    <br>



    <!--صور القطع العامة-->
    <div class="cards-list">

        <?php
        $all = select("SELECT Id, Name, img FROM SECTIONS");
        foreach ($all as $row) { ?>

            <div class="card">
                <div class="card_image">
                    <a href="pises.php?company_id=<?php echo $company_id; ?>&car_id=<?php echo $car_id; ?>&section_id=<?php echo $row['Id']; ?>">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['img']); ?>" width="170px" height="120px">
                    </a>
                </div>
                <div class="card_title">
                    <p><?php echo $row['Name']; ?></p>
                </div>
            </div>

        <?php } ?>

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