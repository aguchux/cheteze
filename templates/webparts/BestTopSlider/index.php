<!--
Name: Best Home Top Slider
-->

<?php
$Sliders = $Core->Sliders();
$SliderImgs = $Core->Sliders();
?>

<!-- SLIDER AREA START (slider-11) -->
<div class="ltn__slider-area ltn__slider-11  ltn__slider-11-slide-item-count-show--- ltn__slider-11-pagination-count-show--- section-bg-1">
    <div class="ltn__slider-11-inner">

        <div class="ltn__slider-11-active">

            <?php while ($slider = mysqli_fetch_object($Sliders)) : ?>
                <!-- slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                    <div class="ltn__slide-item-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> <?= $slider->title ?></h6>
                                            <h1 class="slide-title animated "><?= $slider->subtitle ?></h1>
                                            <div class="slide-brief animated">
                                                <?= $slider->text ?>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="<?= $slider->linkedpage ?>" class="theme-btn-1 btn btn-effect-1"><?= $slider->buttontext ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item-img">
                                        <img src="<?= $slider->slide ?>" alt="<?= $slider->title ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide-item -->
            <?php endwhile; ?>

        </div>

        <!-- slider-4-pagination -->
        <div class="ltn__slider-11-pagination-count">
            <span class="count"></span>
            <span class="total"></span>
        </div>

        <!-- slider-4-img-slide-arrow -->
        <div class="ltn__slider-11-img-slide-arrow">
            <div class="ltn__slider-11-img-slide-arrow-inner">
                <div class="ltn__slider-11-img-slide-arrow-active">
                    
                    <?php while ($sliderimg = mysqli_fetch_object($SliderImgs)) : ?>
                        <div class="image-slide-item">
                            <img src="<?= $sliderimg->slide ?>" alt="<?= $sliderimg->title ?>">
                        </div>
                    <?php endwhile; ?>

                </div>
                <!-- slider-4-slide-item-count -->
                <div class="ltn__slider-11-slide-item-count">
                    <span class="count"></span>
                    <span class="total"></span>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- SLIDER AREA END -->