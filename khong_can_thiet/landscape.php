<!DOCTYPE html>
<html>
	<style>
		#video-block.rotated{
    -moz-transform:rotate(90deg);
  -webkit-transform:rotate(90deg);
  -o-transform:rotate(90deg);
  -ms-transform:rotate(90deg);
  transform:rotate(90deg);
}
	</style>
<body>
    <div id="video-block">
    <video class="video_player" id="player" width="100%" controls="controls" autoplay="autoplay">
      <source src="http://webcoban.vn/file/bunny.mp4"/>
      Your browser does not support the HTML5 video tag.  Use a better browser!
    </video>
    <button onclick="goFullscreen('player'); return false">
      View Fullscreen!
    </button>
 	</div>
</body>
</html>
<script>
	$(document).ready(function() {

    // rotate function

    function rotateVideoPlayer() {
        var width = $(window).width();
        var height = $(window).height();

        $("#video-block").width(0);
        $("#video-block").height(0);

        console.log(width, height);
        // document.body.scrollTop = document.documentElement.scrollTop = 0
        if (width > height) {
            console.log("landscape");
            $("#video-block").width(width);
            $("#video-block").height(width * 9 / 16);


            $("#video-block").css("left", 0 + "px");
            $("#video-block").removeClass("rotated");

        } else {

            console.log("portrait");
            $("#video-block").width(height);
            $("#video-block").height(height * 9 / 16);


            $("#video-block").css("left", width - (width - height * 9 / 16) / 2 + "px");
            $("#video-block").addClass("rotated");
            document.body.scrollTop = document.documentElement.scrollTop = 0

        }
    }


    $('#btn').on('click', function(){
        rotateVideoPlayer();
        var element = document.getElementById('videocontainer');
        if (element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
            element.webkitRequestFullScreen();
        }
    })
});
</script>