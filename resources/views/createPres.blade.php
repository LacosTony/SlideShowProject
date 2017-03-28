@extends('layouts.navBar')

@section('title')
	<title>Création d'une présentation</title>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Création d'un présentation</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form id="form_pres" class="form-horizontal well" method="post" action="{{ url('addPres') }}" enctype="multipart/form-data">
				<!-- to protect your application from CSRF attacks-->
				{{ csrf_field() }}
				<div class="form-group">
					<label for="titre" class="col-lg-2 control-label">Titre</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="title_pres" name="title_pres" placeholder="Titre de la présentation">
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-lg-2 control-label">Description</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="4" id="description" name="description" placeholder="Description de la présentation" style="resize:none;"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="miniature" class="col-lg-2 control-label">Miniature</label>
					<div class="col-lg-10">
						<input type="file" name="miniature" accept="image/*">
					</div>
				</div>
				<div class="form-group" style="margin-bottom: 0;">
					<div id="image_preview" class="col-lg-10 col-lg-offset-2">
						<div class="thumbnail hidden">
							<img src="http://placehold.it/5" alt="" width=280 height=100>
							<div class="caption">
								<h4></h4>
								<p></p>
								<p><button type="button" class="btn btn-default btn-danger">Annuler</button></p>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary">Envoyer</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection

@section('script')
	<script src="{{ asset('js/lib/hammer.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery-fullscreen.js') }}"></script>
    <script src="{{ asset('js/createPres.js') }}"></script>
@endsection