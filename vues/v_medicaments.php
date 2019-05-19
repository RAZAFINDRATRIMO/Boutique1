<div class="container">
	<div class="row">
		<div class="col" style="margin-left:150px;margin-top:50px">
			<div id="medicaments">
			<?php
			echo "<table>";
			foreach( $lesMedicaments as $unMedicament) 
			{
				$id = $unMedicament->getId();
				$description = $unMedicament->getDescription();
				$image = $unMedicament->getImage();
				$prix = $unMedicament->getPrix();
				echo "<form method='POST' action='index.php?uc=voirMedicaments&idCategorie=$idCategorie&idMedicament=$id&action=voirMedicamentsEtAjouterAuPanier'>";
				echo "<tr>
						<td width=150><img src='$image' alt='image' width='100'	height='100' /></td>
						<td width=100>$description</td>
						<td width=100>$prix</td>
						<td width=400> Quantite :<input type='text' name='quantite' value ='1' size='2' />
						<input type='submit' value='Commander'  /></td>";
				echo '</tr>';
				echo "</form>";
			}
			?>
			</table>
			</div>
		</div>
	</div>
</div>