<?php
    include('../core/config.php');    
    $sql = "select * from khuyenmai ";
    $run = mysqli_query($conn,$sql);
?>
<div class="container">
    <h2 class="text-center">Danh sách khuyến mãi</h2>           
    <table class="table table-hover" style="text-align:center">
        <thead>
            <tr>
                <th style="width:10%">Tên tiêu đề</th>
                <th style="width:10%">Người đăng</th>
                <th style="width:10%">Ngày đăng</th>
                <th style="width:30%">Nội dung</th>
                <th style="width:10%">Từ ngày</th>
                <th style="width:10%">Đến ngày</th>
                <th style="width:10%">Hình ảnh</th>
                <th colspan="2">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC))
            {
            ?>
                <tr>
                <td><?php echo $dong['tenKM'] ?></td>
                <td>
                    <?php 
                        $sql1 = "select * from khuyenmai,taikhoan where khuyenmai.idKM=taikhoan.idUser";
                        $run1 = mysqli_query($conn,$sql1);
                        $dong1 = mysqli_fetch_array($run1,MYSQLI_ASSOC);
                        echo $dong1['name'];
                    ?>
                </td>
                <td><?php echo date("d-m-Y", strtotime($dong['ngaydangKM'])); ?></td>
                <td><?php echo $dong['motaKM'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($dong['ngaytuKM'])); ?></td>
                <td><?php echo date("d-m-Y", strtotime($dong['ngaydenKM'])); ?></td>
                <td><img src="uploads/<?php echo $dong['hinhanhKM']?>" alt="" width="100px"></td>
                <td align="center">
                    <?php echo "<a href='index.php?quanly=suakhuyenmai&id=$dong[idKM]'><i class='fa fa-edit'></i></a>" ?>
                </td>
                <td align="center">
                    <?php echo "<a onclick= \" return confirm('Bạn thật sự muốn xóa tin tin này sao?') \" href='modules/quanlykhuyenmai/xuly.php?act=xoa&id=$dong[idKM]'><i class='fa fa-trash'></i></a>" ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>