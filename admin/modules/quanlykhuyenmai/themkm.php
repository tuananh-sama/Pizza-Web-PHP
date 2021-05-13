<div class="form-wrapper">
    <form action="modules/quanlykhuyenmai/xuly.php" method="post" enctype="multipart/form-data">
        <h2>Thêm Khuyến Mãi</h2>
        <table style="width: 100%; font-size: 18px;" cellspacing="10">
        <tr>
            <td>Tên khuyến mãi</td>
            <td><input type="text" name="tenKM" /></td>
        </tr>
        <tr>
            <td>Tên khuyến mãi (không dấu)</td>
            <td><input type="text" name="tenKM_kd" /></td>
        </tr>
        <tr>
            <td>Đăng bởi</td>
            <td>
                <select name="idUser">
                    <?php 
                        include('../configs/config.php');
                        $sql="select * from taikhoan where level='1'";
                        $run=mysqli_query($conn,$sql);
                        while($dong=mysqli_fetch_array($run,MYSQLI_ASSOC))
                        {
                    ?>
                    <option value="<?php echo $dong['idUser']?>"><?php echo $dong['name']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>	
        <tr>
            <td>Ngày đăng</td>
            <td><input name="ngaydangKM" type="date" style="width:30%;padding:4px 12px;box-sizing:border-box;border:1px solid rgb(180,180,180);border-radius:6px;outline:none;font-size:18px;color:rgba(40,40,40,0.75)"/></td>
        </tr>	
        <tr>
            <td>Nội dung</td>
            <td><textarea name="motaKM" id="ckeditor3" rows="10" style="font-size:16px;"></textarea></td>
            <script typy="text/javascript">CKEDITOR.replace("ckeditor3")</script>
        </tr>
        <tr>
            <td>Áp dụng từ</td>
            <td><input type="date" name="ngaytuKM" style="width:30%;padding:4px 12px;box-sizing:border-box;border:1px solid rgb(180,180,180);border-radius:6px;outline:none;font-size:18px;color:rgba(40,40,40,0.75)"/></td>
        </tr>
        <tr>
            <td>Áp dụng đến</td>
            <td><input type="date" name="ngaydenKM" style="width:30%;padding:4px 12px;box-sizing:border-box;border:1px solid rgb(180,180,180);border-radius:6px;outline:none;font-size:18px;color:rgba(40,40,40,0.75)"/></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanhkm"/></td>
            
        </tr>
        <tr>
            <td colspan="2">
                <div align="center"><button name="them" style="color:#fff;font-size:22px;font-weight:bold;background:#9400d3;padding:8px 12px;border-radius:6px;outline:none">Thêm</button></div> 
            </td>
        </tr>
        </table>
    </form>
</div>