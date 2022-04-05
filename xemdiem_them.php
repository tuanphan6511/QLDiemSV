<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<link rel="stylesheet" type="text/css" href="cauhinh.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Thêm Điểm sinh viên</title>
	</head>
	<body>
		<div id="khungtrang">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm sinh viên</h5>
				<div class="card-body">
					<form action="xemdiem_them_xuly.php" method="post">
					  <div class="form-group">
						<label for="mssv">MSSV</label>
						<input type="text" class="form-control" id="mssv" name="mssv" ></input>
						
					  </div>
					  <div class="form-group">
						<label for="tenmon">Tên môn</label>
						<input type="text" class="form-control" id="tenmon" name="tenmon"></input>
					  </div>
					  <div class="form-group">
						<label for="hocky">Học kỳ</label>
						<input type="text" class="form-control" id="hocky" name="hocky"></input>
					  </div>
					  <div class="form-group">
						<label for="tx">Điểm thường xuyên</label>
						<input type="text" class="form-control" id="tx" name="tx"></input>
					  </div>
					  <div class="form-group">
						<label for="kt1">Điểm kiểm tra lần 1</label>
						<input type="text" class="form-control" id="kt1" name="kt1"></input>
					  </div>
					  <div class="form-group">
						<label for="kt2">Điểm kiểm tra lần 2</label>
						<input type="text" class="form-control" id="kt2" name="kt2"></input>
					  </div>
					  <div class="form-group">
						<label for="thi">Điểm Thi</label>
						<input type="text" class="form-control" id="thi" name="thi">
					  </div>
					  <button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm mới</button>
				</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		<?php include "javascript.php"; ?>
		<?php include "javafunction.php"; ?>
		
	</body>
</html>