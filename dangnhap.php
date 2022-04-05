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
			<p class="tua">Quản lý điểm sinh viên</p>
			<nav class="navbar navbar-expand-lg navbar-light bg-info">
				</hr>
				<a class="navbar-brand" href="/">
					<i class="fal fa-check-circle"></i>
					AGU-Quản lý điểm sinh viên

				</a>
			</nav>
			<h5 class="card-header">Đăng nhập</h5>
			<form name="f" method="POST" action="xylydangnhap.php">
				<table align="center">
					<tr>
						<td colspan="2" align="center">THÔNG TIN ĐĂNG NHẬP</td>
					</tr>
					<tr>
						<td>Tài khoản</td><td><input type="text" id ="tk" name="tk"/></td>
					</tr>
					<tr>
						<td>Mật khẩu</td><td><input type="password" id="mk" name="mk"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="btnGui" value="Gửi"/>
							<input type="reset" name="btnXoa" value="Xóa"/>
						</td>
					</tr>
				</table>	
			</form>
		</div>
		
		<?php include "footer.php"; ?><?php include "javascript.php"; ?>
	</body>
</html>