<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Our numbers / What</h1>
          </div>
  
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-6 col-lg-3">
                    <div class="bg-secondary text-primary text-center py-5 px-3 px-md-4 h-100">
<!--                        <h2 class="display-3 fw-bold mb-3">-->
<!--                            <span class="js-counter" data-counter="8">0</span>-->
<!--                        </h2>-->
                        <input name="title_es" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" placeholder="number" type="text" data-table="<?=@$numbers[0]["id"]?>" value="<?=@$numbers[0]["title_es"]?>">
                        <input name="title_en" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" placeholder="simbol" type="text" data-table="<?=@$numbers[0]["id"]?>" value="<?=@$numbers[0]["title_en"]?>">
                        <p class="tx-3 tx-md-4 mb-0">
                            <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English" data-table="<?=@$numbers[0]["id"]?>" value=""><?=@$numbers[0]["description_es"]?></textarea>
                            <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español" data-table="<?=@$numbers[0]["id"]?>" value=""><?=@$numbers[0]["description_en"]?></textarea>

                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-green text-primary text-center py-5 px-3 px-md-4 h-100">
                        <input name="title_es" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" placeholder="number" type="text" data-table="<?=@$numbers[1]["id"]?>" value="<?=@$numbers[1]["title_es"]?>">
                        <input name="title_en" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" type="text" placeholder="simbol" data-table="<?=@$numbers[1]["id"]?>" value="<?=@$numbers[1]["title_en"]?>">
                        <p class="tx-3 tx-md-4 mb-0">
                            <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English" data-table="<?=@$numbers[1]["id"]?>" value=""><?=@$numbers[1]["description_es"]?></textarea>
                            <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español" data-table="<?=@$numbers[1]["id"]?>" value=""><?=@$numbers[1]["description_en"]?></textarea>

                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-blue text-primary text-center py-5 px-3 px-md-4 h-100">
                        <input name="title_es" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" placeholder="number" type="text" data-table="<?=@$numbers[2]["id"]?>" value="<?=@$numbers[2]["title_es"]?>">
                        <input name="title_en" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" type="text" placeholder="simbol" data-table="<?=@$numbers[2]["id"]?>" value="<?=@$numbers[2]["title_en"]?>">
                        <p class="tx-3 tx-md-4 mb-0">
                            <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English"data-table="<?=@$numbers[2]["id"]?>"  value=""><?=@$numbers[2]["description_es"]?></textarea>
                            <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español" data-table="<?=@$numbers[2]["id"]?>" value=""><?=@$numbers[2]["description_en"]?></textarea>

                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-yellow text-primary text-center py-5 px-3 px-md-4 h-100">
                    <input name="title_es" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" placeholder="number" type="text" data-table="<?=@$numbers[3]["id"]?>" value="<?=@$numbers[3]["title_es"]?>">
                    <input name="title_en" onchange="updateNumber(this)" class="display-4 w-50 fw-bold mb-3" type="text" placeholder="simbol" data-table="<?=@$numbers[3]["id"]?>" value="<?=@$numbers[3]["title_en"]?>">
                    <p class="tx-3 tx-md-4 mb-0">
                        <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English" data-table="<?=@$numbers[3]["id"]?>" value=""><?=@$numbers[3]["description_es"]?></textarea>
                        <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español" data-table="<?=@$numbers[3]["id"]?>" value=""><?=@$numbers[3]["description_en"]?></textarea>

                    </p>
                </div>
            </div>
        </div>
    </section>
<hr>
    <section class="content">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-6 col-lg-3">
                    <div class="bg-secondary text-primary text-center py-5 px-3 px-md-4 h-100">
                        <!--                        <h2 class="display-3 fw-bold mb-3">-->
                        <!--                            <span class="js-counter" data-counter="8">0</span>-->
                        <!--                        </h2>-->
                        <input name="title_es" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" placeholder="number" type="text" value="<?=@$what[0]["title_es"]?>" data-table="<?=@$what[0]["id"]?>" >
                        <input name="title_en" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" type="text" placeholder="simbol" value="<?=@$what[0]["title_en"]?>" data-table="<?=@$what[0]["id"]?>">
                        <p class="tx-3 tx-md-4 mb-0">
                            <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English" data-table="<?=@$what[0]["id"]?>" value=""><?=@$what[0]["description_en"]?></textarea>
                            <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español"  data-table="<?=@$what[0]["id"]?>" value=""><?=@$what[0]["description_es"]?></textarea>

                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-green text-primary text-center py-5 px-3 px-md-4 h-100">
                        <input name="title_es" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" placeholder="number" type="text" data-table="<?=@$what[1]["id"]?>" value="<?=@$what[1]["title_es"]?>">
                        <input name="title_en" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" type="text" placeholder="simbol" data-table="<?=@$what[1]["id"]?>" value="<?=@$what[1]["title_en"]?>">
                        <p class="tx-3 tx-md-4 mb-0">
                            <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English" data-table="<?=@$what[1]["id"]?>" value=""><?=@$what[1]["description_es"]?></textarea>
                            <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español" data-table="<?=@$what[1]["id"]?>" value=""><?=@$what[1]["description_en"]?></textarea>

                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-blue text-primary text-center py-5 px-3 px-md-4 h-100">
                        <input name="title_es" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" placeholder="number" type="text" data-table="<?=@$what[2]["id"]?>" value="<?=@$what[2]["title_es"]?>">
                        <input name="title_en" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" type="text" placeholder="simbol" data-table="<?=@$what[2]["id"]?>" value="<?=@$what[2]["title_en"]?>">
                        <p class="tx-3 tx-md-4 mb-0">
                            <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English" data-table="<?=@$what[2]["id"]?>"value=""><?=@$what[2]["description_es"]?></textarea>
                            <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español" data-table="<?=@$what[2]["id"]?>" value=""><?=@$what[2]["description_en"]?></textarea>

                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-yellow text-primary text-center py-5 px-3 px-md-4 h-100">
                        <input name="title_es" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" placeholder="number" type="text" data-table="<?=@$what[3]["id"]?>" value="<?=@$what[3]["title_es"]?>">
                        <input name="title_en" onchange="updateNumber(this)" class=" w-100 fw-bold mb-3" type="text" placeholder="simbol" data-table="<?=@$what[3]["id"]?>" value="<?=@$what[3]["title_en"]?>">
                        <p class="tx-3 tx-md-4 mb-0">
                            <textarea onchange="updateNumber(this)" name="description_es" class=" w-100 fw-bold mb-3" type="text" placeholder="English" data-table="<?=@$what[3]["id"]?>" value=""><?=@$what[3]["description_es"]?></textarea>
                            <textarea onchange="updateNumber(this)" name="description_en" class="w-100 fw-bold mb-3" type="text" placeholder="Español" data-table="<?=@$what[3]["id"]?>" value=""><?=@$what[3]["description_en"]?></textarea>

                        </p>
                    </div>
                </div>
            </div>
    </section>
