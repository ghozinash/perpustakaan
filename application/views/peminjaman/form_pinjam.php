<?php
$tgl_pinjam = date('Y-m-d');

$satu_hari = mktime(0, 0, 0, date("n"), date("j") + 1, date("Y"));
$tgl_kembali = date('Y-m-d', $satu_hari)
?>

<div class="col-md-8">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?= base_url() ?>peminjaman/simpan">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ID Pinjam</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_pinjam" value="<?= $id_pinjam; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Peminjam</label>
                    <div class="col-sm-10">
                        <select name="id_anggota" class="form-control select2">
                            <option value=""> - Pilih Peminjam - </option>
                            <?php
                            foreach ($peminjam as $row) { ?>
                                <option value="<?= $row->id_anggota; ?>"><?= $row->nama_anggota; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Buku</label>
                    <div class="col-sm-10">
                        <select name="id_buku" id="id_buku" class="form-control select2">
                            <option value=""> - Pilih Buku - </option>
                            <?php
                            foreach ($buku as $row) { ?>
                                <option value="<?= $row->id_buku; ?>"><?= $row->judul_buku; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Pinjam</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Kembali</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_kembali" value="<?= $tgl_kembali; ?>" class="form-control" required>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="<?= base_url() ?>peminjaman" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>