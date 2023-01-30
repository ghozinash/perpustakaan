<?php
if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info'); ?></div>
<?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>buku/tambah_buku" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Buku</a>
    </div>
</div>
<br>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Buku</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Rak</th>
                    <th>Kategori</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data->result() as $row) { ?>
                    <tr>
                        <td><?= $row->id_buku; ?></td>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->nm_rak; ?></td>
                        <td><?= $row->nm_kategori; ?></td>
                        <td><?= $row->thn_terbit; ?></td>
                        <td><?= $row->jumlah; ?></td>
                        <td>
                            <a href="<?= base_url() ?>buku/edit/<?= $row->id_buku; ?>" class="btn btn-info btn-xs">Edit</a>
                            <a href="<?= base_url() ?>buku/delete/<?= $row->id_buku; ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin ingin menghapusnya?');">Delete</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>