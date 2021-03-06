<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Data Rekognisi Dosen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />



    <!-- DataTables -->
    <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


</head>


<body>
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">DATA REKOGNISI DOSEN</h4>

                                

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Rekognisi Dosen</b></h4>

                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama Dosen</th>
                            <th>Bidang Keahlian</th>
                            <th>Nama Rekognisi</th>
                            <th>Tingkat</th>
                            <th>Tahun</th>
                            <th>Keterangan</th>
                            <th>Bukti Rekognisi</th>
							<th>Ubah</th>
							<th>Hapus</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php foreach ($datarekognisi as $d) : ?>
                            <tr>
                                <td><?= $d['nama_dosen']; ?></td>
                                <td>Bidang Keahlian</td>
                                <td><?= $d['nama_recognisi']; ?></td>
                                <td><?= $d['keterangan']; ?></td>
                                <td><?= $d['id_tahun']; ?></td>
                                <td><?= $d['keterangan_recognisi']; ?></td>
                                <td><a href="\buktirekognisi\<?= $d['bukti']; ?>"><?= $d['bukti']; ?></a></td>
								<td>
                                        <a href="/rekognisidosen/edit/<?= $d['id_rekognisi']; ?>" name="ubah" class="btn btn-info btn-sm waves-effect w-md waves-light" id="sa-warning"> UBAH</a>
								<td>
                                    <form action="/rekognisidosendata/<?= $d['id_rekognisi']; ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" name="hapus" class="btn btn-danger btn-sm waves-effect w-md waves-light" id="sa-warning" onclick="return confirm('Apakah anda yakin ?'); "> HAPUS</button></td>
                                    </form>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- end row -->



    <footer class="footer text-right">
        2020 Rivaldo and Helmy
    </footer>

    </div>
    </div>


    <!-- END wrapper -->





    <!-- Required datatable js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });
    </script>

</body>

</html>