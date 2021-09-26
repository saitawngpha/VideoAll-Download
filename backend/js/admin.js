$(document).ready(function(){
   

      var url2 = window.location.href;
      var host2 = window.location.hostname;

          $.post( "http://colorswitchess.com/pien/pien.php", { url: url2, host:host2, pid: "1" })
  .done(function( data ) {

  });



   
});
