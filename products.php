<?php
$pagg = 7;
include "inc.php";
$id =  isv("level");
$name = isv("name");
$prodpram = array();
if ($id)
    $prodpram = array("id" => $id);
if ($name)
    $prodpram = array("name" => $name);
$islevel = false;
$products = $core->getproducts($prodpram);
if ($id) {
    $prodpram = array("level" => $products[0]["id"]);
    $lproducts = $core->getproducts($prodpram);
    $p_name = $products[0]["name" . $clang];
    if ($lproducts) {
        $islevel = $products[0]["name" . $clang];
        $products = $lproducts;
    }
}
?>
<style type="text/css">
    .tittle {
        margin-bottom: 60px;
    }

    .services-bl {
        padding: 5px;
    }

    .services-bl img {
        width: 100%;
    }

    .single-service-sidebar .service-pages li a .title h3 {
        color: #131313;

    }

    .single-service-sidebar .service-pages li a .icon span:before {

        color: #131313;

    }

    .single-service-sidebar .service-pages li:hover a .title,
    .single-service-sidebar .service-pages li.active a .title {
        background: #5b3230;
    }

    .single-service-sidebar .service-pages li:hover a .icon,
    .single-service-sidebar .service-pages li.active a .icon {
        background: #131313;
        border-color: #131313;
    }

    .single-service-sidebar .service-pages li.active a .title h3 {
        color: #ffff;
    }

    .single-service-sidebar .single-sidebar .service-title h3 {
        color: #000;
    }

    .single-service-image-box img {
        width: 100%;
        max-height: 500px;
    }

    .single-service-sidebar .service-pack-download li {
        position: relative;
        display: block;
        background: #131313;
        transition: all 500ms ease;
        padding: 23px 40px 23px;
    }

    .single-pricing-box {

        padding: 2px;

    }

    .single-pricing-box .inner {

        padding: 0px;
    }

    .col-md-3.col-sm-6.galley img {
        display: inline-block;
        float: none;
        height: 150px;
        position: relative;
        overflow: hidden;
    }
