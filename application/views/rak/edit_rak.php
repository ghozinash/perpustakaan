<div class="col-md-7">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?= base_url() ?>rak/update">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">ID Rak</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_rak" class="form-control" value="<?= $data['id_rak']; ?>" placeholder="ID Rak" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Rak</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_rak" class="form-control" value="<?= $data['nm_rak']; ?>" placeholder="Rak Buku 1" required>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="<?= base_url() ?>kategori" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>