<?php
    include('../../../core/config.php');
   
    $tenKM=$_POST['tenKM'];
    $tenKM_kd=$_POST['tenKM_kd'];
    $idUser=$_POST['idUser'];
    $ngaydangKM =$_POST['ngaydangKM'];
    $ngaytuKM =$_POST['ngaytuKM'];
    $ngaydenKM =$_POST['ngaydenKM'];
    $motaKM=$_POST['motaKM'];
	$hinhanhKM =$_FILES["hinhanhKM"]["name"];
	$hinhanhKM_tmp=$_FILES["hinhanhKM"]["tmp_name"];
	move_uploaded_file($hinhanhKM_tmp,"../../uploads/".$hinhanhKM);	
    if(isset($_POST['them']))
    {
        $sql = "insert into khuyenmai (idKM,tenKM,tenKM_kd,idUser,ngaydangKM,ngaytuKM,ngaydenKM,motaKM,hinhanhKM) 
                values ('','$tenKM','$tenKM_kd','$idUser','$ngaydangKM','$ngaytuKM','$ngaydenKM','$motaKM','$hinhanhKM')";
        mysqli_query($conn,$sql);
        echo "<script>alert('Thêm khuyến mãi thành công!');</script>";
        header('location: ../../index.php?quanly=danhsachkhuyenmai'); 
    }
    else if(isset($_POST['sua']))
    {
        $sql = "update khuyenmai set tenKM='$tenKM', tenKM_kd='$tenKM_khongdau', idUser='$idUser', ngaydangKM='$ngaydangKM', ngaytuKM='$ngaytuKM', ngaydenKM='$ngaydenKM', motaKM='$motaKM', hinhanhKM='$hinhanhKM' where idKM='$_GET[id]'";  
        mysqli_query($conn,$sql);
        echo "<script>alert('Đã cập nhật thông tin khuyến mãi!');</script>";
        header('location: ../../index.php?quanly=danhsachkhuyenmai'); 
    }
    else
    {
        $sql = "delete from khuyenmai where idKM='$_GET[id]'";
        mysqli_query($conn,$sql);
        echo "<script>alert('Xóa khuyến mãi thành công!');</script>";
        header('location: ../../index.php?quanly=danhsachkhuyenmai'); 
    }
?>