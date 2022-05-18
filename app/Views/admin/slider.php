<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Slider</h1>
          </div>
  
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputFile">Choose slider</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>

                    </div>
                  </div>
                  
                  <div class="card-footer">
                    <div class="form-group">
                        <label for="linkImg">Link</label>
                        <input type="text" name="link" class="form-control" id="linkImg" placeholder="Enter the link">
                    </div>
                    <div class="form-group">
                        <label for="buttonName">button's name</label>
                        <input type="text" name="buttonName" class="form-control" id="buttonName" placeholder="Password">
                    </div>
                  </div>
                  <hr>
                  <div class="card-footer">
                    <div class="form-group">
                        <label for="EnlaceImg">Enlace</label>
                        <input type="text" name="EnlaceImg" class="form-control" id="EnlaceImg" placeholder="Enter the link">
                    </div>
                    <div class="form-group">
                        <label for="nombreBoton">Nombre del botón</label>
                        <input type="text" name="nombreBoton" class="form-control" id="nombreBoton" placeholder="Password">
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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
                        <td><img src="https://via.placeholder.com/100x50" alt=""></td>
                        <td class="align-middle"><a href="" target="_blank">My link</a></td>
                        <td class="align-middle">Donate Now</td>
                        <td class="align-middle"><a href="" target="_blank">Mi enlace</a></td>
                        <td class="align-middle">user@gmail.com</td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-default btn-sm">
                            <i class="far fa-trash-alt"></i>
                            </button>

                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
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
      <form id="quickForm2">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputFile">Choose slider</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="fileUpdate" class="custom-file-input" id="fileUpdate">
                        <label class="custom-file-label" for="fileUpdate">Choose file</label>
                      </div>

                    </div>
                  </div>
                  
                  <div class="card-footer">
                    <div class="form-group">
                        <label for="linkImgUpdate">Link</label>
                        <input type="text" name="linkUpdate" class="form-control" id="linkImgUpdate" placeholder="Enter the link">
                    </div>
                    <div class="form-group">
                        <label for="buttonNameUpdate">button's name</label>
                        <input type="text" name="buttonNameUpdate" class="form-control" id="buttonNameUpdate" placeholder="Password">
                    </div>
                  </div>
                  <hr>
                  <div class="card-footer">
                    <div class="form-group">
                        <label for="EnlaceImgUpdate">Enlace</label>
                        <input type="text" name="EnlaceImgUpdate" class="form-control" id="EnlaceImgUpdate" placeholder="Enter the link">
                    </div>
                    <div class="form-group">
                        <label for="nombreBotonUpdate">Nombre del botón</label>
                        <input type="text" name="nombreBotonUpdate" class="form-control" id="nombreBotonUpdate" placeholder="Password">
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>