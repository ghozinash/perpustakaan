<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
        .tgl-akhir {
            margin-left: -20px;
        }

        .btn-filter {
            margin-left: -40px;
        }

        .btn-refresh {
            margin-left: -100px;
        }

        .btn-pdf {
            margin-left: -160px;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="box-header">
            <form method="post" action="<?= base_url() ?>laporan">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="text-primary"><b>Filter Laporan</b></h4>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="tgl_akhir" class="form-control tgl-akhir" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary btn-filter"><i class="fa fa-filter"></i></button>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>laporan" class="btn btn-warning btn-refresh"><i class="fa fa-refresh"></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>laporan/view_pdf" class="btn btn-danger btn-pdf" target="_blank"><i class="fa fa-file-pdf-o"></i></a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID Pinjam</th>
                        <th>Peminjam</th>
                        <th>Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Tanggal Dikembalikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $row) { ?>
                        <tr>
                            <td><?= $row->id_pinjam; ?></td>
                            <td><?= $row->nama_anggota; ?></td>
                            <td><?= $row->judul_buku; ?></td>
                            <td><?= $row->tgl_pinjam; ?></td>
                            <td><?= $row->tgl_kembali; ?></td>
                            <td><?= $row->tgl_kembalikan; ?></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>