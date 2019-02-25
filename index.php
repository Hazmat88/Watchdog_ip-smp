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

        <h1 id="clock"></h1>



      <div class="camera">

            <div class="wiki">
                <button class="button button1">Wiki___Switch</button>
                <div class="cam01"><img id="browser_video" class="cam01" alt="video" src="http://192.168.1.37:8080/video">
                </div>
                <div id="audio_pane" style="margin: auto; display: table;">
                    <audio id="html5_audio" controls=""><source src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>
                </div>
            </div>

            <div class="sony">
                <button class="button button2">Sony___Switch</button>
                <div class="cam02"><img id="browser_video" class="cam02" alt="video" src="http://192.168.1.37:8080/video">
                </div>
                <div id="audio_pane" style="margin: auto; display: table;">
                    <audio id="html5_audio" controls=""><source src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>
                </div>
            </div>

      </div>






</body>

   <script src="js/main.js"></script>
   <script src="js/ipwebcam.js"></script>
</html>
