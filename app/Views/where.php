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

    <section id="locations">
        <div id="locations-slider" class="swiper">
            <div class="swiper-wrapper">


                <div class="swiper-slide" id="guatemala">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5"><?=lang("Where.title")?></h3>
            
                                    <h4 class="text-primary fw-bold mb-4"><?=lang("Where.place1.location")?></h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.departament")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place1.departmenttext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.NameCenter")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place1.NameCentertext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Foundation")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place1.Foundationtext")?></p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Beneficiaries")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place1.Beneficiariestext")?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary"><?=lang("Where.Ages")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place1.Agestxt")?></p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary"><?=lang("Where.Context")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place1.Contexttext")?></p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3"><?=lang("Where.Programs")?></h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary"><?=lang("Where.place1.program1.name")?></b><?=lang("Where.place1.program1.item")?>
                                                <ol class="mt-2">
                                                    <li><?=lang("Where.place1.program1.item1")?></li>
                                                    <li><?=lang("Where.place1.program1.item2")?></li>
                                                </ol>
                                            </li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place1.program2.name")?></b><?=lang("Where.place1.program2.item")?></li>
                                            <li><b class="text-primary"><?=lang("Where.place1.program3.name")?></b><?=lang("Where.place1.program3.item")?></li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize"><?=lang("Where.button")?></a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapGuatemala" class="maps"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" id="sanLucas">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5"><?=lang("Where.title")?></h3>
            
                                    <h4 class="text-primary fw-bold mb-4"><?=lang("Where.place2.location")?></h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.departament")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place2.departmenttext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.NameCenter")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place2.NameCentertext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Foundation")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place2.Foundationtext")?></p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Beneficiaries")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place2.Beneficiariestext")?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary"><?=lang("Where.Ages")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place2.Agestxt")?></p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary"><?=lang("Where.Context")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place2.Contexttext")?></p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3"><?=lang("Where.Programs")?></h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary"><?=lang("Where.place2.program1.name")?></b><?=lang("Where.place2.program1.item")?>
                                                <ol class="mt-2">
                                                    <li><?=lang("Where.place2.program1.item1")?></li>
                                                </ol>
                                            </li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place2.program2.name")?></b><?=lang("Where.place2.program2.item")?></li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place2.program3.name")?></b><?=lang("Where.place2.program3.item")?></li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place2.program4.name")?></b><?=lang("Where.place2.program4.item")?></li>
                                            <li><b class="text-primary"><?=lang("Where.place2.program5.name")?></b><?=lang("Where.place2.program5.item")?> </li>
                                        </ul>
                                    </div> 
                                    <a href="/work/impact" class="btn btn-blue text-capitalize"><?=lang("Where.button")?></a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapSanLucas" class="maps"></div>
                            </div>
                        </div>
                    </div>
                </div> 
                
                
                <div class="swiper-slide" id="sacala">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5"><?=lang("Where.title")?></h3>
            
                                    <h4 class="text-primary fw-bold mb-4"><?=lang("Where.place3.location")?></h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.departament")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place3.departmenttext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.NameCenter")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place3.NameCentertext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Foundation")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place3.Foundationtext")?></p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Beneficiaries")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place3.Beneficiariestext")?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary"><?=lang("Where.Ages")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place3.Agestxt")?></p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary"><?=lang("Where.Context")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place3.Contexttext")?></p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3"><?=lang("Where.Programs")?></h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary"> <?=lang("Where.place3.program1.name")?></b><?=lang("Where.place3.program1.item")?>
                                            </li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place3.program2.name")?></b><?=lang("Where.place3.program2.item")?></li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place3.program3.name")?></b><?=lang("Where.place3.program3.item")?></li>
                                            <li class="mb-3"><b class="text-primary"> <?=lang("Where.place3.program4.name")?></b><?=lang("Where.place3.program4.item")?></li>
                                            <li><b class="text-primary"><?=lang("Where.place3.program5.name")?></b><?=lang("Where.place3.program5.item")?> </li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize"><?=lang("Where.button")?></a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapSacala" class="maps"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5"><?=lang("Where.title")?></h3>
            
                                    <h4 class="text-primary fw-bold mb-4"><?=lang("Where.place4.location")?></h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.departament")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place4.departmenttext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.NameCenter")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place4.NameCentertext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Foundation")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place4.Foundationtext")?></p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Beneficiaries")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place4.Beneficiariestext")?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary"><?=lang("Where.Ages")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place4.Agestxt")?></p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary"><?=lang("Where.Context")?></h6>
                                            <p class="tx-3 lh-sm mb-0"> <?=lang("Where.place4.Contexttext")?></p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3"><?=lang("Where.Programs")?></h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary"><?=lang("Where.place4.program1.name")?></b><?=lang("Where.place4.program1.item")?>
                                            </li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place4.program2.name")?></b><?=lang("Where.place4.program2.item")?></li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place4.program3.name")?></b><?=lang("Where.place4.program3.item")?></li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place4.program4.name")?></b><?=lang("Where.place4.program4.item")?></li>
                                            <li><b class="text-primary"><?=lang("Where.place4.program5.name")?></b><?=lang("Where.place4.program5.item")?></li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize"><?=lang("Where.button")?></a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapTioxya" class="maps"></div> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5"><?=lang("Where.title")?></h3>
            
                                    <h4 class="text-primary fw-bold mb-4"><?=lang("Where.place5.location")?></h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.departament")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place5.departmenttext")?></p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.NameCenter")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place5.NameCentertext")?>s</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Foundation")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place5.Foundationtext")?></p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary"><?=lang("Where.Beneficiaries")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place5.Beneficiariestext")?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary"><?=lang("Where.Ages")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place5.Agestxt")?></p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary"><?=lang("Where.Context")?></h6>
                                            <p class="tx-3 lh-sm mb-0"><?=lang("Where.place5.Contexttext")?></p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3"><?=lang("Where.Programs")?></h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary"><?=lang("Where.place5.program1.name")?></b><?=lang("Where.place5.program1.item")?>
                                            </li>
                                            <li class="mb-3"><b class="text-primary"><?=lang("Where.place5.program2.name")?></b><?=lang("Where.place5.program2.item")?></li>
                                            <li><b class="text-primary"><?=lang("Where.place5.program3.name")?></b><?=lang("Where.place5.program3.item")?></li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize"><?=lang("Where.button")?></a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapYepocapa" class="maps"></div>  
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="community-center" class="bg-smoke text-md-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="fw-bold h3 text-center text-primary mb-4 " data-aos="fade-up"><?=lang("Where.project.title")?></h1>
                    
                    <!-- *************************   desktop version  ************************************-->
                    <div class="d-none d-sm-block d-sm-none d-md-block">
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150"><?=lang("Where.project.desktop.text1")?></p>

                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150"><?=lang("Where.project.desktop.text2")?></p>

                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150"><?=lang("Where.project.desktop.text3")?></p>
                    </div>


                    <!-- *************************    mobile version  ************************************-->
                    <div class="d-md-none d-lg-block d-lg-none d-xl-block d-xl-none d-xxl-block d-xxl-none">
                        <p><?=lang("Where.Development.desktop.text1")?></p>

                        <p><?=lang("Where.Development.desktop.text2")?></p>
                    </div>
                    
                    <div class="ratio ratio-16x9 mt-5" data-aos="fade-up">
                        <iframe src="https://www.youtube.com/embed/uO4IHtnBHEo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="bg-secondary d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7">
                        <h3 class="text-primary fw-bold mb-4" data-aos="fade-up"><?=lang("Where.Development.title")?></h3>
                        
                        <!-- *************************   desktop version  ************************************-->
                        <div class="d-none d-sm-block d-sm-none d-md-block">
                            <p class="tx-4" data-aos="fade-up"><?=lang("Where.Development.desktop.text1")?></p>
                            <p class="tx-4" data-aos="fade-up"><?=lang("Where.Development.desktop.text2")?></p>
                            <p class="tx-4 mb-4" data-aos="fade-up"><?=lang("Where.Development.desktop.text3")?></p>
                            <p class="tx-4" data-aos="fade-up"><?=lang("Where.Development.desktop.text4")?></p>
                        </div>


                    <!-- *************************    mobile version  ************************************-->
                        <div class="d-md-none d-lg-block d-lg-none d-xl-block d-xl-none d-xxl-block d-xxl-none">
                            <p><?=lang("Where.Development.movil.text1")?></p>

                            <p><?=lang("Where.Development.movil.text2")?>.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityDevelopmentApproach.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    