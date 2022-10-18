<?php if (isset($_POST["subscribe"])) {
    $text =  $_POST["name"] . "<br>" . $_POST["email"];
    require("class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.sherktk.net";

    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Port = 587;
    $mail->Username = "mail@sherktk.net";
    $mail->Password = "JCrS%^)qc!eH";

    $mail->From = "mail@sherktk.net";

    $mail->FromName = $name;
    $info_media["code"] = "email";
    $contents = $core->getinfo_media($info_media);
    $emaills = $contents[0]["link"];
    $mail->AddAddress($emaills);
    //$mail->AddReplyTo("mail@mail.com");
    $mail->IsHTML(true);
    $mail->Subject = "Subscribe";
    $mail->Body = $text;

    //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    $core->addemail(array("email" => $_POST["email"]));
    if ($mail->Send()) {
?>

        <script type="text/javascript">
            alert("Thank you !!");
        </script>

    <?php
    } else { ?>
        <script type="text/javascript">
            alert("<?= trim(htmlspecialchars_decode(str_replace("</p>", " ", str_replace("<p>", " ", $mail->ErrorInfo)))) ?>");
        </script>
<?php  }
} ?>
<!-- End Partner Area -->
<footer class="footer-wrapper footer-layout2" data-bg-src="images/bck.jpg">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 col-xs-12">
                    <div class="widget footer-widget">
                        <h3 class="widget_title"><?= plang('عن الشركة', 'About Company') ?></h3>
                        <div class="as-widget-about">
                            <?= getValue('footer_text', $lang) ?>



                            <div class="ft-content">
                                <i class="fal fa-headset"></i>
                                <span><?= plang('تحدث إلى دعمنا', 'Talk To Our Support') ?></span>
                                <a href="tel:<?= getValue('header_phone') ?>" class=""><?= getValue('header_phone') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title"><?= plang('وصلة سريعة', 'Quick link') ?></h3>
                        <div class="menu-all-pages-container quick">
                            <ul>
                                <li><a href="<?= $core->getPageUrl("index" . $plang) ?>" title=""><?= getTitle("index" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("about" . $plang) ?>" title=""><?= getTitle("about" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("projects" . $plang) ?>" title=""><?= getTitle("projects" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("products" . $plang) ?>" title=""><?= getTitle("products" . $plang) ?></a></li>



                                <li><a href="<?= $core->getPageUrl("gallery" . $plang) ?>" title=""><?= getTitle("gallery" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("video" . $plang) ?>" title=""><?= getTitle("video" . $plang) ?></a></li>

                                <li><a href="<?= $core->getPageUrl("order" . $plang) ?>" title=""><?= getTitle("order" . $plang) ?></a></li>
                                <li><a href="<?= $core->getPageUrl("news" . $plang) ?>" title=""><?= getTitle("news" . $plang) ?></a></li>

                                <li><a href="<?= $core->getPageUrl("contact" . $plang) ?>" title=""><?= getTitle("contact" . $plang) ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="widget footer-widget">
                        <h3 class="widget_title"><?= plang('معلومات التواصل', 'Contact Details') ?></h3>
                        <div class="as-widget-about">

                            <h4 class="footer-info-title"><?= plang('عنوان البريد الالكترونى', 'Email Address') ?></h4>
                            <p class="footer-info"><i class="fal fa-envelope-open-text"></i><a class="text-inherit" href="mailto:<?= getValue('email') ?>"><?= getValue('email') ?></a></p>
                            <h4 class="footer-info-title"><?= plang('مكان المكتب', 'Office Location') ?></h4>
                            <p class="footer-info"><i class="fal fa-map-marker-check"></i><?= getValue('footer_adress', $lang) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text">Copyright @ 2022 <a class="text-white" href="">Erasoft</a>. All Rights Reserved.</p>
        </div>
    </div>
</footer>




<div class="all-ioc">
    <div class="show-icons">
        <div class="ico-img"></div>
        <div class="sonar-wave"></div>
        <div class="sonar-wave2"></div>
    </div>



    <div class="whats-icon" data-target="html">
        <a href="https://api.whatsapp.com/send?phone=<?= getValue("whatsapp") ?>"><span class="icon fab fa-whatsapp"></span>
        </a>
    </div>



    <div class="messenger-icon" data-target="html">
        <a href="<?= getValue("messenger") ?>"><span class="icon fab fa-facebook-messenger"></span>
        </a>
    </div>


    <div class="phone-icon" data-target="html">
        <a href="tel:+<?= getValue('header_phone') ?>"><span class="icon fal fa-phone"></span>
        </a>
    </div>



</div>


<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.min.js"></script>
<script src="js/main.js"></script>
<script src="js/venobox.min.js"></script>
<script>
    jQuery(document).ready(function($) {

        $('.venobox,.image-popup-vertical-fit,[data-fancybox]').venobox({
            bgcolor: '',
            framewidth: '500px', // default: ''
            spinner: 'cube-grid', // default: ''
            frameheight: '400px', // default: ''
            overlayColor: 'rgba(6, 12, 34, 0.85)',
            closeBackground: '',
            closeColor: '#fff',
            titleattr: 'data-title',
            share: ['facebook', 'twitter', 'download'] // default: []
        });
    });
</script>
</body>

</html>