<!--    <section >-->
<!--        <div class="container-fluid px-0">-->
<!--            <div id="philosophy-and-methodology" class="row g-0">-->
<!--                <div class="col-6 col-lg-3">-->
<!--                    <div class=" bg-green text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-1" role="button" aria-expanded="false">-->
<!--                        <h4 class="fw-bold mb-3 e" data-aos="fade-up">--><?//=@$what[0]["title_es"]?><!--</h4>-->
<!--                        <div class="collapse" id="ourwork-what-collapse-1">-->
<!--                            <p class="tx-3 mb-0">--><?//=@$what[0]["description_es"]?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-6 col-lg-3">-->
<!--                    <div class=" bg-secondary text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-2" role="button" aria-expanded="false">-->
<!--                        <h4 class="fw-bold mb-3 " data-aos="fade-up">--><?//=lang("What.flipingSquares.square2.title")?><!--</h4>-->
<!--                        <div class="collapse" id="ourwork-what-collapse-2">-->
<!--                            <p class="tx-3 mb-0">--><?//=lang("What.flipingSquares.square2.content")?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-6 col-lg-3">-->
<!--                    <div class=" bg-blue text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-3" role="button" aria-expanded="false">-->
<!--                        <h4 class="fw-bold mb-3" data-aos="fade-up">--><?//=lang("What.flipingSquares.square3.title")?><!--</h4>-->
<!--                        <div class="collapse" id="ourwork-what-collapse-3">-->
<!--                            <p class="tx-3 mb-0">--><?//=lang("What.flipingSquares.square3.content")?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-6 col-lg-3">-->
<!--                    <div class=" bg-yellow text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-4" role="button" aria-expanded="false">-->
<!--                        <h4 class="fw-bold mb-3" data-aos="fade-up">--><?//=lang("What.flipingSquares.square4.title")?><!--</h4>-->
<!--                        <div class="collapse" id="ourwork-what-collapse-4">-->
<!--                            <p class="tx-3 mb-0">--><?//=lang("What.flipingSquares.square4.content")?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- /.content -->


    

    
  </div>
<!---->
  <!-- Modal -->
<!--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalCenterTitle">Update Our numbers / What</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--      <form id="quickForm2">-->
<!--                <div class="card-body">-->
<!---->
<!--                <div class="form-group">-->
<!--                  <label for="exampleSelectRounded0">Select page</code></label>-->
<!--                  <select class="custom-select rounded-0" id="exampleSelectRounded0">-->
<!--                    <option>Home / Inicio</option>-->
<!--                    <option>What / Qué hacemos</option>-->
<!--                  </select>-->
<!--                </div>-->
<!---->
<!--                  -->
<!--                  <div class="card-footer">-->
<!--                    <div class="form-group">-->
<!--                        <label for="title">Title</label>-->
<!--                        <input name=" type="text" name="title" class="form-control" id="title" placeholder="Enter the link">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="description">Description</label>-->
<!--                        <input type="text" name="description" class="form-control" id="description" placeholder="Description">-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <hr>-->
<!--                  <div class="card-footer">-->
<!--                    <div class="form-group">-->
<!--                        <label for="titulo">Título</label>-->
<!--                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Enter the link">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="descripcion">Descripción</label>-->
<!--                        <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripción">-->
<!--                    </div>-->
<!--                  </div>-->
<!--                 -->
<!--                </div>-->
<!--                <!-- /.card-body -->-->
<!--                <div class="card-footer">-->
<!--                  <button type="submit" class="btn btn-secondary">Submit</button>-->
<!--                </div>-->
<!--              </form>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->


<script>

    // $("input, textarea").on("change",function(e){
    //     console.log($(this).is("input"));
    // });
</script>