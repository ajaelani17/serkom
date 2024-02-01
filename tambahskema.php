<?php include('layouts/header.php') ?>
<?php include('layouts/topbar.php') ?>
<?php include('layouts/sidemenu.php') ?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Skema</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahskema.php" method="POST"> 
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Skema</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Kode Skema " name="kd_skema">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Skema</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Skema " name="nm_skema">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis Skema" name="jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Unit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah Unit" name="jml_unit">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

          <!--/.col (left) -->
          <!-- right column -->
        
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('layouts/footer.php') ?>