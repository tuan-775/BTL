<?php

?>
<ul class="menu1 mainmenu">
	<li><a href="index.php?action=Home">Trang chủ</a></li>
	<li>
		<a href="index.php?action=Product">Sản phẩm</a>
		<ul class="menu2 mainmenu">
			<?php
			foreach ($productType as $v) {
			?>
				<li>
					<a href="index.php?action=Product&id=<?php echo $v["ma_loaisp"] ?>">
						<?php echo $v["ma_loaisp"] ?>
					</a>
				</li>
			<?php } ?>

		</ul>
	</li>
	<li><a href="#">Góp ý</a></li>
	<li><a href="Dang_Nhap.php">Đăng nhập</a></li>
</ul>