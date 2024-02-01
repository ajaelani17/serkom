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
                <h3 class="card-title">Edit Skema</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proseseditskema.php" method="POST"> 
                <div class="card-body">
                <?php
                        include "koneksidatabase.php";
                        $id=$_GET['id'];

                        $query = "SELECT * FROM skema where id=$id";
                        $eksekusi = mysqli_query($db, $query);
                        $data = mysqli_fetch_array($eksekusi);
                        $id = $data[0];
                        $nm_skema = $data[1];
                        $jenis = $data[2];
                        $jml_unit = $data[3];
                        

                            ?>


                  <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter nama" name="id" value="<?php echo $id?>">

                    <label for="exampleInputEmail1">Nama Skema </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama" name="nm_skema" value="<?php echo      
                     $nm_skema?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Matkul" name="jenis" value="<?php echo $jenis?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Unit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Matkul" name="jml_unit" value="<?php echo $jml_unit?>">
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