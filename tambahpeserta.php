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
                <h3 class="card-title">Tambah Peserta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahpeserta.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Skema</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Kode Skema " name="kd_skema">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Peserta</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap" name="nm_peserta">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK" name="nik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis Kelamin" name="jenkel">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. HP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan No.HP" name="no_hp">
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