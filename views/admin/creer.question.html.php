<?php
if (isset($_SESSION['arrayError'])) {
$arrayError=$_SESSION['arrayError'];
unset($_SESSION['arrayError']);
 }
 require_once(ROUTE_DIR.'views/inc/header.html.php');
 ?>

<?php
 require_once(ROUTE_DIR.'views/inc/deconect.html.php');
?>
<div class="container">
	<div class="row bg-white">
		<div class="col-md-4">
		<?php require_once(ROUTE_DIR.'views/inc/menu.html.php');?>
</div>	
   		 <div class="  col-md-8 ">
			<div class="card conteneur-liste ">
				<div class="text-center ">paramatrer votre question </div> 
				<form method="POST" action="<?=WEB_ROUTE?>">
				<input type="hidden" name="controlleurs" value="admin">
				<input type="hidden" name="action" value="<?= isset($question['id']) ? 'edit': 'creer.question' ?>">
				<input type="hidden" name="id" value="<?=isset($question['id']) ? $question['id'] : "" ?>">
				<input type="hidden" name="id" value="<?=isset($point['id']) ? $point['id'] : "" ?>">
				<div class="card  align-self-center border border-danger ">
	
					<div class="p-4">
						<label  for="question"  class=" question text-Avertissement">Question</label>
						<input  name="question" class="question" value="<?= isset($_SESSION['question']) ? $_SESSION['question']:""?>" type="text" style="width:300px ;height:100px"> <br>
						<small class="form-text text-danger">
							 <?php echo isset($arrayError['question']) ? $arrayError['question'] : ''; ?>   
						</small>
		</div>
		

					<div class="p-4">
						<label  for="point"  class=" point text-Avertissement">nbre de points</label>
						<input name="point" class="point" type="number" value="<?= isset($_SESSION['point']) ? $_SESSION['point']:""?>"> <br><br>

					</div>

					<div class="p-4">
						<label class="ml-4" for="select"> type de reponse</label>
						<select class="form-select" name="type_de_reponse" class="type_de_reponse" aria-label="Default select example">
							<option value="simple">choix simple</option>
							<option value="choix_multiple">choix multiple</option>
							<option value="text">texte</option>
						</select><br>
					</div>

					<div class="p-4 ml-1">
						<label  for="nbrreponse"  class="text-Avertissement ml-4">nombre de reponse</label>
						<input name="nbrreponse" value="<?= isset($_SESSION['nbrreponse']) ? $_SESSION['nbrreponse']:""?>" class="nbrreponse" type="number"  > 
						<button type="submit" name="boutton_plus" class="btn btn-primary"> <i name="plus" class="fa fa-2x  fa-plus"></i></button>
					</div>

					<div class=" p-4">	
						<?php $input=$_SESSION['nbrreponse']?>
						<?php $recuper_input=$_SESSION['type_de_reponse']?>
						<?php for ($i=1; $i <= $_SESSION['nbrreponse']; $i++):?>
							<label for="">reponse <?= $i ?></label>
							<input type="text" class="form-control" name="reponse[]" id="" aria-describedby="helpId" placeholder="">
							<?php if($recuper_input=="choix_multiple") :?>
								<input type="checkbox" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
								<?php  elseif($recuper_input=="choix_unique") : ?>
									<input type="radio" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
							<?php endif ?>
							 
						<?php endfor ?> 
					</div>
					
					
	
				</div>
			</div>		
						<button type="submit" name="enregistrer" class="btn  btn-enregistr btn-primary mb-3 float-right">Enregistre</button>			
	
		</div>

	</div>
</div>
	
	<?php require_once(ROUTE_DIR.'views/inc/footer.html.php');
	if (isset($_SESSION['nbrreponse'])) {
		unset($_SESSION['nbrreponse']);
	}
	if (isset($_SESSION['type_de_reponse'])) {
		unset($_SESSION['type_de_reponse']);

	}
	if (isset($_SESSION['question'])) {
		unset($_SESSION['question']);
	}
	if (isset($_SESSION['point'])) {
		unset($_SESSION['point']);
	}
	?>
	<style>
	.btn-enregistr{
		width: 100px;
		background-color: #C90017;
		margin-top: 20px;
		float: right;
	}
	</style>