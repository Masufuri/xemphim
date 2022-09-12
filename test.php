<?php
$dongchu="Xin chào";
    /* include('control.php');
    $getdata=new data;
    $phim=$getdata->dsphim();
    
    //rsort($phim['maphim']);
    if(isset($_POST['sb'])){
    echo $_POST['a'];}
    $a='hello';
    echo "xin chao $a"; */
    //srt2vtt.php phim/1.srt phim/1.vtt;
?>

<!-- <form method="post" enctype="multipart/form-data">
<select name="a">
    <option value="aaaaa">a</option>
    <option>b</option>
    <option selected>c</option>
</select>
<input type="submit" name="sb">
</form> -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <meta charset="UTF-8">
      <title>aaaa</title>
      <link href="video-js.min.css" rel="stylesheet">
      <!-- <link href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css" rel="stylesheet"> -->
      <link rel="stylesheet" href="videojs-mobile-ui.css">
  </head> 
  <body>
  
  <div id="player"></div>
  <script>
    var player = new Clappr.Player({
      source: "phim/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX.mp4", 
      parentId: "#player",
      playback:{
        externalTracks:[{
          kind: 'subtitles',
          label: 'Tiếng Việt',
          lang: 'en',
          src: 'phim/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX.vtt',
        }]
      }
    });
  </script>
<!-- <video playsinline controls="true" id="my-video" class="video-js vjs-big-play-centered" data-setup="{}">
<source src="phim/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX.mp4" type="video/mp4">
<track src="phim/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX.vtt" kind="subtitles" srclang="VI" label="Tiếng Việt">
</video> -->
<script type="text/javascript">
  /* var player=videojs('my-video',{
    playbackRates:[0.25,0.5,1,1.5,2],
    aspectRatio:'16:9',
    loop: false,
    plugins:{
      hotkeys:{
        enableVolumeScroll:false,
      },
      
    },
    
  })
  player.mobileUi({
    fullscreen: {
        enterOnRotate: false,
        exitOnRotate: false,
        lockOnRotate: true,
        lockToLandscapeOnEnter: true,
  },
  });
 /*  player.zoomrotate({
  rotate: 0,
  zoom: 1.18
  }); */
 
</script>

<script type="text/javascript" src="video.min.js"></script>
<script type="text/javascript" src="videojs.hotkeys.min.js"></script>
<script type="text/javascript" src="videojs-mobile-ui.min.js"></script>
<script type="text/javascript" src="videojs.zoomrotate.js"></script>
<script src="videosub.js"></script>
<script src="video-player.js"></script>
<script type="text/javascript" src="zoom.js"></script>

  </body>
</html>
