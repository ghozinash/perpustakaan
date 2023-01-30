<?php
if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info'); ?></div>
<?php }
?>

<style>
    .box {
        width: 50%;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>rak/tambah_rak" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Kategori</a>
    </div>
</div>
<br>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Rak Buku</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Rak</th>
                    <th>Rak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row->id_rak; ?></td>
                        <td><?= $row->nm_rak; ?></td>
                        <td>
                            <a href="<?= base_url() ?>rak/edit/<?= $row->id_rak; ?>" class="btn btn-info btn-xs">Edit</a>
                            <a href="<?= base_url() ?>rak/delete/<?= $row->id_rak; ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin ingin menghapusnya?');">Delete</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>