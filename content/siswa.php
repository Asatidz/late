<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AdminLTE 2 | Starter</title>
        <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />
    <!-- Bootstrap 3.3.7 -->
    <link
      rel="stylesheet"
      href="../../bower_components/bootstrap/dist/css/bootstrap.min.css"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../bower_components/font-awesome/css/font-awesome.min.css"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="../../bower_components/Ionicons/css/ionicons.min.css"
    />
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
    />
    </head>
      <body class="hold-transition skin-blue sidebar-mini">
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Siswa</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="?hal=siswa_tambah" class="tombol"><b>Tambah</b></a>
                  <table id="example1"class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Gender</th>
                        <th>Poin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
        <tbody>
                    <?php
        $query = "SELECT * FROM siswa ORDER BY id_siswa DESC";
        $result = mysqli_query($con,$query);
        $no = 0;
        while($data = mysqli_fetch_array($result)){
            $no++;
        ?>

<tr>
    <td><?=$no?></td>
    <td><img src="images/<?=$data['foto']?>" alt="" width="90"></td>
    <td><?=$data['nama_siswa']?></td>
    <td><?=$data['nis']?></td>
    <td><?=$data['tanggal_lahir']?></td>
    <td><?=$data['kelas']?></td>
    <td><?=$data['jurusan']?></td>
    <td><?=$data['gender']?></td>
    <td><?=$data['poin_sis']?></td>
    <td>
        <a href="?hal=siswa_edit&id=<?=$data['id_siswa']?>"
        class="tombol edit">Edit</a>
        <a href="?hal=siswa_hapus&id=<?=$data['id_siswa']?>&foto=<?=$data['foto']?>"
        class="tombol hapus">Hapus</a>
    </td>
</tr>

<?php
}
?>
    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
            <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $("#example2").DataTable({
          paging: true,
          lengthChange: false,
          searching: false,
          ordering: true,
          info: true,
          autoWidth: false,
        });
      });
    </script>
        </body>
        </html>
