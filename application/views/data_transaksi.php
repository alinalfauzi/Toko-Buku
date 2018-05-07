<div class="panel panel-default" style="border-radius:0px;">
  <div class="panel-heading">
    <h4 style="padding:0px;margin:0px;">
      <strong>Data Transaksi</strong>
    </h4>
      </div>
    <div class="panel-body">
      <a href="<?php echo base_url('Datatransaksi/tambah');?>" class="btn btn-success">Tambah Data</a>
      <br><br><table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th  width="30px;">NO</th>
            <th width="150px;">Nama Pembeli</th>
            <th width="150px;">Nama Buku</th>
            <th width="150px;">Pengarang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal</th>
            <th  width="130px;">AKSI</th>
          </tr>
        </thead>
        <tbody id="transaksi-info">

        </tbody>
      </table>
    </div>

</div>
