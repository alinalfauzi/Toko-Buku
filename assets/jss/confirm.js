$(document).ready(function(){
  function load_buku() {
    $.ajax({
      url : 'http://localhost/shopbuku/databarang/info',
      type : 'post',
      success : function(response){
        $('#buku-info').html(response);
      }
    })
  }

  load_buku();

  $('body').delegate('.btnhapus', 'click', function(){
    var r = confirm('Apakah anda yakin?');
    if (r==true){
        data=$(this).attr('data-id');
        $.ajax({
          url:'http://localhost/shopbuku/databarang/hapus',
          type:'post',
          dataType:'json',
          data:{id:data},
          success: function(respon)
          {
            load_buku();
            // alert();
            // window.reload();
          }
        });
    }
  });


  $('body').delegate('.jsreload', 'click', function(){
    load_buku();
  });




});
