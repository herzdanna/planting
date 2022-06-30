<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Video</h1>
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



                  <div class="card-footer">
                    <div class="form-group">
                        <label for="fileName">Youtube video url</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
                    </div>
                    <div class="form-group">
                        <label for="fileName">Video's name</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
                    </div>
                  </div>
                  <hr>
                  <div class="card-footer">
                    <div class="form-group">
                        <label for="fileName">Url del video</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
                    </div>
                    <div class="form-group">
                        <label for="fileName">Nombre</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
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
            <h1>Video's list</h1>
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
                        <th>Name </th>
                        <th>Video </th>>
                        <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Video 1</td>
                        <td><iframe width="315" height="155" src="https://www.youtube.com/embed/AHz2jeQWcik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>

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
        <h5 class="modal-title" id="exampleModalCenterTitle">Update Vedio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="quickForm2">
                <div class="card-body">
                <div class="card-footer">
                    <div class="form-group">
                        <label for="fileName">Youtube video url</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
                    </div>
                    <div class="form-group">
                        <label for="fileName">Video's name</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
                    </div>
                  </div>
                  <hr>
                  <div class="card-footer">
                    <div class="form-group">
                        <label for="fileName">Url del video</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
                    </div>
                    <div class="form-group">
                        <label for="fileName">Nombre</label>
                        <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Enter the file name">
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