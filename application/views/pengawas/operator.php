<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Operator</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengawas</a></li>
              <li class="breadcrumb-item active">Kube</li>
              <li class="breadcrumb-item active">Data Operator</li>
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
        <div class="col-12">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Nama Operator</th>
                <th>Nama Kelompok</th>
                <!-- <th></th> -->
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($operator as $rowOperator){
                echo "<tr>
                        <td>$rowOperator->nama_lengkap</td>
                        <td>$rowOperator->nama</td>
                        <td>
                          <div class='btn-group'>
                            <button class='btn btn-info'>Lihat selengkapnya</button>
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