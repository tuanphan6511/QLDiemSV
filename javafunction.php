<!--xemdiem.php -->

<!--trangchu.php -->

<!--xemdiem_gv.php-->

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
</script>
<script>
			tb=0;
			function xd()
			{
				db.collection("taikhoan").get().then((querySnapshot) => {
					querySnapshot.forEach((doc) => {
						if(doc.data().tk==c &&tb==0)
						{		
							if(doc.data().quyen=="hs")
							{
								location.href="xemdiem.php?tk="+c;
									tb++;
							}
							if(doc.data().quyen=="gv")
							{
								location.href="xemdiem_gv.php?tk="+c;
									tb++;
							}
														
						}	
					});
				});	
			}
			
		</script>
		<script>
					var c= "<?php echo $_GET['tk']; ?>";
					$('#tentk').html(c);
					//href cua trangchu
					function tc()
					{
						location.href="trangchu.php?tk="+c;
					}
		</script>