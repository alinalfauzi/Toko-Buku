<form class="" action="<?php echo base_url('datauser/save')?>" method="post">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah User</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="">Nama :</label>
        <input type="text" class="form-control" name="nama" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Level_user :</label><br>
        <input type="radio" name="level" placeholder="" id="" value="admin">Admin <br>
        <input type="radio" name="level" placeholder="" id="" value="user">User
        <p class="help-block"></p>
      <div class="form-group">
        <label for="">Jenis Kelamin :</label><br>
        <input type="radio" name="jekel" placeholder="" id="" value="L">Laki - Laki <br>
        <input type="radio" name="jekel" placeholder="" id="" value="P">Perempuan
        <p class="help-block"></p>
      </div><div class="form-group">
        <label for="">Alamat :</label>
        <input type="text" class="form-control" name="alamat" placeholder="" id="">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Username :</label>
        <input type="text" class="form-control" name="username" placeholder="" id="">
        <p class="help-block"></p>
      </div><div class="form-group">
        <label for="">Password :</label>
        <input type="password" class="form-control" name="password" placeholder="" id="">
        <p class="help-block"></p>
    </div>
    <div class="panel-footer">
<a href="<?php echo base_url('datauser')?>" type="submit" name="button" value="button" class="btn btn-warning">Kembali</a>      <button type="submit" name="button" value="button" class="btn btn-primary">Tambah</button>
    </div>
  </div>
</form>
