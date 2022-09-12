<?php
	include('control.php');
	$getdata=new data;
	$gettheloai=$getdata->gettheloai();
    $infophim=$getdata->infophim($_GET['id']);
    foreach($infophim as $inf);
	include('header.php');
?>

		<style>
			input[type='text']{
				width: 500px;
			}
		</style>
		<form method="post"  enctype="multipart/form-data" class="form_margin_top_10px">
			<table>
				<tr>
					<td>Tên phim: </td>
					<td><input type="text" name="name" value="<?php echo $inf['name']?>"></td>
				</tr>
				<tr>
					<td>File phim: </td>
					<td><input type="text" name="phim" value="<?php $txt=substr(strstr($inf['phim'],'/'),1);echo $filephim=substr(strstr($txt,'/'),1);?>"></td>
				</tr>
				<tr>
					<td>Ảnh: </td>
					<td><input type="file" accept="image/*" name="picture" class="file"></td>
				</tr>
				<tr>
					<td>Thể loại: </td>
					<td>
						<?php foreach($gettheloai as $se){?>
                            <div style='display:inline-block'><input type='checkbox' id='<?php echo $se['matheloai'];?>' name='theloai[]' value='<?php echo $se['theloai'];?>' <?php if(strlen(strstr($inf['theloai'],$se['theloai'])>0))echo "checked";?>><label for='<?php echo $se['matheloai'];?>'><?php echo $se['theloai'];?></label>&emsp;</div>
                        <?php };?>
					</td>
				</tr>
				<tr>
					<td style="width: 130px">Năm sản xuất: </td>
					<td><input type="text" name="namsx" value="<?php echo $inf['namsx'];?>"></td>
				</tr>
				<tr>
					<td>Nội dung: </td>
					<td><textarea name="noidung"><?php echo $inf['noidung']?></textarea></td>
				</tr>
			</table>
			<input type="submit" value="Sửa" name="sb">
			<input type="submit" name="sbxoa" value="Xóa" onclick="return(confirm('Bạn có chắc muốn xóa phim?'))">
		</form>
	</div>
	
	<?php
		if(isset($_POST['sbxoa'])){
			$xoaphim=$getdata->xoaphim($_GET['id']);
			if($xoaphim)echo "<script>alert('Đã xóa thành công');window.location.href='index.php';</script>";

		}
		if(isset($_POST['sb'])){
			$thumucphim=substr($filephim,0,strlen($filephim)-4);
			$tl="";
			$a="";$b="";$c="";
            $a=$_FILES['picture']['tmp_name'];
            $b=$_FILES['picture']['name'];
            if(!empty($a)){
                $c="img/".$_GET['id'].".png";
                $d=move_uploaded_file($a,$c);
            }else $c=$inf['picture'];
			if(isset($_POST['theloai']))foreach($_POST['theloai'] as $i){$tl.=$i." ";};
//			if($c)echo "xong";
			$suaphim=$getdata->suaphim($_POST['name'],$c,$tl,$_POST['namsx'],'phim/'.$thumucphim.'/'.$_POST['phim'],$_POST['noidung'],$inf['maphim']);
			if($suaphim){echo "<script>alert('Sửa thành công')</script><script>window.location.href='';</script>";/*header("refresh:0;url=");*/}
		}
		
	?>
</body>
</html>