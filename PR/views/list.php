<html>
<head>
<meta charset="utf-8">
<title>รายชื่อพนักงาน</title>
<style type="text/css">
	<!--
	#test {
	width: 100%;
	background-color: #8B6914;
	height: 130px;
	vertical-align:middle;
	}
	-->
</style>
</head>
<body>
<br>
<div id="test">
<br>
<font size="60" color="#FFFFFF">&nbsp;&nbsp;<u>ระบบเงินเดือน</u></font><br>
</div><br>
<!--
<form  action="/index.php/main/doSearchKeyword" method="post">
ค้นหาพนักงาน :	<input type="text" name="srcEmp"><input type="submit" value="ค้นหา">
</form>
-->
<hr>
<center>
	<table width="60%" > 
		<tr>
			<th scope="col">รหัส</th>
			<th scope="col">ชื่อ</th>
			<th scope="col">นามสกุล</th>
			<th scope="col">ตำแหน่ง</th>
			<th scope="col">เงินเดือน</th>
			<th scope="col">รูปแบบการจ่ายเงิน</th>
			<th scope="col">จ่าย</th>
		</tr>
		<tr>
			<?php 
				  foreach($employees -> result() as $row): 
			?>
					<td><center><?php echo $row->empId ?></center></td>
					<td><center><?php echo $row->name ?></center></td>
					<td><center><?php echo $row->lastName ?></center></td>
					<td><center><?php echo $row->salary ?></center></td>
					<td><center><?php echo $row->position ?></center></td>
					<?php
						 foreach ($salaryTypes -> result() as $row1)
							{
								 if($row->salaryType == $row1->salaryType)
									 {
										echo '<td>'.'<center>'.$row1->typeName.' </center>'.'</td>';
									  }
							  }
					?>
					<td>
						<center>
							<a name="pay" href="/index.php/main/paySalary/<?php echo $row->empId;?>">จ่าย</a>
							</center>
					</td>
				<?php	  
						echo '</tr>';
						endforeach
				 ?>	
		</tr>
	</table>
</center>
<hr>
<center><input type="button" onClick="window.history.back()" value="กลับ"/></center>

</body>
</html>