$(function () {
	$('#formADD_student').validate({
		rules: {
			student_no: {
				required: true,
				minlength: 8,
				maxlength: 8,
			},
			department: {
				required: true,
			},
			firstname: 'required',
			middlename: 'required',
			lastname: 'required',
			birthdate: 'required',
			gender: 'required',
			email: {
				required: true,
				email: true,
			},
			password: {
				required: true,
				minlength: 8,
			},
		},
		messages: {
			student_no: {
				required: 'Please enter a valid student number.',
				minlength: 'Please enter at least 7 characters',
				maxlength: 'Please enter no more than 7 characters.',
			},
			department: {
				required: 'Please select a department',
			},
			firstname: {
				required: 'Please enter a firstname',
			},
			middlename: {
				required: 'Please enter middlename',
			},
			lastname: {
				required: 'Please enter lastname',
			},
			birthdate: {
				required: 'Please select birthdate',
			},
			birthdate: {
				required: 'Please select birthdate',
			},
			gender: {
				required: 'Please select gender',
			},
			email: {
				required: 'Please enter a email address',
				email: 'Please enter a valid email address',
			},
			password: {
				required: 'Please provide a password',
				minlength: 'Your password must be at least 8 characters long',
			},
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		},
	});
});
