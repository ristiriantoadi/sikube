<style>
  .input-operator{
    display:none;
  }
  #input-operator-1{
    display:block;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Kelompok</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengawas</a></li>
              <li class="breadcrumb-item active">Kube</li>
              <li class="breadcrumb-item active">Tambah Kelompok</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content --> 
    <div class="content">
      <!-- <p>Lorem ipsum dolor sit amet</p> -->
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Umum Kelompok</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="namaKelompok">Nama Kelompok</label>
                          <input type="text" class="form-control" id="namaKelompok" placeholder="Masukkan nama kelompok">
                        </div>
                        <div class="form-group">
                          <label for="dusun">Dusun</label>
                          <input type="text" class="form-control" id="dusun" placeholder="Masukkan nama dusun">
                        </div>
                        <div class="form-group">
                          <label for="tanggalBerdiri">Tanggal Berdiri</label>
                          <!-- <input type="text" class="form-control" id="tanggalBerdiri" placeholder="Masukkan nama produk"> -->
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="produk">Produk</label>
                          <input type="text" class="form-control" id="produk" placeholder="Masukkan nama produk">
                        </div>
                        <div class="form-group">
                          <label for="lokasiUsaha">Lokasi Usaha</label>
                          <input type="text" class="form-control" id="lokasiUsaha" placeholder="Masukkan lokasi usaha">
                        </div>
                      </div>
                        <!-- /.card-body -->
                      <div class="card-header">
                        <h3 class="card-title">Daftar Anggota</h3>
                      </div>
                      <div class="card-body">
                        <?php 
                          $jumlah_anggota=10;
                          for ($x=1;$x<=$jumlah_anggota;$x++){
                            echo "<div class='card-header'>
                            <h4 class='card-title'>Anggota $x</h4>
                          </div>
                          <div class='card-body'>
                            <div class='form-group'>
                              <label for='namaLengkap'>Nama Lengkap</label>
                              <input type='text' class='form-control' 
                              id='namaLengkap' placeholder='Masukkan nama lengkap'>
                            </div>
                            <div class='form-group'>
                              <label for='alamat'>Alamat</label>
                              <input type='text' class='form-control' id='alamat' placeholder='Masukkan alamat'>
                            </div>
                            <div class='form-group'>
                              <label for='tanggalLahir'>Tanggal Lahir</label>
                              <div class='input-group'>
                                <div class='input-group-prepend'>
                                  <span class='input-group-text'><i class='far fa-calendar-alt'></i></span>
                                </div>
                                <input type='date' class='form-control' id='tanggalLahir' name='tanggal'
                                 placeholder='Tanggal lahir' >
                              </div>
                            </div>
                            <div class='form-group>
                              <label for='jabatan'>Jabatan</label>
                              <select class='form-control'>
                                <option>Ketua</option>
                                <option>Sekretaris</option>
                                <option>Bendahara</option>
                                <option selected>Anggota</option>
                              </select>
                            </div>
                            <br>
                            <div class='form-check'>
                              <input type='checkbox' class='form-check-input operator-kelompok' id='checkbox-$x'>
                              <label class='form-check-label' for='exampleCheck1'>Operator Kelompok</label>
                            </div>
                            <br>
                            <div id='input-operator-$x' class='input-operator'>
                              <div class='form-group'>
                                <label for='alamat'>Username</label>
                                <input type='text' class='form-control' id='alamat' placeholder='Masukkan username untuk operator'>
                              </div>
                              <p>Password awal sama dengan username</p>
                            </div>
                          </div>";
                          }
                        ?>
                      </div>
                    </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              </div>
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
  <script>
    const checkboxes = document.getElementsByClassName("operator-kelompok")
    for (let checkbox of checkboxes){
      // console.log(checkbox)
      checkbox.addEventListener('change', (event) => {
        var id = checkbox.id 
        var nomor = id.split('-')[1]
          // console.log(nomor)
        var idInputOperator = 'input-operator-'+nomor
          // console.log(idInputOperator)
        var div = document.getElementById(idInputOperator)
        if (event.target.checked) {
          // alert('checked');
          // console.log(checkbox.id)
          
          // console.log(div)
          div.style.display="block"
          for (let checkbox1 of checkboxes){
            if((checkbox1.id != checkbox.id)){
              checkbox1.disabled=true
            }
          }
        } else {
          // alert('not checked');
          div.style.display="none"
          for (let checkbox1 of checkboxes){
            checkbox1.disabled=false
          }
        }
})
    }
  </script>