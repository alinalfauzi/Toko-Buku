<head>
  <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
</head>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" style="text-align:center;">Home User</h3>
  </div>
</div>
          <?php foreach ($buku->result() as $data) { ?>
            <div class="margin">
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img style="width:268px; height:269px" src="<?php echo base_url('images/'.$data->foto_buku); ?>" alt="" />
                      <h2><?php echo "$data->harga_buku"; ?></h2>
                      <p style="text-transform:capitalize;"><?php echo "$data->nama_buku"; ?></p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-thumbs-up"></i>Favorit</a>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-check"></i>Beli</a>

                      </div>
                </div>

              </div>
            </div>
          </div>
          <?php } ?>
