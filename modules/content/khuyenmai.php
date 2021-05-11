<div style="width:100%"> 
    <div class="title-2">
        <h2>Khuyến mãi</h2>
    </div>
    <div style="border:1px solid rgba(0,0,0,.1);padding:0 15px 0 15px">
        <?php 
            $sql = "select * from khuyenmai";
            $run = mysqli_query($conn,$sql);
        while($dong=mysqli_fetch_array($run,MYSQLI_ASSOC))
        {
        ?>
        <div style="width:100%;margin:0 auto;color:#fff">
            <div>
                <img src="admin/uploads/<?php echo $dong['hinhanhKM']?>" style="width:300px;height:250px;border:1px solid #ccc;margin:0 15px 15px 0;float:left"/>
                <h1 style="margin-top:15px"><a href="index.php?act=chitietkhuyenmai&id=<?php echo $dong['idKM']?>" style="color:#FF1;text-decoration:none;margin-top:15px"><?php echo $dong['tenKM'] ?></a></h1>
                <div style="font-style:italic;color:#00D200;font-size:16px;margin: 4px 0">áp dụng từ <?php echo date("d-m-Y", strtotime($dong['ngaytuKM'])); ?> đến <?php echo date("d-m-Y", strtotime($dong['ngaydenKM'])); ?></div>
               <!-- <div style="font-size:20px;margin: 4px 0">Đăng bởi:</div>
                <div style="font-size:20px;margin: 4px 0">Ngày đăng: <span style="font-size:22px;color:#757575;font-style:italic"><?php echo date("d-m-Y", strtotime($dong['ngaydangKM'])); ?></span></div> -->
                <div style="line-height:24px"><?php echo $dong['motaKM'] ?></div>
                <hr width="80%" align="left" style="clear:both;border:1px solid #ccc"></hr>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="clear"></div>
