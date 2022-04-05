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
			
			<h5 class="card-header">Xử lý sửa</h5><!--action="trangchu.php"-->
			<?php include "footer.php";?>
		</div>
		<?php include "javascript.php"; ?>
		<script>
			var mssv="<?php echo $_POST['mssv']; ?>";
			var ms ="<?php echo $_POST['id']; ?>";
			var tk= "<?php echo $_POST['tk']; ?>";
			var tb=0;var docRef = db.collection("qldiem").doc(ms);
			db.collection("qldiem").get().then((querySnapshot) => {
			querySnapshot.forEach((doc) => {
					if(doc.data().mssv==mssv &&tb==0)
					{			var ten=doc.data().tensv;
								var l=doc.data().lop;
								
		
								docRef.update({
									mssv: "<?php echo $_POST['mssv']; ?>",
									tensv: ""+ten+"",
									tenmon: "<?php echo $_POST['tenmon']; ?>",
									diem_TX:"<?php echo $_POST['tx']; ?>",
									diem_KT1:"<?php echo $_POST['kt1']; ?>",
									diem_KT2:"<?php echo $_POST['kt2']; ?>",
									diem_Thi:"<?php echo $_POST['thi']; ?>",
									hocky:"<?php echo $_POST['hocky']; ?>",
									lop:l
								})
								.then(() => {
									//console.log("Document successfully updated!");
									location.href="xemdiem_gv.php?tk="+tk;
								})
								.catch((error) => {
									// The document probably doesn't exist.
									console.error("Error updating document: ", error);
								});
								tb++;					
					}	
				});
			});
		</script>
		<?php include "footer.php"; ?>
	</body>
</html>