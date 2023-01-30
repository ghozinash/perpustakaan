<div class="col-md-7">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?= base_url() ?>kategori/update">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">ID Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_kategori" class="form-control" value="<?= $data['id_kategori']; ?>" placeholder="ID Kategori" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_kategori" class="form-control" value="<?= $data['nm_kategori']; ?>" placeholder="Kategori" required>
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