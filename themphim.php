<?php
	include('control.php');
	$getdata=new data;
	$gettheloai=$getdata->gettheloai();
	include('header.php');
?>

		<form method="post"  enctype="multipart/form-data" class="form_margin_top_10px">
			<table>
				<tr>
					<td>Tên phim: </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>File phim: </td>
					<td><input type="text" name="phim"></td>
				</tr>
				<tr>
					<td>Ảnh: </td>
					<td><input type="file" accept="image/*" name="picture" class="file"></td>
				</tr>
				<tr>
					<td>Thể loại: </td>
					<td>
						<?php foreach($gettheloai as $se){echo "<div style='display:inline-block'><input type='checkbox' id='".$se['matheloai']."' name='theloai[]' value='".$se['theloai']."'><label for='".$se['matheloai']."'>".$se['theloai']."</label>&emsp;</div>";};?>
					</td>
				</tr>
				<tr>
					<td style="width: 130px">Năm sản xuất: </td>
					<td><input type="text" name="namsx"></td>
				</tr>
				<tr>
					<td>Nội dung: </td>
					<td><textarea name="noidung"></textarea></td>
				</tr>
			</table>
			<input type="submit" value="Thêm" name="sb">
		</form>
	</div>
	<?php
		$sophim=$getdata->dsphimcu();
		foreach($sophim as $dsphim){
			$hello=$dsphim['maphim'];
		}
		$anhphim='img/'.($hello+1).".png";
		//echo $tinhtoansophim;
		if(isset($_POST['sb'])){
			$thumucphim=substr($_POST['phim'],0,strlen($_POST['phim'])-4);
			$tl="";
			$a="";$b="";
			$a=$_FILES['picture']['tmp_name'];
			$b=$_FILES['picture']['name'];
			$c=move_uploaded_file($a,$anhphim);
			/* $e=$_FILES['phim']['tmp_name'];
			$d=$_FILES['phim']['name']; */
			if(isset($_POST['theloai']))foreach($_POST['theloai'] as $i){$tl.=$i." ";};
//			if($c)echo "xong";
			$themphim=$getdata->themphim($_POST['name'],$anhphim,$tl,$_POST['namsx'],"phim/".$thumucphim."/".$_POST['phim'],$_POST['noidung']);
			if($themphim){echo "<script>alert('Thêm thành công')</script><script>window.location.href=''</script>";/* header("refresh:0;url="); */}
		}
		
	?>
</body>
</html>