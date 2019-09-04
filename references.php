<?php include("includes/header.inc.php"); ?>
    <section class="productions-container">
      <div class="productions">
        <a href="http://nicolaschagnon.fr/" class="production-item">Nicolas Chagnon</a>
        <a href="http://archives.bastien-lucas.com/dotwist" class="production-item">Dotwist</a>
        <a href="http://archives.bastien-lucas.com/lead-up" class="production-item">Lead-up</a>
        <a href="http://archives.bastien-lucas.com/tanksurvivor" class="production-item">Tank Survivor</a>
        <a href="http://archives.bastien-lucas.com/tennis-live-score" class="production-item">Live Score</a>
        <a href="http://entreprise-c2l.fr/" class="production-item">C2L</a>
        <a href="embarques" class="production-item">Les Embarqués</a>

      </div>
    </section>
    <div class="images-container">
      <img src="images/nico-chagnon.png" alt="">
      <img src="images/dotwist.png" alt="">
      <img src="images/lead-up.png" alt="">
      <img src="images/tank.png" alt="">
      <img src="images/tennis.png" alt="">
      <img src="images/c2l.png" alt="">
      <img src="images/embarques.png" alt="">
    </div>
    <script type="text/javascript">
      $("body").css("overflow", "hidden");
      $(".images-container > img").eq(0).css("opacity", "1");
      var mouseY;
      var showedPicture = 0;
      $( document ).on( "mousemove", function( event ) {
        if(event.pageY){
          var topValue = $(".productions").css("top");
          topValue = topValue.substring(0, topValue.length-2);
          $(".productions").css("top", "-" + event.pageY*0.3 + "px");
        }
        //console.log( "pageX: " + event.pageX + ", pageY: " + event.pageY );
      });
      $(".production-item").hover(function(){
        $(".images-container > img").eq(showedPicture).css("opacity", "0");
        $(".images-container > img").eq($(this).index()).css("opacity", "1");
        showedPicture = $(this).index();
      });
    </script>
<?php include("includes/footer.inc.php"); ?>
