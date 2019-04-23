
	<h1>Daftar Kontak</h1><br>
	<p>
  <center>
<form>
  <table border="1">
    <thead>
		<tr>
			<td>No</td>
			<td>Nama</td>
      <td>Email</td>
      <td>Pertanyaan</td>
      <td>Aksi</td>
		</tr>
  </thead>
  <tbody>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM kontak";
    $result = $conn->query($sql);

    if ($result->num_rows>0)
    {
			$i = 0;
      while ($row = $result->fetch_array())
      {
        echo '<tr>';
        echo '<td>' .($i+1). '</td>';
        echo '<td>' .$row[1]. '</td>';
        echo '<td>' .$row['Email']. '</td>';
        echo '<td>' .$row[3]. '</td>';
        echo '<td> <a href="Kontak_Edit.php?id='.$row['id'].'"> Edit </a>
							<a href="Kontak_Delete.php?id='.$row['id'].'"> Delete </a> </td>';
        echo '</tr>';

        $i++;
      }

			$result = $conn->query($sql);
    }
    ?>
  </tbody>
	</table>
</form>
</center>
