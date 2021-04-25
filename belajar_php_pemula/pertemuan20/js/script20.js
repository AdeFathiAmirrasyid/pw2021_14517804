$(document).ready(function(){
    // menghilangkan tombol cari
      $("#tombol-cari").hide();
    
    // event ketika ditulis
      $("#keyword").on("keyup",function(){
        //munculkan element loading
        $(".loader").show();

        // ajax menggunakan load
        // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

        // ajax menggunakan GET $.get()
        $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(),function(data){
          $("#container").html(data);
          $(".loader").hide();
        })
  });
});