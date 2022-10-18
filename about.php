<?
$pagg = 2;
include  "inc.php";
?>



<!-- About Us Area -->
<section class="about_us_area row2 mt-3">
    <div class="container">
        <div class=" about_row2">

            <div class="subtittle">
                <h2><?= $pageTitle ?></h2>
            </div>
            <div class="who_we_area col2-md-12 col2-sm-12 text che-have">
                <p></p>
                <p><?= getValue("about", $lang) ?></p>

            </div>







        </div>
    </div>
</section>

<section class="space pt-0">
    <div class="container">
        <!-- <div class="title-area text-center">
            <h2 class="sec-title"><?= plang('لماذا تختارنا', 'Why choose us') ?></h2>
        </div> -->
        <div class="row">
            <div class="col-md-6 col-lg-3 process-box-wrap">
                <div class="process-box">
                    <div class="process-box_icon"><img src="images/icon/process_1_1.svg" alt="service image"></div>
                    <h3 class="process-box_title"><?= plang('مهمتنا', 'Our mission') ?></h3>
                    <p class="process-box_text"><?= getValue('mission', $lang) ?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 process-box-wrap">
                <div class="process-box">
                    <div class="process-box_icon"><img src="images/icon/process_1_2.svg" alt="service image"></div>
                    <h3 class="process-box_title"><?= plang('قيمنا', 'Our values') ?></h3>
                    <p class="process-box_text"><?= getValue('values', $lang) ?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 process-box-wrap">
                <div class="process-box">
                    <div class="process-box_icon"><img src="images/icon/process_1_3.svg" alt="service image"></div>
                    <h3 class="process-box_title"><?= plang('شعارنا', 'Our slogan') ?></h3>
                    <p class="process-box_text"><?= getValue('slogan', $lang) ?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 process-box-wrap">
                <div class="process-box">
                    <div class="process-box_icon"><img src="images/icon/process_1_4.svg" alt="service image"></div>
                    <h3 class="process-box_title"><?= plang('رؤيتنا', 'Our vision') ?></h3>
                    <p class="process-box_text"><?= getValue('vision', $lang) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "inc/footer.php" ?>