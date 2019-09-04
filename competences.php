<?php include("includes/header.inc.php"); ?>
<h2 class="competence-title">Web</h2>
<div class="competences-container" style="background-color: #ECEFF1;">
  <div class="competence">
    <p>HTML</p>
    <div class="jauge-competence" data-pourcentage="98">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>CSS</p>
    <div class="jauge-competence" data-pourcentage="98">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>JS</p>
    <div class="jauge-competence" data-pourcentage="90">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>JQuery</p>
    <div class="jauge-competence" data-pourcentage="90">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>PHP</p>
    <div class="jauge-competence" data-pourcentage="75">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>CakePHP</p>
    <div class="jauge-competence" data-pourcentage="53">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
</div>
<h2 class="competence-title">Graphisme</h2>
<div class="competences-container" style="background-color: #ECEFF1;">
  <div class="competence">
    <p>Photoshop CC</p>
    <div class="jauge-competence" data-pourcentage="98">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>Illustrator CC</p>
    <div class="jauge-competence" data-pourcentage="92">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>In Design CC</p>
    <div class="jauge-competence" data-pourcentage="75">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>Lightroom CC</p>
    <div class="jauge-competence" data-pourcentage="60">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>Procreate</p>
    <div class="jauge-competence" data-pourcentage="87">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>Adobe XD</p>
    <div class="jauge-competence" data-pourcentage="87">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
</div>
<h2 class="competence-title">Video</h2>
<div class="competences-container" style="background-color: #ECEFF1;">
  <div class="competence">
    <p>Premiere Pro CC</p>
    <div class="jauge-competence" data-pourcentage="90">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>After Effect CC</p>
    <div class="jauge-competence" data-pourcentage="45">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
  <div class="competence">
    <p>Filming</p>
    <div class="jauge-competence" data-pourcentage="77">
      <div class="jauge-competence-color" style="background-color: #C62828;">
      </div>
    </div>
  </div>
</div>
<script>
  setTimeout(function(){
  var jauge = document.getElementsByClassName('jauge-competence');
  var jaugeColor = document.getElementsByClassName("jauge-competence-color");
  for(var i=0; i<jauge.length; i++){
    var pourcentage = jauge[i].getAttribute("data-pourcentage");
    jaugeColor[i].style.setProperty("width", pourcentage+"%");
    jaugeColor[i].innerHTML = "<p>"+pourcentage+"%</p>";
  }
}, 300);
</script>
<?php include("includes/footer.inc.php"); ?>
