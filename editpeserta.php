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
                <h3 class="card-title">Edit Data Peserta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proseseditpeserta.php" method="POST"> 
                <div class="card-body">
                <?php
                        include "koneksidatabase.php";
                        $id=$_GET['id'];

                        $query = "SELECT * FROM peserta where id =$id";
                        $eksekusi = mysqli_query($db, $query);
                        $data = mysqli_fetch_array($eksekusi);
                        $id = $data[0];
                        $kd_skema = $data[1];
                        $nm_peserta = $data[2];
                        $nik = $data[3];
                        $jenkel= $data[4];
                        $alamat= $data[5];
                        $no_hp= $data[6];
                        

                            ?>


                  <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter nama" name="id" value="<?php echo $id?>">

                    <label for="exampleInputEmail1">Kode Skema </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama" name="kd_skema" value="<?php echo      
                     $kd_skema?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Peserta</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Jumlah Sks" name="nm_peserta" value="<?php echo $nm_peserta?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Jumlah Sks" name="nik" value="<?php echo $nik?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Semester" name="jenkel" value="<?php echo $jenkel?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Semester" name="alamat" value="<?php echo $alamat?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No HP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Semester" name="no_hp" value="<?php echo $no_hp?>">
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