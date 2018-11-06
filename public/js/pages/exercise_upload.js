'use strict';

(() => {
	/* Screw Internet Explorer */
	document.addEventListener('DOMContentLoaded', event => {
		//TODO: Support for multiple languages?
		const ID_BTN_FINISH = 'finish';

		$('#smartwizard').smartWizard({
			transitionEffect: 'fade', // Effect on navigation, none/slide/fade
			transitionSpeed: '400',
			toolbarSettings: {
				toolbarExtraButtons: [
					$('<button></button>')
						.text(/*Wala na*/'Finish'/* na, kapag president na si Duterte*/)
						//Set the ID of the button to 'finish'
						.attr('id', ID_BTN_FINISH)
						.addClass('btn btn-info disabled')
				]
			}
		});

		const BUTTON_FINISH = document.getElementById(ID_BTN_FINISH);
		BUTTON_FINISH.addEventListener('click', event => {
			console.log('Clicked the finish button');

			let exerciseDetails = {
				exerciseTitle: document.getElementById('exercise-title').value,
				subjectArea: document.getElementById('subject-select').value,
				tags: document.querySelector('input[name="tags"]').value,
				instructions: tinyMCE.get('instructions').getContent(),
				content: tinyMCE.get('content').getContent(),
				answerKey:tinyMCE.get('answerkey').getContent()
			};

			console.log('Parsed values');
			console.log(exerciseDetails);

			$.ajax({
				url:'/exercise/upload',
				method: 'POST',
				data: exerciseDetails,
				success: (data, textStatus, jqXHR) => {
					console.log(`Success! Data: ${data}`);
				},

				error: (jqXHR, textStatus, errorThrown) => {
					console.log(`Error!: ${textStatus}`);
				},

				complete: (jqXHR, textStatus) => {
					console.log(textStatus);
				}
			});//$.ajax()
		});//BUTTON_FINISH.addEventListener('click')

		$('#smartwizard').on('showStep', (e, anchorObject, stepNumber, stepDirection) => {
			if (stepNumber === 1) {
				tinymce.init({
					selector: 'textarea#instructions',
					height: 30,
					menubar: false,
					plugins: [],
					style_formats: [{
						title: 'Content',
						format: 'p',
						classes: 'elixir-content'
					}],
					toolbar: 'undo redo | styleselect | bold italic underline',
					content_css: '/styles/tinymce.css'
				});

				tinymce.init({
					selector: 'textarea#content',
					height: 450,
					menubar: false,
					plugins: [],
					style_formats: [{
							title: 'Heading',
							format: 'h3',
							classes: 'elixir-heading'
						},
						{
							title: 'Content',
							format: 'p',
							classes: 'elixir-content'
						}
					],
					toolbar: 'undo redo | styleselect | bold italic underline',
					content_css: '/styles/tinymce.css'
				});
			} else if (stepNumber === 2) {
				tinymce.init({
					selector: 'textarea#answerkey',
					height: $('#answerkeyexercise').height(),
					menubar: false,
					plugins: [

					],
					style_formats: [{
						title: 'Heading',
						format: 'h3',
						classes: 'elixir-heading'
					}, {
						title: 'Content',
						format: 'p',
						classes: 'elixir-content'
					}],
					toolbar: 'undo redo | styleselect | bold italic underline',
					content_css: '/styles/tinymce.css'
				});
			} else if (stepNumber === 3) {
				BUTTON_FINISH.classList.remove('disabled');
			}//end if
		});//('#smartwizard').on('showStep')

		$('select#subject-select').chosen({
			width: '100%'
		});

		const tagManger = $('#tags').tagsManager({
			replace: true,
			hiddenTagListName: 'tags',
			//Does not work
			hiddenTagListId: 'input_tags'
		});
	});//document.addEventListener('DOMContentLoaded')
})();//IIFE
