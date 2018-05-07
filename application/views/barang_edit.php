<form class="" action="<?php echo base_url('databarang/update')?>" method="post" enctype="multipart/form-data">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah Barang</h3>
    </div>
    <div class="panel-body">
        <input type="hidden" name="id" value="<?php echo $data_buku->id_buku; ?>">
      <div class="form-group">
        <label for="">Nama Buku :</label>
        <input type="text" class="form-control" name="nama" placeholder="" id="" value="<?php echo $data_buku->nama_buku; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Pengarang Buku :</label>
        <input type="text" class="form-control" name="pengarang" placeholder="" id="" value="<?php echo $data_buku->pengarang_buku; ?>">
        <p class="help-block"></p>
      </div><div class="form-group">
        <label for="">Kategori Buku :</label>
        <input type="text" class="form-control" name="kategori" placeholder="" id="" value="<?php echo $data_buku->kategori_buku; ?>">
        <p class="help-block"></p>
      <div class="form-group">
        <label for="">Harga Buku :</label>
        <input type="text" class="form-control" name="harga" placeholder="" id="" value="<?php echo $data_buku->harga_buku; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Stok :</label>
        <input type="text" class="form-control" name="stok" placeholder="" id="" value="<?php echo $data_buku->stok_buku; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Terjual :</label>
        <input type="text" class="form-control" name="terjual" placeholder="" id="" value="<?php echo $data_buku->terjual_buku; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Deskripsi :</label>
        <textarea class="form-control" name="deskripsi" placeholder="" id="" rows="8" cols="80" value="<?php echo $data_buku->deskripsi_buku; ?>"><?php echo $data_buku->deskripsi_buku; ?></textarea>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Foto</label>
        <input type="hidden" name="foto" value="<?php echo $data_buku->foto_buku; ?>">
          <input type="file" class="form-control" value="" id="" name="file_upload" placeholder="">
          <img style="width:80px;height:80px" src="<?php echo base_url(); ?>images/<?php echo $data_buku->foto_buku; ?>" class="img-circl" alt="User Image" />
      </div>
    </div>
    <div class="panel-footer">
      <button type="submit" name="button" value="button" class="btn btn-primary">Konfirmasi</button>
    </div>
  </div>
</form>
