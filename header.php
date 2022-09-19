<!doctype html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta charset="utf-8">
	<title>hello</title>
	<link href="css/media.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
	<style>
		
	</style>
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
			<a class="btn-themtheloai" href="themtheloai.php">Thêm thể loại</a>
			<div onmouseleave="nhaclk(x,'cacmenu')" onclick="clk(x,'cacmenu')" class="menu">
				<a class="img-menu"><img class="cls-menu" src="icon/menu.png"></a>
				<div class="cacmenu hovertheloai" id="cacmenu">
					<a href="themphim.php" class="menunho">Thêm phim</a>
					<a href="themtheloai.php" class="menunho">Thêm thể loại</a>
					<!-- <a href="suaphim.php?id=<?php echo $e['maphim'];?>" class="menunho">Sửa phim</a> -->
				</div>
			</div>
		</div>
		<div class="danhmuc">
			<div class="bdm"><a href="index.php">Trang chủ</a></div>
			<div id="idtheloai" onmouseleave="nhaclk(x,'hovertheloai')" onclick="clk(x,'hovertheloai')" class="bdm">
				<a href="#">Thể loại</a>
				<div class="hovertheloai" id="hovertheloai">
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
					<!-- <a class="menunho" href="">2019</a>
					<a class="menunho" href="">2002</a>
					<a class="menunho" href="">2002</a>
					<a class="menunho" href="">2002</a>
					<a class="menunho" href="">2002</a> -->

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

		var x = window.matchMedia("(max-width: 700px)");
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