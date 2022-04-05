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
						<tr>Nhập vào học kỳ  <input type="text" id="hocky"/> <input type="button" name="btnXacNhan" value="Tìm kiếm" onclick="xulydiem();"/></tr>
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
								<th width="10%">STT</th>
								<th width="30%">Tên môn</th>
								<th width="10%">TX</th>
								<th width="10%">KT1</th>
								<th width="10%">KT2</th>
								<th width="10%">Thi</th>
								<th width="10%">TB</th>
								<th width="10%">XL</th>
							</tr>
						</thead>
						<tbody id="HienThi">
							
						</tbody>
						
					</table>
					<a id="ketquaTB" color="red" ></a>
				</div>
			</div>
		</div>
		<?php include "javascript.php"; ?>
		<?php include "javafunction.php"?>
		<script>
		function xulydiem()
				{
					var c= document.getElementById("hocky").value;
					//alert(c);
					var t= "<?php echo $_GET['tk']; ?>";
					
					db.collection("qldiem").get().then((querySnapshot) => {
						var stt=1;
						var output="";
						var output2="";
						var tb=0;
						var tx="";
						var kt1="";
						var kt2="";
						var thi="";
						var tbm=0;
						var xh="";
					querySnapshot.forEach((doc) => {
								if(doc.data().mssv==t && doc.data().hocky==c)
								{
									tx=doc.data().diem_TX;
									kt1=doc.data().diem_KT1;
									kt2=doc.data().diem_KT2;
									thi=doc.data().diem_Thi;
									xh="";
									tbm=(tx*10/100)+(kt1*20/100)+(kt2*20/100)+thi*50/100;
									 if(tbm>=8.5)
									{
										xh="A";
									}else
									if(tbm>=7.0)
									{
										xh="B";
									}else 
									if(tbm>=5.5)
									{
										xh="C";
									}
									else
									if(tbm>=4.0)
									{
										xh="D";
									}else
										xh="F";
									output+='<tr>';
									output+='<td>'+stt+'</td>';
									output+='<td>'+doc.data().tenmon+'</td>';
									output+='<td>'+tx+'</td>';
									output+='<td>'+kt1+'</td>';
									output+='<td>'+kt2+'</td>';
									output+='<td>'+thi+'</td>';
									output+='<td>'+tbm+'</td>';
									output+='<td>'+xh+'</td>';
									output+='</tr>';
									tb+=tbm;
									stt++;
								}		
						});
						output2='<td>Kết quả trung bình:'+tb/(stt-1)+'</td>';
						
						$('#HienThi').html(output);
						$('#ketquaTB').html(output2);
					});
				}
		</script>
		<script>
					db.collection("qldiem").get().then((querySnapshot) => {
						var t= "<?php echo $_GET['tk']; ?>";
						var output="";
						var out=0;
					querySnapshot.forEach((doc) => {
							if(doc.data().mssv==t &&out==0)
							{
								output+='<tr>';
									output+='<th width="25%">Mã sinh viên: <hr/>'+doc.data().mssv+'</th>';
									output+='<th width="25%">Họ tên: <hr/>'+doc.data().tensv+'</th>';
									output+='<th width="25%">Tên lớp: <hr/>'+doc.data().lop+'</th>';
									
									out++;
								output+='</tr>';
							}	
						});
						$('#thongtin').html(output);
					});
		</script>
		
		<?php include "footer.php"; ?>
	</body>
</html>