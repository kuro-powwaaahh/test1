			<h1>Kontak</h1><br>
			<center>

<?php

include 'config.php';
$sql = "SELECT * FROM kontak WHERE id=". $_GET['id'];
$result = $conn->query($sql);
$row = $result->fetch_assoc();

 ?>

      <form method="POST" action="kontak_Proses_Edit.php?id=<?php echo $_GET['id']; ?>">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" value="<?php echo $row['Nama']; ?>" name="Nama" placeholder="Nama..." required="require"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" value="<?php echo $row['Email']; ?>" name="Email" placeholder="Email..." required="require"></td>
				</tr>
				<tr>
					<td>Pertanyaan</td>
					<td><textarea name="Pertanyaan" rows="3" cols="21" required="require"><?php echo $row['pertanyaan']; ?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="Kirim" value="Kirim"></td>
				</tr>
			</table>
		</form>
		</center>
