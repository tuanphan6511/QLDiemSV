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
			<table> 
				<tbody id="tintuc">
				</tbody>
			</table>
			<!--code vao day ve viet phan than-->
		</div>
		<?php include "javascript.php"; ?>
		
		<?php include "javafunction.php"; ?>
		<script>
		//do du lieu len
				var output="";
			db.collection("tintuc").get().then((querySnapshot) => {
			querySnapshot.forEach((doc) => {
						output+='<tr>';
							output+='<th>'+doc.data().noidung+'</th><hr/><hr/>';
						output+='</tr>';
				});
				$('#tintuc').html(output);
			});
			var c= "<?php echo $_GET['tk']; ?>";
			//alert(t);
			$('#tentk').html(c);
			
			
		</script>
		<?php include "footer.php"; ?>
	</body>
</html>