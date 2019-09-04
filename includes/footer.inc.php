    </div>
    <div id="hello-box">
      <p>Say hello ! <span>👋</span></p>
    </div>
    <script>
    $(document).ready(function(){
      $(".content").css("opacity", "1");
    });
    $('body a').click(function(event){
			event.preventDefault();
		});
    $("a").click(function(){
      console.log("test");
			var link = $(this).attr("href");
			$(".content").css("opacity", "0");
			setTimeout(function(){ document.location.href = link; }, 500);
		})
    var opened = false;
      $("#hello-box").click(function(){
        if(!opened){
          opened = true;
          $("#hello-box").css("width", "100%");
          $("#hello-box").css("height", "100vh");
          $("#hello-box").css("bottom", "0");
          $("#hello-box").css("right", "0");
          $("#hello-box").append("<div id='record-button'><i class='fas fa-microphone'></i></div>")
          /*setTimeout(function(){
            $("#hello-box").html("<p>Salut passé ! 👋</p>");
            $("#hello-box").css("background-color", "#C62828");
          }, 500);
          setTimeout(function(){
            $("#hello-box").css("width", "150px");
            $("#hello-box").css("height", "40px");
            $("#hello-box").css("bottom", "20px");
            $("#hello-box").css("right", "20px");
          }, 1000);*/
        }
      });
    </script>
  </body>
</html>
