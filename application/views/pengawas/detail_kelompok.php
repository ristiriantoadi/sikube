<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Kelompok</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengawas</a></li>
              <li class="breadcrumb-item active">Kube</li>
              <li class="breadcrumb-item active">Kelompok</li>
              <li class="breadcrumb-item active">Detail Kelompok</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content --> 
    <div class="content">
      <!-- <p>Lorem ipsum dolor sit amet</p> -->
      <div class="row">
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Informasi Umum Kelompok</h3>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Nama Kelompok</dt>
                        <dd class="col-sm-8"><?php echo $detailKelompok->nama ?></dd>
                        <dt class="col-sm-4">Dusun</dt>
                        <dd class="col-sm-8"><?php echo $detailKelompok->dusun ?></dd>
                        <dt class="col-sm-4">Tanggal berdiri</dt>
                        <dd class="col-sm-8"><?php echo $detailKelompok->tanggal_berdiri ?></dd>
                        <dt class="col-sm-4">Produk</dt>
                        <dd class="col-sm-8"><?php echo $detailKelompok->produk ?></dd>
                        <dt class="col-sm-4">Lokasi Usaha</dt>
                        <dd class="col-sm-8"><?php echo $detailKelompok->lokasi_usaha ?></dd>
                    </dl>
                    <hr>
                    <dl class="row">
                      <dt class="col-sm-4">Ketua</dt>
                      <dd class="col-sm-8"><?php echo $namaKetua ?></dd>
                      <dt class="col-sm-4">Sekretaris</dt>
                      <dd class="col-sm-8"><?php echo $namaSekretaris ?></dd>
                      <dt class="col-sm-4">Bendahara</dt>
                      <dd class="col-sm-8"><?php echo $namaBendahara ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-green">
                <div class="card-header">
                    <h3 class="card-title">Keuangan</h3>
                </div>
                <div class="card-body">
                    <p>Say Something</p>
                </div>
            </div>
        </div>
      </div>
      <div class="card card-lime">
        <div class="card-header">
            <h3 class="card-title">Anggota</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($anggota as $rowAnggota){
                echo "<tr>
                        <td>$rowAnggota->nama_lengkap</td>
                        <td>$rowAnggota->alamat</td>
                        <td>$rowAnggota->tanggal_lahir</td>
                        <td>$rowAnggota->jabatan</td>
                        <td>
                          <div class='btn-group'>
                            <button class='btn btn-warning'>Sunting</button>
                            <button class='btn btn-danger'>Hapus</button>
                          </div>
                        </td>
                      </tr>";
              }
            ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->