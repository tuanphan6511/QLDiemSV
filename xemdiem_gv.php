<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="cauhinh.css">
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.min.css" />
		
		<title>Quản lý điểm sinh viên</title>
	</head>
	<body>	
		<div id="khungtrang">			
			<?php include "navbar.php"; ?>
			<div id="trai"></div>
			<div class="giua">
				<div class="thongtin">
					<tr>
						<h5 class="card-header">Quản lý điểm sinh viên dành cho giáo viên</h5>
					</tr>
					<br/>
					<div>
						<tr>Nhập vào học kỳ  <input type="text" id="hocky"/> <input type="button" name="btnXacNhan" value="Tìm kiếm" onclick="timtheohocky();"/></tr>
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
					<button type="submit" class="btn btn-primary" onclick="xd_gv();"><i class="fal fa-save"></i> Thêm mới</button>
					<table class="table table-bordered table-hover table-sm mb-0">
						<thead>
							<tr>
								<th width="5%%">STT</th>
								<th width="15%">MSSV</th>
								<th width="20%">Tên môn</th>
								<th width="10%">Học kỳ</th>
								<th width="10%">TX</th>
								<th width="10%">KT1</th>
								<th width="10%">KT2</th>
								<th width="10%">Thi</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody id="HienThiGV">
							
						</tbody>
						
					</table>
					<a id="ketquaTB" color="red" ></a>
				</div>
			</div>
		</div>
		<?php include "javascript.php"; ?>
		<?php include "javafunction.php";?>
		
		<script>
			db.collection("qldiem").get().then((querySnapshot) => {
							var stt=1;
							var output="";
							var c= "<?php echo $_GET['tk']; ?>";
						querySnapshot.forEach((doc) => {
									output+='<tr>';
										output+='<th width="5%">'+stt+'</th>';
										output+='<th width="15%">'+doc.data().mssv+'</th>';
										output+='<th width="20%">'+doc.data().tenmon+'</th>';
										output+='<th width="10%">'+doc.data().hocky+'</th>';
										output+='<th width="10%">'+doc.data().diem_TX+'</th>';
										output+='<th width="10%">'+doc.data().diem_KT1+'</th>';
										output+='<th width="10%">'+doc.data().diem_KT2+'</th>';
										output+='<th width="10%">'+doc.data().diem_Thi+'</th>';
										output+='<th width="5%" class="text-center"><a href="xemdiem_sua.php?id='+doc.id+'&tk='+c+'"><i class="fal fa-edit"></i></a></th>';
										output+='<th width="5%" class="text-center"><a onclick="return confirm(\'Bạn có muốn xóa sinh vien '+doc.data().mssv +" và tên môn "+doc.data().tenmon+' không?\')" href="xemdiem_xoa_xuly.php?id='+doc.id+'&tk='+c+'"><i class="fal fa-trash-alt"></i></a></th>';
									output+='</tr>';
										stt++;	
							
							});
							$('#HienThiGV').html(output);
						});
		</script>
		<script>
			function timtheohocky()
			{
				var c= document.getElementById("hocky").value;
				db.collection("qldiem").get().then((querySnapshot) => {
						var stt=1;
						var output="";
					querySnapshot.forEach((doc) => {
								if(doc.data().hocky==c)
								{
									output+='<tr>';
										output+='<th width="5%">'+stt+'</th>';
										output+='<th width="15%">'+doc.data().mssv+'</th>';
										output+='<th width="20%">'+doc.data().tenmon+'</th>';
										output+='<th width="10%">'+doc.data().hocky+'</th>';
										output+='<th width="10%">'+doc.data().diem_TX+'</th>';
										output+='<th width="10%">'+doc.data().diem_KT1+'</th>';
										output+='<th width="10%">'+doc.data().diem_KT2+'</th>';
										output+='<th width="10%">'+doc.data().diem_Thi+'</th>';
										output+='<th width="5%" class="text-center"><a href="xemdiem_sua.php?id='+doc.id+'&tk='+c+'"><i class="fal fa-edit"></i></a></th>';
										output+='<th width="5%" class="text-center"><a onclick="return confirm(\'Bạn có muốn xóa sinh vien '+doc.data().mssv +" và tên môn "+doc.data().tenmon+' không?\')" href="xemdiem_xoa_xuly.php?id='+doc.id+'&tk='+c+'"><i class="fal fa-trash-alt"></i></a></th>';
									output+='</tr>';
									stt++;
								}		
						});
						
						
						$('#HienThiGV').html(output);
						
					});
			}
		</script>
		<?php include "footer.php"; ?>
	</body>
</html>