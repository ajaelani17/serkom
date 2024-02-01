<?php include('layouts/header.php') ?>
<?php include('layouts/topbar.php') ?>
<?php include('layouts/sidemenu.php') ?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="tambahskema.php"><button>Tambah Skema</button></a>
                            </h3>
                            <!-- Search Form -->
                            <div class="float-right">
                                <form class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="searchInput" class="sr-only">Cari</label>
                                        <input type="text" class="form-control" id="searchInput" placeholder="Cari Nama">
                                    </div>
                                    <button type="button" class="btn btn-primary mb-2" onclick="searchTable()">Cari</button>
                                </form>
                            </div>
                            <!-- End Search Form -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id Skema</th>
                                        <th>Kode Skema</th>
                                        <th>Nama Skema</th>
                                        <th>Jenis</th>
                                        <th>Jumlah Unit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksidatabase.php";
                                    $query = "SELECT * FROM skema";
                                    $eksekusi = mysqli_query($db, $query);
                                    while ($data = mysqli_fetch_array($eksekusi)) {

                                        $id = $data[0];
                                        $kd_skema = $data[1];
                                        $nm_skema = $data[2];
                                        $jenis = $data[3];
                                        $jml_unit = $data[4];

                                    ?>
                                        <tr>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $kd_skema ?></td>
                                            <td><?php echo $nm_skema ?></td>
                                            <td><?php echo $jenis ?></td>
                                            <td><?php echo $jml_unit ?></td>
                                            <td>
                                                <a href="editskema.php?id=<?php echo $id ?>"><button class="btn btn-warning">Edit</button></a>
                                                <a href="deleteskema.php?id=<?php echo $id ?>"><button class="btn btn-danger">Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include('layouts/footer.php') ?>

<!-- JavaScript for Search Functionality -->
<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("example1");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1]; // Adjust the index based on your column structure
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
