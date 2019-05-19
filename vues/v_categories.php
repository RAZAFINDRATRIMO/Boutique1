<div class="container">
	<div class="row">
		<div class="col" style="padding-top:75px;">
			<div id="categories" >
				<?php
				foreach( $lesCategories as $uneCategorie) 
				{
					$idCategorie = $uneCategorie->getId();
					$libCategorie = $uneCategorie->getLibelle();
					$url ="<a href=index.php?uc=voirMedicaments&idCategorie=$idCategorie&action=voirMedicaments> $libCategorie </a>";
					echo "<a>".$url."</a>\n";
				}
				?>
			</div>
		</div>
	</div>
</div>
