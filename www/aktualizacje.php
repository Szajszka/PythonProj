<div class="front-module" style="float:left;width:50%">
	<table width="100%" cellpadding="1" class="listtable">
		<tr height="40">
			<td class="listtable_top" align="left" colspan="3"><strong>Ostatnie aktualizacje NVIDIA</strong></td>
		</tr>
		<tr height="30">
			<td class="listtable_2" align='left'><strong>Data</strong></td>
			<td class="listtable_2" align='left'><strong>Model</strong></td>
			<td class="listtable_2" align='left'><strong>Cena</strong></td>
		</tr>
			<?php 
				$zapytanie = "SELECT `date`,`id_karty`,`cena`,`modele`.`nazwa_modelu`,`producenci`.`nazwa_prod` FROM `kartygraf` INNER JOIN modele ON kartygraf.id_karty = modele.id INNER JOIN producenci ON kartygraf.id_producenta = producenci.id WHERE producenci.id = 0 ORDER BY `kartygraf`.`id` DESC LIMIT 16";
				$wynik = mysqli_query($connect, $zapytanie);
				if($wynik){
					while($row = mysqli_fetch_array($wynik)){
						$data = $row["date"]; 
						$karta = $row["nazwa_modelu"];
						$cena = $row["cena"];
						
						echo "<tr height='30'>";
						echo "<td class='listtable_1' align='left'>".$data."</td>";
						echo "<td class='listtable_1' align='left'>".$karta."</td>";
						echo "<td class='listtable_1' align='left'>".$cena." zł</td>";
						echo "</tr>";
					}
				}	
			?>
		</table>
</div>
<div class="front-module" style="float:right;width:50%">
	<table width="100%" cellpadding="1" class="listtable">
		<tr height="40">
			<td class="listtable_top" align="left" colspan="3"><strong>ostatnie aktualizacje AMD</strong></td>
		</tr>
		<tr height="30">
			<td class="listtable_2" align='left'><strong>Data</strong></td>
			<td class="listtable_2" align='left'><strong>Model</strong></td>
			<td class="listtable_2" align='left'><strong>Cena</strong></td>
		</tr>
			<?php 
				$zapytanie = "SELECT `date`,`id_karty`,`cena`,`modele`.`nazwa_modelu`,`producenci`.`nazwa_prod` FROM `kartygraf` INNER JOIN modele ON kartygraf.id_karty = modele.id INNER JOIN producenci ON kartygraf.id_producenta = producenci.id WHERE producenci.id = 1 ORDER BY `kartygraf`.`id` DESC LIMIT 16";
				$wynik = mysqli_query($connect, $zapytanie);
				if($wynik){
					while($row = mysqli_fetch_array($wynik)){
						$data = $row["date"]; 
						$karta = $row["nazwa_modelu"];
						$cena = $row["cena"];
						
						echo "<tr height='30'>";
						echo "<td class='listtable_1' align='left'>".$data."</td>";
						echo "<td class='listtable_1' align='left'>".$karta."</td>";
						echo "<td class='listtable_1' align='left'>".$cena." zł</td>";
						echo "</tr>";
					}
				}	
			?>
		</table>
</div>