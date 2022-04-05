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
				<h5 class="card-header">Sửa sinh viên</h5>
				<div class="card-body">
					<form action="xemdiem_sua_xuly.php" method="post">
					<input type="text" id="id" name="id" hidden />
					<input type="text" id="tk" name="tk" hidden />
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
					  <button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Sửa đổi</button>
				</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		<?php include "javascript.php"; ?>
		<script>
		function xd_them()
		{
			var c= "<?php echo $_GET['tk']; ?>";
			location.href="xemdiem_them_xuly.php?tk="+c;
		}
		function xd_gv(){
			var c= "<?php echo $_GET['tk']; ?>";
			location.href="xemdiem_them.php?tk="+c;
		}
		var docRef = db.collection("qldiem").doc("<?php echo $_GET['id']; ?>");
		docRef.get().then((doc) => {
			if (doc.exists) {
				//console.log("Document data:", doc.data());
				$('#id').val(doc.id);
				$('#mssv').val(doc.data().mssv);
				$('#tenmon').val(doc.data().tenmon);
				$('#hocky').val(doc.data().hocky);
				$('#tx').val(doc.data().diem_TX);
				$('#kt1').val(doc.data().diem_KT1);
				$('#kt2').val(doc.data().diem_KT2);
				$('#thi').val(doc.data().diem_Thi);
				$('#tk').val("<?php echo $_GET['tk']; ?>");
			} else {
				// doc.data() will be undefined in this case
				console.log("No such document!");
			}
		}).catch((error) => {
			console.log("Error getting document:", error);
		});
		</script>
	
		
	</body>
</html>