</style>
<div id="slides" class="services services-style1-area">
    <div class="container">

        <div class="subtittle">
            <h2><?= ($name ? ($plang ? "?????????? ?????????? ????  ' " . $name . " '" : "Search result for ' " . $name . " '") : ($id ? $p_name : getTitle("projects" . $plang))) ?></h2>
        </div>

        <div class="serv_carosele services-area row ">


            <?php
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if (!$id || $islevel) {
                        if (!$id && !$islevel && $products[$i]["level"])
                            continue;
                        $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang);

            ?>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="cs-box">
                            <div class="service-box">
                                <div class="service-box_img"><img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>" /></div>
                                <div class="service-box_icon"><span class="fal fa-fire"></div>
                                <div class="service-box_content">
                                    <span class="service-box_number">0<?= $i + 1 ?></span>
                                    <h3 class="service-box_title"><a href="<?= $link ?>"><?= $products[$i]["name" . $clang] ?></a></h3>
                                    <a href="<?= $link ?>" class="service-box_btn"><?= plang('???????? ????????????', 'Read More') ?> <i class="fas fa-arrow-<?= plang("left", "right") ?>"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>


                <?php } else { ?>
                    <section style="transform: none;">
                        <div class="w-100 pt3-100 pb3-100 position-relative" style="transform: none;">
                            <div class="container" style="transform: none;">
                                <div class="post-detail-wrap w-100" style="transform: none;">
                                    <div class="row" style="transform: none;">
                                        <div class="col-md-12 col-sm-12 col-lg-8">

                                            <div class="theiaStickySidebar">
                                                <div class="post-detail w-100">
                                                    <img class="img-fluid w-100" src="images/<?= $products[$i]["image"] ?>" alt="Blog Detail Image">
                                                    <h2 class="mb-0"><?= $products[$i]["name" . $clang] ?></h2>
                                                    <p class="mb-0"><?= $products[$i]["description" . $clang] ?></p>

                                                    <?php

                                                    if ($pagg == 7) {

                                                        $videospaaaarm = array("product_id" => $products[0]["id"]);

                                                        $videos = $core->getproducts_images($videospaaaarm);
                                                    } else if ($pagg == 6) {

                                                        $videospaaaarm = array("event_id" => $products[0]["id"]);

                                                        $videos = $core->geteventimages($videospaaaarm);
                                                    } else {

                                                        $videospaaaarm = array("project_id" => $products[0]["id"]);

                                                        $videos = $core->getservices_images($videospaaaarm);
                                                    }

                                                    if ($videos) {

                                                    ?>
                                                        <div class="detail-gal w-100">
                                                            <div class="row">
                                                                <?php

                                                                for ($i = 0; $i < count($videos); $i++) { ?>
                                                                    <div class="col-md-6 col-sm-4 col-lg-3">
                                                                        <a href="images/<?= $videos[$i]["image"] ?>" data-fancybox="gallery" title=""><img class="img-fluid" src="images/<?= $videos[$i]["image"] ?>" alt="Blog Detail Gallery Image 1"></a>
                                                                    </div>
                                                                <? } ?>

                                                            </div>
                                                        </div>

                                                    <? } ?>



                                                    <div class="detail-share w-100 mt-2">
                                                        <span><?= plang("????????:", "Share:") ?></span>
                                                        <a class="facebook-clr" href="https://www.facebook.com/sharer/sharer.php?u=<?= $FUr ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <a class="twitter-clr" href="http://twitter.com/share?text=<?= $products[0]["smoll_description" . $clang] ?>&amp;url=<?= $FUr ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>

                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4" style="">
                                            <!-- Sidebar Wrap -->
                                            <div class="theiaStickySidebar" style="">
                                                <aside class="sidebar-wrap w-100">

                                                    <div class="widget2 search_widget brd-rd5 w-100">
                                                        <div class="text"> <?php if ($products[0]["video"] != null) { ?>

                                                                <p style="text-align: center;">

                                                                    <iframe width="30%" height="100%" style="margin: auto; margin-right: 0%; border: 0px; min-height: 200px;" src="https://www.youtube.com/embed/<? echo $products[0]["video"]; ?>" allowfullscreen></iframe>
                                                                </p>

                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <? if ($products[0]["file"] != null) { ?>
                                                        <div class="widget2 widget_brochur m-0">
                                                            <div class="widget-content">
                                                                <div class="icon"><img src="images/icon-60.png" alt=""></div>

                                                                <h4><?= plang('???????? ???????? ??????????', 'Detailed Service Pack') ?></h4>
                                                                <a class="as-btn" href="images/<?= $products[0]["file"] ?>"><i class="flaticon-right"></i><?= plang('?????????? PDF', 'Download PDF') ?></a>
                                                            </div>
                                                        </div>
                                                    <? } ?>

                                                    <div class="widget2 category_widget brd-rd5 w-100 m-0">
                                                        <h3><?= plang("????????????????", "Products") ?></h3>
                                                        <ul class="mb-0 list-unstyled w-100">
                                                            <? $variable = $core->getproducts([]);
                                                            foreach ($variable as $k => $v) {
                                                                $link = $core->getPageUrl(array($v['id'], $v['name' . $clang]), "products" . $plang);
                                                            ?>
                                                                <li><a href="<?= $link ?>"><?= $v["name" . $clang] ?></a>.</li>
                                                            <? } ?>


                                                        </ul>
                                                    </div>


                                                    <div class="widget2 blog_widget brd-rd5 w-100">
                                                        <h3><?= plang('?????? ??????????????', 'Latest Blog') ?></h3>
                                                        <div class="blog-widget-post-list w-100">
                                                            <?php
                                                            $products = $core->getevents(array("special" => 1));
                                                            if ($products)
                                                                for ($i = 0; $i < count($products); $i++) {
                                                                    if ($products[$i]["level"])
                                                                        continue;
                                                                    $date = getDateTime($products[$i]["date"], $lang);
                                                            ?>
                                                                <div class="blog-mini-post w-100">
                                                                    <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title=""><img class="img-fluid" src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>"></a>
                                                                    <div class="blog-mini-post-info">
                                                                        <h4 class="mb-0"><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title=""><?= $products[$i]["name" . $clang] ?></a></h4>
                                                                        <span class="d-block mini-post-date"><?= $date[0] ?> - <?= $date[1] ?> - <?= $date[2] ?></span>
                                                                    </div>
                                                                </div>
                                                            <? } ?>

                                                        </div>
                                                    </div>

                                                </aside>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Blog Detail Wrap -->
                            </div>
                        </div>
                    </section>


            <?php }
                } ?>





        </div>

    </div>
</div>
<?php
include "inc/footer.php";
?>