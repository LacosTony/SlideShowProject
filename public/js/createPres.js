$(document).ready(function(){
	
	//Envoi du formulaire
/*
	$('#form_pres').on('submit',function(e){
		e.preventDefault();

		var $form = $(this);
		var formadata = (window.FormData) ? new FormData($form[0]) : null;
		var data = (formdata !== null) ? formdata : $form.serialize();

		$.ajax({
			url : $form.attr('action'),
			type : $form.attr('method'),
			contentType : false,
			processData : false,
			dataType : 'json',
			data : data,
			success : function(response){
				$('#result > pre').html(JSON.stringify(response, undefined, 4));
			}
		});
	});

*/	
	//Prévisualisation de la miniature

	$('#form_pres').find("input[name='miniature']").on('change', function(e){
		e.preventDefault();

		var files = $(this)[0].files;

		if(files.length > 0){
			//Il n'y aura qu'une seule miniature
			var file = files[0];
			var $image_preview = $('#image_preview');

			$image_preview.find('.thumbnail').removeClass('hidden');
			$image_preview.find('img').attr('src',window.URL.createObjectURL(file));
			$image_preview.find('h4').html(file.name);
			$image_preview.find('.caption p:first').html(file.size +' bytes');
			//$image_preview.find('.caption p:first').html(file.type);
		}
	});

	//Bouton 'Annuler' - va recacher le thumbnail et enlever l'image de la selection

	$('#image_preview').find('button[type="button"]').on('click',function(e){
		e.preventDefault();

		$('#form_pres').find('input[name="miniature"]').val('');
		$('#image_preview').find('.thumbnail').addClass('hidden');
	});
});