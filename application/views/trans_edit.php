<form class="" action="<?php echo base_url('datatransaksi/update')?>" method="post" enctype="multipart/form-data">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Edit Data</h3>
    </div>
    <div class="panel-body">
      <input type="hidden" class="form-control" name="id" placeholder="" id="" value="<?php echo $transaksi->id_trans; ?>">
      <div class="form-group">
        <label for="">Nama Pembeli :</label>
        <input type="text" class="form-control" name="pembeli" placeholder="" id="" value="<?php echo $transaksi->nama_trans; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Nama Buku :</label>
        <input type="text" class="form-control" name="nama" placeholder="" id="" value="<?php echo $transaksi->buku_trans; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Pengarang Buku :</label>
        <input type="text" class="form-control" name="pengarang" placeholder="" id="" value="<?php echo $transaksi->pengarang_trans; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Harga Buku :</label>
        <input type="text" class="form-control" name="harga" placeholder="" id="" value="Rp." value="<?php echo $transaksi->harga_trans; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Jumlah Buku :</label>
        <input type="text" class="form-control" name="jumlah" placeholder="" id="" value="<?php echo $transaksi->jumlah_trans; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Total Harga :</label>
        <input type="text" class="form-control" name="tharga" placeholder="" id="" value="<?php echo $transaksi->total_trans; ?>">
        <p class="help-block"></p>
      </div>
    <div class="panel-footer">
      <a href="<?php echo base_url('datatransaksi')?>" type="submit" name="button" value="button" class="btn btn-warning">Kembali</a>
      <button type="submit" name="button" value="button" class="btn btn-primary">Konfirmasi</button>
      <button type="submit" name="button" value="button" class="btn btn-danger">Cetak</button>
    </div>
  </div>
</form>
