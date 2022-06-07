<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!--    <section class="content-header">-->
<!--      <div class="container-fluid">-->
<!--        <div class="row mb-2">-->
<!--          <div class="col-sm-6">-->
<!--            <h1>Add Slider</h1>-->
<!--          </div>-->
<!--  -->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="content">-->
<!--      <div class="">-->
<!--          <div class="card card-primary">-->
<!--              <div class="card-body  ">-->
<!--                  <form id="slider/create" method="POST">-->
<!--                      <div class="col-md-3">-->
<!---->
<!--                          <div class="form-group ">-->
<!--                              <label for="exampleInputFile">Choose slider</label>-->
<!--                              <div >-->
<!--                                  <div class="custom-file">-->
<!--                                      <input type="file" class="custom-file-input" id="exampleInputFile">-->
<!--                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>-->
<!--                                  </div>-->
<!---->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-3">-->
<!---->
<!--                          <div class="card-footer">-->
<!---->
<!--                              <div class="form-group">-->
<!--                                  <label for="exampleInputEmail1">Link</label>-->
<!--                                  <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter the link">-->
<!--                              </div>-->
<!--                              <div class="form-group">-->
<!--                                  <label for="exampleInputPassword1">button's name</label>-->
<!--                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <hr>-->
<!--                      <div class="card-footer col-md-3">-->
<!--                          <div class="form-group">-->
<!--                              <label for="exampleInputEmail1">Enlace</label>-->
<!--                              <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter the link">-->
<!--                          </div>-->
<!--                          <div class="form-group">-->
<!--                              <label for="exampleInputPassword1">Nombre del botón</label>-->
<!--                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="card-footer col-md-3">-->
<!--                          <button type="submit" class="btn btn-secondary">Submit</button>-->
<!--                      </div>-->
<!---->
<!--                  </form>-->
<!---->
<!--              </div>-->
<!---->
<!--          </div>-->
<!--      </div>-->
<!--    </section>-->
    <!-- /.content -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider's list</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image </th>
                                <th>link </th>
                                <th>button's name</th>
                                <th>Enlace</th>
                                <th>nombre de enlace</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="slider">
                                        <div class="w-50">
                                            <input type="file" class="dropify"  onchange="updateSlider(this)" data-path="slider-1" data-default-file="<?=$sliders[0]["routeImg"]?>">
                                        </div>
<!--                                        <img class="img-lg img-thumbnail" src="--><?//=$sliders[0]["routeImg"]?><!--" alt="">-->
                                    </td>
                                    <td class="align-middle"><a href="<?=$sliders[0]["link_en"]?>" target="_blank"><?=$sliders[0]["link_en"]?></a></td>
                                    <td class="align-middle"><?=$sliders[0]["textBtn_en"]?></td>
                                    <td class="align-middle"><a href="<?=$sliders[0]["link_es"]?>" target="_blank"><?=$sliders[0]["link_es"]?></a></td>
                                    <td class="align-middle"><?=$sliders[0]["textBtn_es"]?></td>

                                    <td class="align-middle">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-controller="slider" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="slider">
                                        <div class="w-50">
                                            <input type="file" class="dropify" data-height="100" data-path="slider-2" data-default-file="<?=$sliders[1]["routeImg"]?>">
                                        </div>

                                    </td>
                                    <td class="align-middle"><a href="<?=$sliders[1]["link_en"]?>" target="_blank"><?=$sliders[1]["link_en"]?></a></td>
                                    <td class="align-middle"><?=$sliders[1]["textBtn_en"]?></td>
                                    <td class="align-middle"><a href="<?=$sliders[1]["link_es"]?>" target="_blank"><?=$sliders[1]["link_es"]?></a></td>
                                    <td class="align-middle"><?=$sliders[1]["textBtn_es"]?></td>
                                    <td class="align-middle">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal"  data-target="#exampleModalCenter">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="slider">
                                        <div class="w-50">
                                            <input type="file" class="dropify" data-height="100" data-path="slider-3" data-default-file="<?=$sliders[2]["routeImg"]?>">
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="<?=$sliders[2]["link_en"]?>" target="_blank"><?=$sliders[2]["link_en"]?></a></td>
                                    <td class="align-middle"><?=$sliders[2]["textBtn_en"]?></td>
                                    <td class="align-middle"><a href="<?=$sliders[2]["link_es"]?>" target="_blank"><?=$sliders[2]["link_es"]?></a></td>
                                    <td class="align-middle"><?=$sliders[2]["textBtn_es"]?></td>

                                    <td class="align-middle">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-origin="slider" data-target="#exampleModalCenter">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Update Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div id="">
                <div class="card-body">
                    <div class="card-footer">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Link</label>
                            <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter the link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">button's name</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enlace</label>
                            <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter the link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nombre del botón</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<script>

        localStorage.setItem("sliders",JSON.stringify(<?=json_encode($sliders)?>));


</script>