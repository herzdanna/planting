<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Users</h1>
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
              <form id="user/create" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="user">User name</label>
                    <input type="text" name="user" class="form-control" id="user" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button   class="btn btn-secondary">Submit</button>
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
            <h1>User's list</h1>
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
                      <th>id</th>
                      <th>User name</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>User 1</td>
                      <td>user@gmail.com</td>
                      <td>
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
        <h5 class="modal-title" id="exampleModalCenterTitle">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="emailUpdate">Email address</label>
                    <input type="email" name="emailUpdate" class="form-control" id="emailUpdate" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="userUpdate">User name</label>
                    <input type="text" name="userUpdate" class="form-control" id="userUpdate" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="passwordUpdate">Password</label>
                    <input type="password" name="passwordUpdate" class="form-control" id="passwordUpdate" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>