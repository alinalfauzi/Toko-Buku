<form class="" action="<?php echo base_url('databarang/save')?>" method="post" enctype="multipart/form-data">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah Barang</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="">Nama Buku :</label>
        <input type="text" class="form-control" name="nama" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Pengarang Buku :</label>
        <input type="text" class="form-control" name="pengarang" placeholder="" id="">
        <p class="help-block"></p>
      </div><div class="form-group">
        <label for="">Kategori Buku :</label>
        <input type="text" class="form-control" name="kategori" placeholder="" id="">
        <p class="help-block"></p>
      <div class="form-group">
        <label for="">Harga Buku :</label>
        <input type="text" class="form-control" name="harga" placeholder="" id="" value="Rp.">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Stok :</label>
        <input type="text" class="form-control" name="stok" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Terjual :</label>
        <input type="text" class="form-control" name="terjual" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Deskripsi :</label>
        <textarea class="form-control" name="deskripsi" placeholder="" id="" rows="8" cols="80"></textarea>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
          <label for="">Upload :</label>
          <input type="file" name="berkas" size="20" />
          </div>
    </div>
    <div class="panel-footer">
      <a href="<?php echo base_url('databarang')?>" type="submit" name="button" value="button" class="btn btn-warning">Kembali</a>
      <button type="submit" name="button" value="button" class="btn btn-primary">Tambah</button>
    </div>
  </div>
</form>
