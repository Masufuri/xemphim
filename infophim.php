<?php
    include('control.php');
    $getdata=new data;
    $infophim=$getdata->infophim($_GET['id']);
	foreach($infophim as $e);
?>
<!doctype html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta charset="utf8">
    <title>jkj</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
	<!-- <script src="sub.js"></script> -->
	<link href="css/media.css" rel="stylesheet">
	<link href="css/video-js.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css.css">
    
    <link rel="stylesheet" href="css/videojs-mobile-ui.css">
	<link rel="stylesheet" href="css/forest.css">
	<!-- <link href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css" rel="stylesheet"> -->
	
	<style type="text/css">
		
	
	</style>
	
</head>
<body>
	<div class="sum">
		<div class="top">
			<a href="index.php"><img src="img/Untitled-1.png" height="50px" style="margin: 10px"></a>
			<form class="ftimkiem" method="POST" enctype="multipart/form-data" style="height: fit-content;">
			<input type="text" name="timkiem" style="border-radius: 30px;width: 350px;height: 30px;margin: 15px 0 auto 10px;padding-left: 5px">
			<button type="submit" name="btimkiem">Tìm kiếm</button>
			</form>
			<?php
				if(isset($_POST['btimkiem'])){
					header("location:timkiem.php?tukhoa=".$_POST['timkiem']);
				}
			?>
			<a class="btn-themphim" href="themphim.php">Thêm phim</a>&emsp;
			<a class="btn-themtheloai" href="themtheloai.php">Thêm thể loại</a>&emsp;
			<a class="btn-suaphim" href="suaphim.php?id=<?php echo $e['maphim'];?>">Sửa phim</a>
			
			<div onmouseleave="nhaclk(x,'cacmenu')" onclick="clk(x,'cacmenu')" class="menu" style="margin-left: -6px;">
				<a class="img-menu"><img class="cls-menu" src="icon/menu.png"></a>
				<div class="cacmenu hovertheloai" id="cacmenu">
					<a href="themphim.php" class="menunho">Thêm phim</a>
					<a href="themtheloai.php" class="menunho">Thêm thể loại</a>
					<a href="suaphim.php?id=<?php echo $e['maphim'];?>" class="menunho">Sửa phim</a>
				</div>
			</div>
		</div>
		<div class="danhmuc">
			<div class="bdm"><a href="index.php">Trang chủ</a></div>
			<div id="idtheloai" onmouseleave="nhaclk(x,'hovertheloai')" onclick="clk(x,'hovertheloai')" class="bdm">
				<a href="#">Thể loại</a>
				<div class="hovertheloai" id="hovertheloai" style="z-index: 15;">
					<?php
						$gettheloai=$getdata->gettheloai();
						foreach($gettheloai as $se){echo "<a class='menunho' href='loc.php?matl=".$se['matheloai']."&sort=moi'>".$se['theloai']."</a>";};
					?>
					<!-- <a class="menunho" href="">Viễn tưởng</a>
					<a class="menunho" href="">Siêu nhiên</a>
					<a class="menunho" href="">Đời thường</a>
					<a class="menunho" href="">Đời thường</a>
					<a class="menunho" href="">Đời thường</a>
					<a class="menunho" href="">Đời thường</a>
					<a class="menunho" href="">Đời thường</a>
					<a class="menunho" href="">Đời thường</a>
					<a class="menunho" href="">Đời thường</a> -->
				</div>
			</div>
			<div class="bdm"><a href="#">Phim Bộ</a></div>
			<div class="bdm"><a href="#">Chiếu rạp</a></div>
			<div onmouseleave="nhaclk(x,'hovertheloai-nam')" onclick="clk(x,'hovertheloai-nam')" class="bdm">
				<a href="#">Năm</a>
				<div class="hovertheloai" id="hovertheloai-nam">
					<?php
						$namsxphim=$getdata->getnamsx();
						foreach($namsxphim as $nsx){
							echo "<a class='menunho' href='locnamsx.php?namsx=".$nsx['namsx']."&sort=moi'>".$nsx['namsx']."</a>";
						}
					?>
				</div>
			</div>
		</div>
		<?php
			
				// echo "<img src='".$se['picture']."'><br>Tên: ".$se['name']."";
			$sub=substr($e['phim'],0,strlen($e['phim'])-4);
			//echo $sub;
		?>
		<div class="form_margin_top_10px">
			<div class="clsvideo">
			<video preload="auto" playsinline controls="true" id="my-video" class="video-js vjs-theme-forest vjs-big-play-centered vjs-fill" data-setup="{}">
				<source src="<?php echo $e['phim'];?>" type="video/mp4">
				<track src="<?php echo $sub?>.vtt" kind="subtitles" srclang="us" label="Tiếng Việt"/>
			</video>
			</div>
			<script type="text/javascript">
				
			</script>
			<br>
			<div class="ttphim">
			<div class="imginfophim">
				<img class="picnew" src="<?php echo $e['picture'];?>">
				
			</div>
			
			
			
			<table class="infophim">
				<tr>
				<td>Tên phim: <a><?php echo $e['name'];?></a></td>
				</tr>
				<tr><td>
				Thể loại: <?php
					$t="";
					$gettl=$getdata->gettheloai();
					foreach($gettl as $gtl){if(strlen(strstr($e['theloai'],$gtl['theloai'])>0)){$t.= "<a class='theloaitronginfo' href='loc.php?matl=".$gtl['matheloai']."&sort=moi'>".$gtl['theloai']."</a>, ";/* if(next($gettl)==true)echo ", "; */}}
					$l=rtrim($t,", ");
					echo $l;
				?></td></tr>
				<!-- Thể loại: <?php //echo $e['theloai'];?><br> -->
				<tr><td>
				Năm: <?php echo $e['namsx'];?>
				</td></tr>
				<tr>
					<td>Nội dung: <?php echo $e['noidung'];?></td>
				</tr>
				<tr><td><a style="color: blue;" href="<?php echo $e['phim'];?>">Tải phim</a></td></tr>
			</table>
			</div>
		</div>
	</div>
	<script>
		/* var jmediaquery = window.matchMedia( "(max-width: 600px)" )
		if (jmediaquery.matches) {
			// window width is at least 480px
			function clk(el){
							var tag=document.getElementById(el);
							tag.style.display=tag.style.display==='block'?'none':'block';
			}
			function nhaclk(el){
				var tag=document.getElementById(el);
				tag.style.display='none';
			}
		}
		else {
			
			// window width is less than 480px
		} */

		var x = window.matchMedia("(max-width: 600px)");
		myFunction(x); // Call listener function at run time
		x.addListener(myFunction);
		
		
		function clk(x,el) {
			if (x.matches) { // If media query matches
				
				
					var tag=document.getElementById(el);
					tag.style.display=tag.style.display==='block'?'none':'block';
					
				}else{document.getElementById(el).style="";}}
		function nhaclk(x,el){
			if (x.matches) {
				var tag=document.getElementById(el);
				tag.style.display='none';
			}else{document.getElementById(el).style="";}}
		function myFunction(x){
			if(x.matches){
				document.getElementById('hovertheloai').style="";
				document.getElementById('hovertheloai-nam').style="";
			}else{
				document.getElementById('hovertheloai').style="";
				document.getElementById('hovertheloai-nam').style="";
			}
		}
				
				
		
		
		/* 
		 */
				
		
	</script>
	<script src="js/video.min.js"></script>
	<script src="js/videojs.hotkeys.min.js"></script>
	<script src="js/videojs-mobile-ui.min.js"></script>
	<script src="js/videojs.zoomrotate.js"></script>
	<script src="js/zoom.js"></script>
	<script src="js/video-player.js"></script>
</body>
</html>