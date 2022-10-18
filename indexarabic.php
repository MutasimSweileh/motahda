<?php
$pagg = 1;
include "inc.php";
/*
$lang : get form  inc.php  = arabic || english;
$plang : get form  inc.php for  php file name  = arabic || "";
$clang : get form  inc.php for column name  =  _arabic || "" ;
*/
?> <div class="sec-about position-relative overflow-hidden">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-6">
                <div class="img-box-3">
                    <div class="img2">

                        <img class="custom-im" src="images/about2.png" alt="About" />

                        <div class="experience-box">
                            <div class="our-experience-years">
                                <div class="year-outline">
                                    <h2><?= getValue('experience_count') ?></h2>
                                </div>
                                <p><?= plang('سنوات <span> من الخبرة </span>', 'Years <span>Experience</span>') ?></p>
                            </div>

                            <div class="right">
                                <span class="icon-icon-6"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sub-title"><?= plang('عن الشركة', 'About Company') ?></span>
                    <h2 class="sec-title"><?= $alt ?></h2>
                </div>

                <div class="text">
                    <?= getValue('home_text', $lang) ?>


                    <a href="<?= $core->getPageUrl("about" . $plang) ?>" class="as-btn"><?= plang('اقرا المزيد', 'Read More') ?></a>

                </div>


            </div>
        </div>
    </div>
</div>



<section class="sc_services_extra">
    <div class="auto-container">

        <div class="sec-title">
            <h2><?= getTitle("projects" . $plang) ?></h2>
        </div>


        <div class="owl-carousel slider-dse custom-nav">
            <?php
            $products = $core->getprojects(array("special" => 1));
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]["level"])
                        continue;
                    $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "projects" . $plang);

            ?>
                <div class="ire">
                    <div class="sc_services_item with_more with_image">
                        <div class="sitem_content" style="background-image: url(images/<?= $products[$i]["image"] ?>);">
                            <div class="sitem-coinner">
                                <div class="sitem-con-top"><span class="sitem_number">0<?= $i + 1 ?></span></div>
                                <div class="sitem-con-bottom">
                                    <h6 class="sitem_title"><a href="<?= $link ?>"><?= $products[$i]["name" . $clang] ?></a></h6>
                                    <div class="sitem_text">
                                        <p><?= $alt ?></p>
                                    </div>
                                    <div class="sitem_button sc_item_button">
                                        <a href="<?= $link ?>" class="sitem_more_link"> <span class="link_text"><?= plang('اقرا المزيد', 'Read More') ?></span><span class="link_icon"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <a class="sitem_link" href="<?= $link ?>"></a>
                        </div>
                    </div>
                </div>
            <? } ?>

        </div>


    </div>
</section>


<section class="bg-smoke prod-section">
    <div class="container">


        <div class="sec-title">
            <h2><?= getTitle("products" . $plang) ?></h2>
        </div>

        <div class="owl-carousel prod-carousel custom-nav">

            <?php
            $products = $core->getproducts(array("special" => 1));
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]["level"])
                        continue;
                    $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang);

            ?>
                <div class="cs-box">
                    <div class="service-box">
                        <div class="service-box_img"><img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>" /></div>
                        <div class="service-box_icon"><span class="fal fa-fire"></div>
                        <div class="service-box_content">
                            <span class="service-box_number">0<?= $i + 1 ?></span>
                            <h3 class="service-box_title"><a href="<?= $link ?>"><?= $products[$i]["name" . $clang] ?></a></h3>
                            <a href="<?= $link ?>" class="service-box_btn"><?= plang('اقرا المزيد', 'Read More') ?> <i class="fas fa-arrow-<?= plang("left", "right") ?>"></i></a>
                        </div>

                    </div>
                </div>
            <? } ?>




        </div>
    </div>
</section>


