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
			<h5 class="card-header">Đăng nhập</h5>
			<?php include "footer.php";?>
		</div>
		<?php include "javascript.php"; ?>
		<script>
			var tk= "<?php echo $_POST['tk']; ?>";
			var mk= "<?php echo $_POST['mk']; ?>";
			<?php
				$user= $_POST['tk']; ?>
				alert("<?php echo $user; ?>");
			var tb=0;
			db.collection("taikhoan").get().then((querySnapshot) => {
			querySnapshot.forEach((doc) => {
					if(doc.data().tk==tk && doc.data().mk==mk &&tb==0)
					{		
								location.href="trangchu.php?tk="+doc.data().tk;
								tb++;					
					}	
				});
				if(tb==0)
				{
					alert("Sai thông tin đăng nhập");
				}
			});
		</script>
		
		<?php include "footer.php"; ?>
	</body>
</html>