<div class="col-md-7">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?= base_url() ?>anggota/update">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ID Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_anggota" value="<?= $data['id_anggota']; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_anggota" value="<?= $data['nama_anggota']; ?>" class="form-control" placeholder="Nama Anggota" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="j_kel" class="form-control" required>
                            <?php
                            if ($data['j_kel'] == "Laki-laki") { ?>
                                <option value="Laki-laki" selected> Laki-laki </option>
                                <option value="Perempuan"> Perempuan </option>
                            <?php } else { ?>
                                <option value="Laki-laki"> Laki-laki </option>
                                <option value="Perempuan" selected> Perempuan </option>
                            <?php }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" cols="30" rows="5" required><?= $data['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">No. HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>" class="form-control" placeholder="No. HP" required>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="<?= base_url() ?>anggota" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>