  <!-- Main Section Two -->
  <section class="main-slider-two">
      <div class="main-slider-carousel owl-carousel owl-theme">


          <?php

            $sliderpram = array();
            $sliders = $core->getslider($sliderpram);
            $ie = 0;
            foreach ($sliders as $slider) {  ?>
              <div class="slide">
                  <img src="images/<?= $slider["image"] ?>" />
                  <div class="container">
                      <!-- Content Boxed -->
                      <div class="content-boxed">
                          <div class="inner-box">
                              <h1><?= $slider["title" . $clang] ?></h1>
                              <div class="text"><?= $slider["description" . $clang] ?></div>
                              <div class="btns-box">
                                  <a href="<?= $core->getPageUrl("about" . $plang) ?>" class="as-btn">
                                      <span class="txt"><?= plang('اقرا المزيد', 'Read More') ?> <i class="lnr lnr-arrow-<?= plang("left", "right") ?>"></i></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          <? } ?>
      </div>


      <div class="bubble-dotted">
          <span class="dotted dotted-1"></span>
          <span class="dotted dotted-2"></span>
          <span class="dotted dotted-3"></span>
          <span class="dotted dotted-4"></span>
          <span class="dotted dotted-5"></span>
          <span class="dotted dotted-6"></span>
          <span class="dotted dotted-7"></span>
          <span class="dotted dotted-8"></span>
          <span class="dotted dotted-9"></span>
          <span class="dotted dotted-10"></span>
      </div>
  </section>
  <!-- End Main Section -->