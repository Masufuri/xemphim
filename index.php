<?php
	include('control.php');
	$getdata=new data;
	$phim=$getdata->dsphim();
	include('header.php');
?>

		<div class="hot">
			<h1>Phim hot</h1>
			<div class="cacpichot">
				<?php
					//echo end($phim['maphim']);
					foreach($phim as $i){
						if(strlen($i['name'])>15)$chamchamcham=substr_replace($i['name'],"...",15);else $chamchamcham=$i['name'];
					echo "<div class='divpichot'><a href='infophim.php?id=".$i['maphim']."'><img class='pichot' src='".$i['picture']."'><br><span class='title-phim-hot'>".$chamchamcham."</span></a></div>";}
				?>
				<!-- <div><a href="#"><img class="pichot" src="img/2.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/3.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/4.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/5.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/6.png"></a></div>
				<div><a href="#"><img class="pichot" src="img/2.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/3.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/4.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/5.jpg"></a></div>
				<div><a href="#"><img class="pichot" src="img/6.png"></a></div> -->
			</div>
		</div>
		<div class="clr"></div>
		<div class="new">
			<h1>Phim mới cập nhật</h1>
			<div class="cacpicnew">
				<?php
					foreach($phim as $se){
						if(strlen($se['name'])>15)$chamchamcham=substr_replace($se['name'],"...",15);else $chamchamcham=$se['name'];
						echo "<div class='divpicnew'><a href='infophim.php?id=".$se['maphim']."'><img class='picnew' src='".$se['picture']."'><br><span class='title-phim'>".$chamchamcham."</span></a></div>";
					}
				?>
				<!-- <div class="divpicnew"><a href="#">
					<img class="picnew" src="img/2.jpg"><br>
					<span>ádasd</span>
				</a></div>
				<div class="divpicnew">
					<a href="#"><img class="picnew" src="img/3.jpg"><br>
					asddas
					</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/4.jpg">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/5.jpg">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/6.png">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/2.jpg">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/3.jpg">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/4.jpg">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/5.jpg">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/6.png">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/5.jpg">
				</a></div>
				<div class="divpicnew"><a href="#">
					<img class="picnew" src="img/6.png">
				</a></div> -->
			</div>
		</div>
	</div>
<!--	<script src="c.js"></script>-->
</body>
</html>
