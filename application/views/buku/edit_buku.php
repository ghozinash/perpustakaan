<div class="col-md-7">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?= base_url() ?>buku/update">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ID Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_buku" value="<?= $data['id_buku']; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul_buku" value="<?= $data['judul_buku']; ?>" class="form-control" placeholder="Judul Buku" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Rak</label>
                    <div class="col-sm-10">
                        <select name="id_rak" class="form-control select2">
                            <?php
                            foreach ($rak as $row) {
                                if ($data['id_rak'] == $row->id_rak) { ?>
                                    <option value="<?= $row->id_rak ?>" selected> <?= $row->nm_rak; ?> </option>
                                <?php } else { ?>
                                    <option value="<?= $row->id_rak ?>"> <?= $row->nm_rak; ?> </option>
                            <?php }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="id_kategori" class="form-control select2">
                            <?php
                            foreach ($kategori as $row) {
                                if ($data['id_kategori'] == $row->id_kategori) { ?>
                                    <option value="<?= $row->id_kategori ?>" selected> <?= $row->nm_kategori; ?> </option>
                                <?php } else { ?>
                                    <option value="<?= $row->id_kategori ?>"> <?= $row->nm_kategori; ?> </option>
                            <?php }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                        <input type="number" name="thn_terbit" value="<?= $data['thn_terbit']; ?>" class="form-control" placeholder="2000" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" value="<?= $data['jumlah']; ?>" class="form-control" placeholder="50" required>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="<?= base_url() ?>buku" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>