<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?= $anggota; ?></h3>

        <p>Anggota</p>
      </div>
      <div class="icon">
        <i class="fa fa-users"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?= $buku; ?><sup style="font-size: 20px"></sup></h3>

        <p>Buku</p>
      </div>
      <div class="icon">
        <i class="fa fa-book"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?= $pinjam; ?></h3>

        <p>Peminjaman</p>
      </div>
      <div class="icon">
        <i class="fa fa-exchange"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?= $kembali; ?></h3>

        <p>Pengembalian</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>

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
        </tr>
      </thead>
      <tbody>
        <?php foreach ($all_buku->result() as $row) { ?>
          <tr>
            <td><?= $row->id_buku; ?></td>
            <td><?= $row->judul_buku; ?></td>
            <td><?= $row->nm_rak; ?></td>
            <td><?= $row->nm_kategori; ?></td>
            <td><?= $row->thn_terbit; ?></td>
            <td><?= $row->jumlah; ?></td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>