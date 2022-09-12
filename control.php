<?php
    include "connect.php";
    class data{
		public function themphim($name,$pic,$theloai,$namsx,$phim,$noidung){
			global $conn;
			$sql="insert into phim(name,picture,theloai,namsx,phim,noidung) values ('$name','$pic','$theloai','$namsx','$phim','$noidung')";echo $sql;
			$run=mysqli_query($conn,$sql);
			return $run;
		}
		public function timphim($name,$sx){
			global $conn;
			if($sx==1)$sql="select * from phim where name like '%$name%'";
			else $sql="select * from phim where name like '%$name%' order by maphim desc";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
        public function dsphim(){
            global $conn;
            $sql="select * from phim order by maphim desc";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
		public function dsphimcu(){
            global $conn;
            $sql="select * from phim";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function infophim($id)
        {
            global $conn;
            $sql="select * from phim where maphim=$id";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
		public function suaphim($name,$picture,$theloai,$namsx,$filephim,$noidung,$maphim){
			global $conn;
			$sql="update phim set name='$name',picture='$picture',theloai='$theloai',namsx='$namsx', phim='$filephim',noidung='$noidung' where maphim='$maphim'";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
		public function xoaphim($maphim){
			global $conn;
			$sql="delete from phim where maphim=$maphim";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
		public function getnamsx(){
			global $conn;
			$sql="SELECT DISTINCT namsx FROM `phim` ORDER BY namsx ASC";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
		public function gettheloai(){
			global $conn;
			$sql="select * from theloai";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
		public function ins_theloai($tl){
			global $conn;
			$sql="insert into theloai(theloai) values('$tl')";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
		public function del_theloai($id){
			global $conn;
			$sql="delete from theloai where matheloai=$id";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
		public function chon_theloai($chuoisosanh,$chuoigoc){
			global $conn;
			$sql="select CHARINDEX('$chuoisosanh', '$chuoigoc')";
			$run=mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($run);
			$num=mysqli_num_rows($run);
			return $num;
		}
		public function chon_theloai2($chuoisosanh){
			global $conn;
			$sql="select * from phim where theloai like '$chuoisosanh%' or theloai like '%$chuoisosanh%' or theloai like '%$chuoisosanh'";echo $sql;
			$run=mysqli_query($conn,$sql);
			/* $row = mysqli_fetch_array($run); */
			return $run;
		}
		public function chontheloai($id){
			global $conn;
			$sql="select theloai from theloai where matheloai=$id";
			$run=mysqli_query($conn,$sql);
			return $run;
		}
    }

?>