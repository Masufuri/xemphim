<?php
    include('control.php');
    $getdata=new data;
    include('header.php');
?>

        <div class="new">
            
    <?php
		$layallphim=$getdata->dsphim();
		if(isset($_POST['sb'])){
			$chon=$_POST['thoigian'];
			echo "<script>window.location.href='loc.php?matl=".$_GET['matl']."&sort=".($_POST['thoigian']=='cu' ? 'cu' : 'moi')."'</script>";
		}
		if($_GET['sort']=="moi")$layallphim=$getdata->dsphim();
		else $layallphim=$getdata->dsphimcu();
        echo "<h1>Năm sản xuất: ".$_GET['namsx']."</h1>
		<form method='post' enctype='multipart/form-data' style='display:inline-block;'>
		<select name='thoigian'>
			<option value='moi' ".($_GET['sort'] == 'moi' ? 'selected' : '').">Mới nhất</option>
			<option value='cu' ".($_GET['sort'] == 'cu' ? 'selected' : '').">Cũ nhất</option>
		</select>
		<input type='submit' name='sb' value='Tìm'>
		</form>
        <div class='cacpicnew'>";
        
        foreach($layallphim as $se){
			if(strlen($se['name'])>15)$chamchamcham=substr_replace($se['name'],"...",15);else $chamchamcham=$se['name'];
            /* $loc=$getdata->chon_theloai($chontentheloai,$se['theloai']);
            if($loc>0)echo $se['picture']; */
            if($se['namsx']==$_GET['namsx'])echo "<div class='divpicnew'><a href='infophim.php?id=".$se['maphim']."'><img class='picnew' src='".$se['picture']."'><br><span class='title-phim-hot'>".$chamchamcham."</span></a></div>";
        }
        /* $loc=$getdata->chon_theloai2($chontentheloai);
        foreach($loc as $se){
            echo $se['picture'];
        } */
    ?>
    </div>
    </div>
    </div>
</body>
</html>