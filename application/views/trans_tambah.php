<form class="" action="<?php echo base_url('datatransaksi/save')?>" method="post" enctype="multipart/form-data">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah Data</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="">Nama Pembeli :</label>
        <input type="text" class="form-control" name="pembeli" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Nama Buku :</label>
        <input type="text" class="form-control" name="nama" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Pengarang Buku :</label>
        <input type="text" class="form-control" name="pengarang" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Harga Buku :</label>
        <input type="text" class="form-control" name="harga" placeholder="" id="" value="Rp.">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Jumlah Buku :</label>
        <input type="text" class="form-control" name="jumlah" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Total Harga :</label>
        <input type="text" class="form-control" name="tharga" placeholder="" id="">
        <p class="help-block"></p>
      </div>
    <div class="panel-footer">
      <a href="<?php echo base_url('datatrans')?>" type="submit" name="button" value="button" class="btn btn-warning">Kembali</a>
      <button type="submit" name="button" value="button" class="btn btn-primary">Tambah</button>
    </div>
  </div>
</form>
