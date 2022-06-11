<header class="bg-secondary position-relative overflow-hidden pt-10">
        <img class="subpage-header-img d-none d-lg-block" src="/assets/img/banner-img-2.png" style="top: 10%; right: 15%; max-height: 400px;">
        <img class="subpage-header-img" src="/assets/img/banner-img-3.png" style="top: 15%; left: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-2" style="z-index: 10;">
                    <h1 class="d-inline-block bg-white text-primary fw-bold rounded-top py-3 px-4 mb-0 text-capitalize"><?=lang("What.title")?></h1>
                </div>
            </div>
        </div>
    </header>
    
    <section id="early-chilhood-education">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/s8g5df5sd5.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4"><?=lang("What.earlyEducation.title")?></h3>
                        <p class="tx-4 mb-4"><?=lang("What.earlyEducation.content")?></p>
                        <p class="tx-4 mb-4"><?=lang("What.earlyEducation.content2")?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section >
        <div class="container-fluid px-0">
            <div id="philosophy-and-methodology" class="row g-0">
                <div class="col-6 col-lg-3">
                    <a class="d-flex flex-column justify-content-center bg-green text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-1" role="button" aria-expanded="false">
                        <h4 class="fw-bold mb-3 e" data-aos="fade-up"><?=@$what[0]["title_${locale}"] ?></h4>
                        <div class="collapse" id="ourwork-what-collapse-1">
                            <p class="tx-3 mb-0"><?=@$what[0]["description_${locale}"] ?></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="d-flex flex-column justify-content-center bg-secondary text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-2" role="button" aria-expanded="false">
                        <h4 class="fw-bold mb-3 " data-aos="fade-up"><?=lang("What.flipingSquares.square2.title")?></h4>
                        <div class="collapse" id="ourwork-what-collapse-2">
                            <p class="tx-3 mb-0"><?=lang("What.flipingSquares.square2.content")?></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="d-flex flex-column justify-content-center bg-blue text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-3" role="button" aria-expanded="false">
                        <h4 class="fw-bold mb-3" data-aos="fade-up"><?=lang("What.flipingSquares.square3.title")?></h4>
                        <div class="collapse" id="ourwork-what-collapse-3">
                            <p class="tx-3 mb-0"><?=lang("What.flipingSquares.square3.content")?></p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="d-flex flex-column justify-content-center bg-yellow text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-4" role="button" aria-expanded="false">
                        <h4 class="fw-bold mb-3" data-aos="fade-up"><?=lang("What.flipingSquares.square4.title")?></h4>
                        <div class="collapse" id="ourwork-what-collapse-4">
                            <p class="tx-3 mb-0"><?=lang("What.flipingSquares.square4.content")?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="pb-5 pt-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/JaxM-7OU8N8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="comprehensive-development" class="text-md-center py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <h1 class="fw-bold h3 text-center text-primary mb-4" data-aos="fade-up"><?=lang("What.comprehensive.title")?></h1>
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150"><?=lang("What.comprehensive.content")?></p>
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150"><?=lang("What.comprehensive.content2")?></p>

                        <a href="/stories" class="btn btn-green btn-lg px-4 mt-4 "><?=lang("What.comprehensive.button")?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-n1">
        <div id="sliderOne" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityCenter.jpg" alt="">
                                
                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4 text-capitalize"><?=lang("What.community.title")?></h3>
                                    <p class="tx-4 text-white mb-5"><?=lang("What.community.content")?></p>
                                    <a href="/work/where#community-center" class="btn btn-primary btn-lg px-4 text-capitalize"><?=lang("What.community.button")?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityNetworksMeetings.jpg" alt="">

                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4"><?=lang("What.communityNetwork.title")?></h3>
                                    <p class="tx-md-4 text-white mb-5"><?=lang("What.communityNetwork.content")?></p>
                                    <a href="/join-us#contacForm" class="btn btn-primary btn-lg px-4"><?=lang("What.communityNetwork.button")?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityLedPrograms.jpg" alt="">

                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4"><?=lang("What.communityPrograms.title")?></h3>
                                    <p class="tx-md-4 text-white mb-5"><?=lang("What.communityPrograms.content")?></p>
                                    <a href="/join-us" class="btn btn-primary btn-lg px-4"><?=lang("What.communityPrograms.button")?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityDevelopmentApproach.jpg" alt="">

                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4"><?=lang("What.communityDevelopment.title")?></h3>
                                    <p class="tx-md-4 text-white mb-4"><?=lang("What.communityDevelopment.content")?></p>
                                    <p class="tx-md-4 text-white mb-4"><?=lang("What.communityDevelopment.content2")?></p>
                                    <a href="/join-us" class="btn btn-primary btn-lg px-4 "><?=lang("What.communityDevelopment.button")?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>