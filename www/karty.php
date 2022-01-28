<div class="front-module" style="float:left;width:50%">
	<table width="100%" cellpadding="1" class="listtable">
		<tr height="40">
			<td class="listtable_top" align="left" colspan="2"><strong>Aktualne ceny NVIDIA</strong></td>
		</tr>
		<tr height="30">
			<td class="listtable_2" align='left'><strong>Model</strong></td>
			<td class="listtable_2" align='right'><strong>Cena</strong></td>
		</tr>
			<?php 
				$zapytanie = "SELECT `id_karty`,`cena`,`modele`.`nazwa_modelu`,`modele`.`link_modelu` FROM `kartygraf` INNER JOIN modele ON kartygraf.id_karty = modele.id WHERE `id_karty` < 4 ORDER BY `kartygraf`.`id` DESC LIMIT 4";
				$wynik = mysqli_query($connect, $zapytanie);
				if($wynik){
					while($row = mysqli_fetch_array($wynik)){
						$karta = $row["nazwa_modelu"];
						$cena = $row["cena"];
						$model = $row["link_modelu"];
						
						echo "<tr height='30'>";
						echo "<td class='listtable_1' align='left'><strong><a href='".$model."' target='_blank'>".$karta."</a></strong></td>";
						echo "<td class='listtable_1' align='right'>".$cena." zł</td>";
						echo "</tr>";
					}
				}	
			?>
		</table>
</div>
<div class="front-module" style="float:right;width:50%">
	<table width="100%" cellpadding="1" class="listtable">
		<tr height="40">
			<td class="listtable_top" align="left" colspan="2"><strong>Aktualne ceny AMD</strong></td>
		</tr>
		<tr height="30">
			<td class="listtable_2" align='left'><strong>Model</strong></td>
			<td class="listtable_2" align='right'><strong>Cena</strong></td>
		</tr>
			<?php 
				$zapytanie = "SELECT `id_karty`,`cena`,`modele`.`nazwa_modelu`,`modele`.`link_modelu` FROM `kartygraf` INNER JOIN modele ON kartygraf.id_karty = modele.id WHERE `id_karty` > 3 ORDER BY `kartygraf`.`id` DESC LIMIT 4";
				$wynik = mysqli_query($connect, $zapytanie);
				if($wynik){
					while($row = mysqli_fetch_array($wynik)){
						$karta = $row["nazwa_modelu"];
						$cena = $row["cena"];
						$model = $row["link_modelu"];
						
						echo "<tr height='30'>";
						echo "<td class='listtable_1' align='left'><strong><a href='".$model."' target='_blank'>".$karta."</a></strong></td>";
						echo "<td class='listtable_1' align='right'>".$cena." zł</td>";
						echo "</tr>";
					}
				}	
			?>
		</table>
</div>