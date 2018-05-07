$(document).ready(function(){
  function load_buku() {
    $.ajax({
      url : 'http://localhost/shopbuku/datauser/info',
      type : 'post',
      success : function(response){
        $('#user-info').html(response);
      }
    })
  }

  load_buku();

  $('body').delegate('.btnhapus', 'click', function(){
    var r = confirm('Apakah anda yakin?');
    if (r==true){
        data=$(this).attr('data-id');
        $.ajax({
          url:'http://localhost/shopbuku/datauser/hapus',
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

});