<div class="bg-title position-relative overflow-hidden">
    <div class="row">
        <div class="col-xl-6">
            <div class="as-video style1">
                <img src="images/image-1.jpg" alt="Video Image" /> <a href="<?= getValue("video") ?>" class="play-btn popup-video"><i class="fal fa-play"></i></a>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="feature-media-wrap">
                <div class="ma-feat title-area text-center">
                    <span class="sub-title"><?= $alt ?></span>
                    <h2 class="sec-title text-white"><?= plang('لماذا تختارنا؟', 'Why Choose Us?') ?></h2>
                </div>



                <div class="skill-content">

                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-counter-box one">
                                <div class="fact-icon">
                                    <img src="images/icon/counter_2_2.svg" alt="icon" />
                                </div>
                                <p class="counter-number count"><?= getValue("clients") ?></p>
                                <h6><?= plang('العملاء الراضون', 'Satisfied <br> customers') ?></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-counter-box two">
                                <div class="fact-icon">
                                    <img src="images/icon/counter_2_1.svg" alt="icon" />
                                </div>
                                <p class="counter-number count"><?= getValue('experience_count') ?></p>
                                <h6><?= plang('سنوات من الخبرة', 'Years of <br> experience') ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-counter-box three">
                                <div class="fact-icon">
                                    <img src="images/icon/feature_2_5.svg" alt="icon" />
                                </div>
                                <p class="counter-number count"><?= getValue('projects') ?></p>
                                <h6><?= plang('مشاريع كاملة', 'Complete <br> projects') ?></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-counter-box four">
                                <div class="fact-icon">
                                    <img src="images/icon/quality-feature_12.png" alt="icon" />
                                </div>
                                <p class="counter-number count"><?= getValue('Certificates') ?></p>
                                <h6><?= plang('شهادات <br> الجودة', 'Quality <br> Certificates') ?></h6>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>
    <div class="body-shape4"><img src="images/bg-map.png" alt="shape" /></div>
</div>



<!--

<section class="space">
<div class="container">
<div class="title-area text-center"><span class="sub-title">OUR WORK PROCESS</span>
    <h2 class="sec-title">How We Works</h2>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3 process-box-wrap">
        <div class="process-box">
            <div class="process-box_icon"><img src="images/icon/process_1_1.svg" alt="service image"></div>
            <h3 class="process-box_title">Identify Issues</h3>
            <p class="process-box_text">Extensible for web iterate process before meta services impact with olisticly enable client.</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 process-box-wrap">
        <div class="process-box">
            <div class="process-box_icon"><img src="images/icon/process_1_2.svg" alt="service image"></div>
            <h3 class="process-box_title">Prepare Solution</h3>
            <p class="process-box_text">Vulnerable for web iterate process before meta services impact with olisticly enable geting.</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 process-box-wrap">
        <div class="process-box">
            <div class="process-box_icon"><img src="images/icon/process_1_3.svg" alt="service image"></div>
            <h3 class="process-box_title">Working On This</h3>
            <p class="process-box_text">Of setting for web iterate process before meta services impact with olisticly enable power.</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 process-box-wrap">
        <div class="process-box">
            <div class="process-box_icon"><img src="images/icon/process_1_4.svg" alt="service image"></div>
            <h3 class="process-box_title">Deliver On Hand</h3>
            <p class="process-box_text">Getting on for web iterate process before meta services impact with olisticly enable silent.</p>
        </div>
    </div>
</div>
</div>
</section>

-->




<section class="space bg-smoke blog-sec">
    <div class="container">
        <div class="sec-title">
            <h2><?= getTitle("news" . $plang) ?></h2>
        </div>

        <div class="owl-carousel blog-carousel custom-nav">
            <?php
            $products = $core->getevents(array("special" => 1));
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]["level"])
                        continue;
                    $date = getDateTime($products[$i]["date"], $lang);
            ?>
                <div class="divx">
                    <div class="blog-card">
                        <div class="blog-img"><img src="images/<?= $products[$i]["image"] ?>" alt="blog image" /></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"><i class="fal fa-calendar-alt"></i><?= $date[0] ?>, <?= $date[1] ?> <?= $date[2] ?></a>
                            </div>
                            <h3 class="blog-title"><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>">
                                    <?= $products[$i]["name" . $clang] ?>
                                </a></h3>
                            <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" class="link-btn"><?= plang('اقرا المزيد', 'Read More') ?><i class="fal fa-arrow-<?= plang("left", "right") ?>"></i></a>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</section>

<!-- Start Partner Area -->
<div class="partner-area">
    <div class="sec-title">
        <h2><?= plang('عملائنا', 'Our clients') ?></h2>
    </div>

    <div class="container">
        <div class="partner-slides owl-carousel owl-theme custom-nav">

            <? $variable = $core->getData("clients", ["active" => 1]);
            foreach ($variable as $k => $v) { ?>
                <div class="image-box">
                    <img src="images/<?= $v["image"] ?>" alt="image" />
                </div>
            <? } ?>



        </div>
    </div>
</div>

<?php
include "inc/footer.php";
?>