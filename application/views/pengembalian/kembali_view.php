<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Pengembalian</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>ID Pinjam</th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Tanggal Dikembalikan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
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