@extends('layouts.navBar')

@section('title')
	<title>Nouvelle slide</title>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Projet : {{$title_pres}}</h1>
				<h2>Nouvelle slide - slide {{$num_slide}}</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<form id="form_slide" class="form-horizontal well" method="post" action="" enctype="multipart/form-data">
					<!-- Information pour la table Slide -->
					<fieldset>
					<div>
						<div class="form-group">
							<label for="title_slide" class="col-lg-2 control-label">titre</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="title_slide" name="title_slide" placeholder="Titre de la slide">
							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-lg-2 control-label">description</label>
							<div class="col-lg-10">
								<textarea class="form-control" rows="4" id="description" name="description" placeholder="Description de la slide" style="resize:none;"></textarea>
							</div>
						</div>
					</div>
					</fieldset>
					<!-- La récupération de l'id de la présentation se fera déjà lors de la sélection de la présentation à modifier-->
					
					<!-- Information pour la table Slide_element OneToOne -->
					<fieldset>
					<div>
						<div class="form-group">
							<label for="element_title" class="col-lg-2 control-label">titre (élément)</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="element_title" name="element_title" placeholder="Titre (élément)">
							</div>
						</div>
						<div class="form-group">
							<label for="element_subtitle" class="col-lg-2 control-label">sous-titre (élément)</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="element_subtitle" name="element_subtitle" placeholder="Sous-titre (élément)">
							</div>
						</div>
						<div class="form-group">
							<label for="element_text" class="col-lg-2 control-label">texte</label>
							<div class="col-lg-10">
								<textarea class="form-control" rows="4" id="element_text" name="element_text" placeholder="Texte (élément)" style="resize:none;"></textarea>
							</div>
						</div>
					</div>
					</fieldset>
					<!-- La récupération de l'id de la slide se fera du fait qu'on rajoute une nouvelle slide (autre idée par exemple en cas de mauvais emplacement possibilité de drag and drop l'image afin de la placer à une autre position mais il faut rajouter un champ à la table slide)-->
					
					<!-- Information pour la table File -->
					<!-- ATTENTION : il y aura un script qui permettra de déposer plusieurs pictures (5 max) 
									 mais si il s'agit d'une vidéo il n'y en aura qu'une seule
						
						Une boucle for sera certainement nécessaire --> 
					<fieldset>
					<div>
						<div class="form-group input_fields_wrap">
<!-- A TESTER -->			<!-- TODO -->
							<label for="file_slide_1" class="col-lg-2 control-label">Image 1 :</label>
							<div class="col-lg-10">
								<input type="file" name="file_slide_1" accept="image/*">
							</div>
						</div>
						<div class="form-group">
							<button class="add_field">Add More Files</button>
						</div>
					</div>
					
					<!-- Bouton submit -->
					<div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="submit" class="btn btn-primary">Envoyer</button>
							</div>
						</div>
					</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script src="{{ asset('js/lib/hammer.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery-fullscreen.js') }}"></script>
    <script src="{{ asset('js/createSlide.js') }}"></script>
	<script>
		$(document).ready(function() {
			var max_fields = 5; //maximum input boxes allowed
			var wrapper = $(".input_fields_wrap"); //Fields wrapper
			var button = $(".add_field")
				
			var x = 1; //initlal text box count
			
			$(button).click(function(e){
				e.preventDefault();
//A TESTER				
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(wrapper).append(
							'<label for="file_slide_'+ x +'" class="col-lg-2 control-label">Image '+ x +' :</label>'+
							'<div class="col-lg-10">'+
								'<input type="file" name="file_slide_'+ x +'" accept="image/*">'+
							'</div>'
					);
				}
				//TODO
			});
		});
	</script>
@endsection