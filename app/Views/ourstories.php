<header class="bg-blue position-relative overflow-hidden pt-10">
        <img class="subpage-header-img" src="/assets/img/banner-img-4.png" style="top: 10%; right: 15%; max-height: 300px;">
        <img class="subpage-header-img d-none d-lg-block" src="/assets/img/banner-img-4.png" style="top: 15%; left: 10%; max-height: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-2" style="z-index: 10;">
                    <h1 class="d-inline-block bg-white text-primary fw-bold rounded-top py-3 px-4 mb-0 text-capitalize"><?=lang("Stories.title")?></h1>
                </div>
            </div>
        </div>
    </header>

    <a href="" role="article" class="section-bg text-center text-decoration-none link-white py-8 py-lg-10">
        <img src="<?=$stories[0]["routeImg"]?>" alt="" class="section-bg-img">
        <div class="container position-relative" style="z-index: 10;">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <h1 class="fw-bold" data-aos="fade-up"><?=$stories[0]["title_${locale}"]?></h1>
                    <p data-aos="fade-up" data-aos-delay="200"><?=$stories[0]["description_${locale}"]?></p>
                </div>
            </div>
        </div>
    </a>

    <section class="bg-green py-6">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="text-primary h3 fw-bold mb-0 text-capitalize"><?=lang("Stories.articles.title")?></h1>
            </div>

            <div class="row gx-3 gx-xl-5 gy-3">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="/blog#post1" class="post-card link-primary text-center" data-aos="fade-up">
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-lg-4">
                            <img class="h-100 w-100 object-cover" src="<?=@$stories[0]["routeImg"]?>">
                        </div>
                        <h4 class="tx-3 tx-md-4 mb-0 "><?=$stories[0]["title_${locale}"]?></h4>
                    </a>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="/blog#post2" class="post-card link-primary text-center" data-aos="fade-up">
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-lg-4">
                            <img class="h-100 w-100 object-cover" src="<?=@$stories[1]["routeImg"]?>">
                        </div>
                        <h4 class="tx-3 tx-md-4 mb-0 "><?=$stories[1]["title_${locale}"]?></h4>
                    </a>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="/blog#post3" class="post-card link-primary text-center" data-aos="fade-up">
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-lg-4">
                            <img class="h-100 w-100 object-cover" src="<?=@$stories[2]["routeImg"]?>">
                        </div>
                        <h4 class="tx-3 tx-md-4 mb-0 "><?=$stories[2]["title_${locale}"]?></h4>
                    </a>
                </div>

            </div>

            <div class="text-center mt-5 mt-lg-7" data-aos="fade-up">
                <a href="/blog" class="btn btn-primary px-4 "><?=lang("Stories.articles.button")?></a>
            </div>
        </div>
    </section>

    <section class="bg-blue py-5">
        <div class="container">
            <header class="text-center mb-5">
                <h1 class="text-primary h3 fw-bold text-capitalize"><?=lang("Stories.videos.title")?></h1>
            </header>

            <div class="row gx-3 gx-xl-5 gy-5">
                <div class="col-md-6 col-md-4 col-lg-4">
                    <a href="#learningLove" class="post-card text-center link-primary clic" data-aos="fade-up" >
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-md-4">
                            <img class="logo-youtube" src="/assets/img/youtube.png">
                            <img class="h-100 w-100 object-cover" src="/assets/img/stories/videos/LearningWithLoveAtHomeAndSchool.jpg">
                        </div>
                        <h4 class="tx-4 "><?=lang("Stories.videos.video1")?></h4>
                    </a>
                </div>
                <div class="col-md-6 col-md-4 col-lg-4">
                    <a href="#parentTraining" class="post-card text-center link-primary clic" data-aos="fade-up">
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-md-4">
                            <img class="logo-youtube" src="/assets/img/youtube.png">
                            <img class="h-100 w-100 object-cover" src="/assets/img/stories/videos/ParentTraining2021.jpg">
                        </div>
                        <h4 class="tx-4 "><?=lang("Stories.videos.video2")?></h4>
                    </a>
                </div>
                <div class="col-md-6 col-md-4 col-lg-4">
                    <a href="#plantingSeeds" class="post-card text-center link-primary clic" data-aos="fade-up">
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-md-4">
                            <img class="logo-youtube" src="/assets/img/youtube.png">
                            <img class="h-100 w-100 object-cover" src="/assets/img/stories/videos/PlantingSeedsMethodology.jpg">
                        </div>
                        <h4 class="tx-4 "><?=lang("Stories.videos.video3")?></h4>
                    </a>
                </div>
            </div>

            <div class="text-center mt-5 mt-lg-7" data-aos="fade-up">
                <a href="https://www.youtube.com/channel/UCqm1YqvHZcTkf-ClFNroHlA" target="_blank" class="btn btn-primary px-4 text-capitalize"><?=lang("Stories.videos.button")?></a>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/stories/Staytuned.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-secondary d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-4 px-lg-7">
                        <h3 class="text-primary fw-bold mb-5 text-capitalize" data-aos="fade-up"><?=lang("Stories.suscription.title")?></h3>
                        <p class="tx-4 mb-4" data-aos="fade-up"><?=lang("Stories.suscription.text1")?></p>
                        <a href="#subscribe-form" class="btn btn-primary btn-lg px-4 text-capitalize" data-aos="fade-up"><?=lang("Stories.suscription.button")?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- ************************************** modal videos ******************************************** -->

<div class="videos">

</div>

<script>
    localStorage.setItem("stories",JSON.stringify(<?=json_encode($stories)?>));
</script>

