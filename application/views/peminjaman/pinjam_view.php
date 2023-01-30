<?php
if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info'); ?></div>
<?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>peminjaman/tambah_pinjam" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
    </div>
</div>
<br>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Peminjaman</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    // $tgl_kembali = new DateTime($row->tgl_kembali);
                    // $tgl_skrg = new DateTime();
                    // $selisih = $tgl_skrg->diff($tgl_kembali)->format("%a");
                ?>
                    <tr>
                        <td><?= $row->id_pinjam; ?></td>
                        <td><?= $row->nama_anggota; ?></td>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->tgl_pinjam; ?></td>
                        <td><?= $row->tgl_kembali; ?></td>
                        <td><span class="label label-success"><?= $row->status; ?></span></td>
                        <td>
                            <a href="<?= base_url() ?>peminjaman/kembalikan/<?= $row->id_pinjam; ?>" class="btn btn-primary btn-xs <?= $row->status == 'Dikembalikan' ? 'disabled' : '' ?>" onclick="return confirm('Yakin buku dikembalikan?')"> Kembalikan</a>
                            <a href="<?= base_url() ?>peminjaman/cancel/<?= $row->id_pinjam; ?>" class="btn btn-warning btn-xs <?= $row->status == 'Dikembalikan' ? 'disabled' : '' ?>" onclick="return confirm('Yakin dibatalkan?')"> Batal</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>