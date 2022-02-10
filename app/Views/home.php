<header>
    <div class="container-fluid px-0">
        <div id="hero-slider" class="swiper hero-slider">
            <div class="swiper-wrapper">
                <section class="swiper-slide">
                    <img src="/assets/img/home/banner-1.jpg" class="hero-slider-img">
                    <div class="hero-slider-content py-4 pb-lg-8">
                        <div class="container">
                            <div class="text-center">
                                <a href="/donate" class="btn btn-secondary btn-lg"><?=lang("Header.donate")?></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="swiper-slide">
                    <img src="/assets/img/home/banner-2.jpg" class="hero-slider-img">
                    <div class="hero-slider-content py-4 pb-lg-8">
                        <div class="container">
                            <div class="text-center">
                                <a href="/donate" class="btn btn-secondary btn-lg"><?=lang("Header.donate")?></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="swiper-slide">
                    <img src="/assets/img/home/banner-3.jpg" class="hero-slider-img">
                    <div class="hero-slider-content py-4 pb-lg-8">
                        <div class="container">
                            <div class="text-center">
                                <a href="/donate" class="btn btn-secondary btn-lg"><?=lang("Header.donate")?></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- slider arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</header>

<section class="text-center">
    <div class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="fw-bold h3 text-primary text-capitalize"><?=lang("Home.change.title")?></h1>
                    <p class="tx-4"><?=lang("Home.change.content")?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-6 col-lg-3">
                <div class="bg-secondary text-primary text-center py-5 px-3 px-md-4 h-100">
                    <h2 class="display-3 fw-bold mb-3"><span class="js-counter" data-counter="6">0</span></h2>
                    <p class="tx-3 tx-md-4 mb-0"><?=lang("Home.square.square1")?></p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="bg-green text-primary text-center py-5 px-3 px-md-4 h-100">
                    <h2 class="display-3 fw-bold mb-3"><span class="js-counter" data-counter="200">0</span>+</h2>
                    <p class="tx-3 tx-md-4 mb-0"><?=lang("Home.square.square2")?></p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="bg-blue text-primary text-center py-5 px-3 px-md-4 h-100">
                    <h2 class="display-3 fw-bold mb-3"><span class="js-counter" data-counter="650">0</span>+</h2>
                    <p class="tx-3 tx-md-4 mb-0"><?=lang("Home.square.square3")?></p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
            	<div class="bg-yellow text-primary text-center py-5 px-3 px-md-4 h-100">
                	<h2 class="display-3 fw-bold mb-3"><span class="js-counter" data-counter="97">0</span>%</h2>
                	<p class="tx-3 tx-md-4 mb-0"><?=lang("Home.square.square4")?></p>
            	</div>
        	</div>
    	</div>
    </div>
</section>

<section>
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-lg-6">
                <img class="w-100 h-100 object-cover" src="/assets/img/home/img-1.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-4 px-lg-7" data-aos="fade-up">
                    <h3 class="text-primary fw-bold mb-5"><?=lang("Home.ourCoreBeliefs.title")?></h3>
                    <ol class="tx-4 marker-primary mb-4">
                        <li class="mb-4"><?=lang("Home.ourCoreBeliefs.list1")?></li>
                        <li class="mb-4"><?=lang("Home.ourCoreBeliefs.list2")?></li>
                        <li class="mb-4"><?=lang("Home.ourCoreBeliefs.list3")?></li>
                    </ol>
                    <a href="/work/what" class="btn btn-blue btn-lg px-4"><?=lang("Home.ourCoreBeliefs.button")?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-secondary text-white py-5">
    <div class="container">
        <header class="row justify-content-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="text-center">
                    <h1 class="h3 fw-bold"><?=lang("Home.ourStories.title")?></h1>
                    <p class="tx-4"><?=lang("Home.ourStories.content")?></p>
                </div>
            </div>
        </header>

        <div id="stories-slider" class="swiper mx-n2 mx-sm-0 px-5 px-sm-0" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/blog#post1" class="post-card text-center link-light">
                        <div class="post-card-img ratio ratio-4x3 mb-4">
                            <img class="h-100 w-100 object-cover" src="/assets/img/story-1.jpg">
                        </div>
                        <h4 class="mb-0"><?=lang("Home.ourStories.story1")?></h4>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/blog#post2" class="post-card text-center link-light">
                        <div class="post-card-img ratio ratio-4x3 mb-4">
                            <img class="h-100 w-100 object-cover" src="/assets/img/story-2.jpg">
                        </div>
                        <h4 class="mb-0"><?=lang("Home.ourStories.story2")?></h4>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/blog#post3" class="post-card text-center link-light">
                        <div class="post-card-img ratio ratio-4x3 mb-4">
                            <img class="h-100 w-100 object-cover" src="/assets/img/home/img-2.jpg">
                        </div>
                        <h4 class="mb-0"><?=lang("Home.ourStories.story3")?></h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-6">
            <a href="/stories" class="btn btn-primary btn-lg"><?=lang("Home.ourStories.button")?></a>
        </div>
    </div>
</section>

<!-- Inicia insertar api de facebook-->

<!--<section>
    <div class="container">
        <div class="text-center py-6">
            <h1 class="h3 text-primary fw-bold mb-0" data-aos="fade-up">What we've been up to</h1>
        </div>
    </div>

    
    <!--<div class="container-fluid">
        <div class="row g-3">
            
            <?php 
			 	/*foreach($data as $post){
					?>
                        <div class="col-4 col-lg-3">
                            <a href="<?php echo $post["permalink_url"];?>" target="_blank">
                                <div class="w-100">
                                    <img src="<?php echo $post["full_picture"];?>" alt="facebook" class="img-fluid">
                                </div>
                            </a>

						</div>
					<?php
				}*/
			?>

            
        </div>
    </div>
</section>-->

<!-- Finaliza insertar api de facebook-->

<section class="bg-green py-6">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="text-primary h3 fw-bold mb-0 text-capitalize"><?=lang("Home.supportOurWork.title")?></h1>
        </div>

        <div id="support-slider" class="swiper mx-n2 mx-sm-0 px-5 px-sm-0" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/join-us#donate" class="post-card link-primary text-center">
                        <div class="post-card-img ratio ratio-4x3 mb-4">
                            <img class="h-100 w-100 object-cover" src="/assets/img/home/img-3.jpg">
                        </div>
                        <h4 class="mb-0 text-capitalize">Donate</h4>   
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/join-us#sponsor" class="post-card link-primary text-center">
                        <div class="post-card-img ratio ratio-4x3 mb-4">
                            <img class="h-100 w-100 object-cover" src="/assets/img/home/img-4.jpg">
                        </div>
                        <h4 class="mb-0 text-capitalize"><?=lang("Home.supportOurWork.list1")?></h4>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/join-us#friends-circle" class="post-card link-primary text-center">
                        <div class="post-card-img ratio ratio-4x3 mb-4">
                            <img class="h-100 w-100 object-cover" src="/assets/img/support-3.jpg">
                        </div>
                        <h4 class="mb-0 text-capitalize"><?=lang("Home.supportOurWork.list2")?></h4>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/join-us#exchange-programs" class="post-card link-primary text-center">
                        <div class="post-card-img ratio ratio-4x3 mb-4">
                            <img class="h-100 w-100 object-cover" src="/assets/img/support-4.jpg">
                        </div>
                        <h4 class="mb-0 text-capitalize"><?=lang("Home.supportOurWork.list3")?></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>