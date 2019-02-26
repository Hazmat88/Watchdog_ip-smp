<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta  charset="utf-8">
     <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Watchdog_ip/smp</title>
  </head>



<body>
    <?php
        $date = strftime('%A %d %B %Y');
        $heure = date("H:i:s");

        echo "<h2>$date</h2>";

    ?>
    <button class="bwiki" onclick="fhideshoww()">Wiki_Hide/Show</button>
    <button class="bsony" onclick="fhideshows()">Sony_Hide/Show</button>


<input type="text" id="myText" value="Ip">
<button onclick="ipadress()">Try it</button>



<script>
function rotatew() {
  var img = document.getElementById("bwiki");

  if ( img.className === "rotated-imagew") {
    img.setAttribute("class", "wiki");
  }else {
    img.setAttribute("class", "rotated-imagew");
  }
}
function rotates() {
  var img = document.getElementById("bsony");

  if ( img.className === "rotated-images") {
    img.setAttribute("class", "sony");
  }else {
    img.setAttribute("class", "rotated-images");
  }
}

function ipadress() {
  var adressip =  document.getElementById("myText").value;
  console.log(adressip);

  document.getElementById("browser_videos").src="http://" + adressip + ":8080/video";
}


</script>


        <h1 id="clock"></h1>



      <div class="camera">

            <div id="bwiki" class="wiki">
                <button  class="button button1">Wiki___Switch</button>
                <div class="cam01"><img id="browser_videos" class="cam01" alt="video" src="http://adressip:8080/video">
                </div>
                <div id="audio_pane" style="margin: auto; display: table;">
                    <audio id="html5_audio" controls=""><source src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>

                      <button class="bwiki" onclick="rotatew()">RotateW</button>
                </div>

            </div>


            <div id="bsony" class="sony">
                <button class="button button2">Sony___Switch</button>
                <div ><img id="browser_video" class="cam02" alt="video" src="http://192.168.1.37:8080/video">
                </div>
                <div id="audio_pane" style="margin: auto; display: table;">
                    <audio id="html5_audio" controls=""><source src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>

                      <button class="bsony" onclick="rotates()">RotateS</button>
                </div>
            </div>


      </div>






</body>

   <script src="js/main.js"></script>
   <script src="js/ipwebcam.js"></script>
</html>
