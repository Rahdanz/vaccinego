$('.page-scrollx').on('click',function(e){
    
     // ambil isi href
     var tujuan=$(this).attr('href');
     //tangkap elemen yang bersangkutan
     var elementujuan=$(tujuan);
     // scrolling fx
     $('body').animate({
         scrollTop:elementujuan.offset().top-100
     },1020,'swing');
     e.preventDefault(); 

});