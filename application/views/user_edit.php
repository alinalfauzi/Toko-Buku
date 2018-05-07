<form class="" action="<?php echo base_url('datauser/update')?>" method="post">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah User</h3>
    </div>
    <div class="panel-body">
      <input type="hidden" name="id" value="<?php echo $user_buku->id_user; ?>">
      <div class="form-group">
        <label for="">Nama :</label>
        <input type="text" class="form-control" name="nama" placeholder="" id="" value="<?php echo $user_buku->nama_user; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Level_user :</label>
        <input type="text" class="form-control" name="level" placeholder="user/admin" id="" value="<?php echo $user_buku->level_user; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Jenis Kelamin :</label>
        <input type="text" class="form-control" name="jekel" placeholder="L/P" id="" value="<?php echo $user_buku->jk_user; ?>">
        <p class="help-block"></p>
      </div>
    <div class="form-group">
      <label for="">Alamat :</label>
      <input type="text" class="form-control" name="alamat" placeholder="" id="" value="<?php echo $user_buku->alamat_user; ?>">
      <p class="help-block"></p>
    </div>

      <div class="form-group">
        <label for="">Username :</label>
        <input type="text" class="form-control" name="username" placeholder="" id="" value="<?php echo $user_buku->user_user; ?>">
        <p class="help-block"></p>
      </div><div class="form-group">
        <label for="">Password :</label>
        <input type="text" class="form-control" name="password" placeholder="" id="" value="<?php echo $user_buku->pasword_user; ?>">
        <p class="help-block"></p>
    </div>
    <div class="panel-footer">
      <?php echo anchor('datauser','<button type="submit" name="button" value="button" class="btn btn-warning">Kembali</button>'); ?>
      <button type="submit" name="button" value="button" class="btn btn-primary">Konfirmasi</button>
    </div>
  </div>
</form>
