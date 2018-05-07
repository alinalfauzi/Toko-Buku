

    <div class="panel panel-default" style="border-radius:0px;">
      <div class="panel-heading">
        <h4 style="padding:0px;margin:0px;">
          <strong>Data Barang</strong>
        </h4>
          </div>
        <div class="panel-body">
          <a href="<?php echo base_url('Databarang/tambah');?>" class="btn btn-success">Tambah Data</a>
          <br><br><table class="table table-bordered table-striped" id="example1 ">
            <thead>
              <tr>
                <th  width="30px;">NO</th>
                <th  width="100px;" style="object-fit: cover;">Foto Buku</th>
                <th width="250px;">Nama_Buku</th>
                <th width="200px;">Pengarang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Terjual</th>
                <th  width="150px;">AKSI</th>
              </tr>
            </thead>
            <tbody id="buku-info">

            </tbody>
          </table>
        </div>

    </div>

        <script>
          $(document).ready(function(){
            $('#example1').dataTable();
          })
        </script>
