<div id="khungtrang">
			
	<?php include "navbar.php"; ?>
	<div id="trai"></div>
	<div class="giua">
		<div class="thongtin">
			<tr>
				<h5 class="card-header">Thông tin sinh viên</h5>
			</tr>
			<tr>
				<table id="thongtin">
						<thead>								
						</thead>
						<tbody id="thongtin">
						</tbody>
				</table>
			</tr>
			<br/>
			<br/>
			<div>
				<tr>Nhập vào học kỳ  <input type="text" id="hocky" name="hocky"></tr>
			</div>
		</div>
		
		
	</div>
	<div id="phai"></div>
	<div id="duoi">				
		<br/>
		<br/>
		<h5 class="card-header">Danh sách điểm các môn sinh viên</h5>
		<div class="card-body">
			<!--<a href="giangvien_them.php" class="btn btn-success mb-2"><i class="fal fa-plus"></i> Thêm mới</a>
			<!--table table-bordered table-hover table-sm mb-0-->
			<table class="table table-bordered table-hover table-sm mb-0">
				<thead>
					<tr>
						<th width="40%">STT</th>
						<th width="40%">Tên môn</th>
						<th width="20%">Điểm số</th>

					</tr>
				</thead>
				<tbody id="HienThi">
					
				</tbody>
			</table>
		</div>
	</div>
</div>