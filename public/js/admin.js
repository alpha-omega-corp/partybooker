$(function () {	
	
	//url mask
	//$('.url').mask('00:00', {placeholder: "00:00"});
	//$('.url').mask('https://A', {'translation': {A: {pattern: /[a-zA-Z0-9]/}}});
	
	//blog filter
	$('.blog-filter li a').on('click', function() {
		var st = $(this).attr('status');
		$('.blog-list a').hide();
		$('.blog-list [status='+st+']').show();
		if (st == 'all') {
			$('.blog-list a').show();
		}
	});
	
	//active page
	var page = $('html').attr('page');
	$('.header-navigation [page='+page+']').addClass('active');

	//Post page 
	$('.img-prev .del').on('click', function() {
		$(this).parent().find('img').attr('src', '');
		$(this).parent().find('.sec-img').attr('value','');
		$(this).hide();
	});
	$('.control #delete').on('click', function(e) {
		$('#remove-post').fadeIn();
	});
	$(".control").on('click', '#publish', function(e){
		var CSRF_TOKEN = $('.post-edit form [name=_token]').val();
		var post = $('.post-edit').attr('postid');
		var lang = $('html').attr('lang');
		e.preventDefault();
		$.ajax({
			url: '/publish',
			type: 'POST',
			data: {_token: CSRF_TOKEN, post:post, lang:lang},
			success:function(data){
				$('.public').empty();
				$('.public').html(data.msg);
				$('.control li:nth-child(2)').html('Make <span id="draft">draft</span>')
			}
		}); 
	});
	$(".control").on('click', '#draft', function(e){
		var CSRF_TOKEN = $('.post-edit form [name=_token]').val();
		var post = $('.post-edit').attr('postid');
		var lang = $('html').attr('lang');
		e.preventDefault();
		$.ajax({
			url: '/draft',
			type: 'POST',
			data: {_token: CSRF_TOKEN, post:post, lang:lang},
			success:function(data){
				$('.public').empty();
				$('.public').html(data.msg);
				$('.control li:last-child').html('<span id="publish">Publish it!</span>')
			}
		}); 
	});

	$('.post-title').change(function() {
		var par = $(this).parent().attr('lan');
		if (par == 'en') {
			if ($('.post-edit').length == 0) {
				var slug = $.trim($(this).val().toLowerCase());
				slug = slug.replace(/\s+/g, '-');
				$('.post-slug').val(slug);
			}
			if($(this).val().length > 0) {
				$('.status [ln=en] [item=title] span').addClass('ok').html('OK');
			} else {
				$('.status [ln=en] [item=title] span').removeClass('ok').html('NaN');
			}
		} else {
			if($(this).val().length > 0) {
				$('.status [ln=fr] [item=title] span').addClass('ok').html('OK');
			} else {
				$('.status [ln=fr] [item=title] span').removeClass('ok').html('NaN');
			}
		}
	});
	
	$('.lang-tab').on('keyup',function() {
		var par = $(this).attr('lan');
		if (par == 'en') {
			if($('[lan=en] .note-editable').text().length > 0) {
				$('.status [ln=en] [item=post] span').addClass('ok').html('OK');
			} else {
				$('.status [ln=en] [item=post] span').removeClass('ok').html('NaN');
			}
		} else {
			if($('[lan=fr] .note-editable').text().length > 0) {
				$('.status [ln=fr] [item=post] span').addClass('ok').html('OK');
			} else {
				$('.status [ln=fr] [item=post] span').removeClass('ok').html('NaN');
			}
		}
	});
	
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				if($('.post-edit').length >0) {
					var tag = $(input).parent().children('img');
					var img = e.target.result;
					$(tag).attr('src', img);					
				} else {
					var img = '<img src="'+e.target.result+'" alr="preview" />';
					$(input).parent().append(img);
				}
			}
    		reader.readAsDataURL(input.files[0]);
		}
	}
	$(".img-prev #main-img").change(function() {
		readURL(this);
	});
	$(".img-prev #sec-img").change(function() {
		readURL(this);
		$(this).parent().find('.del').show();
	});
	
	//DROP ZONE
	$('input[type=file]').on('change', function () {
		var name = $('input[type=file]').val().split('\\').pop();
		if (name) {
			$('label .zone').css('color', 'transparent');
		} else {
			$('label .zone').css('color', '#333333');
		}
		$('#filename').text(name);
	});

	$('input[type=file]').on('dragenter', function () {
		$('label .zone').addClass('dragover');
	});

	$('input[type=file]').on('dragleave', function () {
		$('label .zone').removeClass('dragover');
	});
	
	//Messages
	$('.form-nav a').on('click', function(e) {
		if (!$(this).hasClass('button')) {
			$('.form-nav a').removeClass('active');
			$(this).addClass('active');
			e.preventDefault();
		}
		var type = $(this).attr('form-type');
		$('.message').hide();
		if (type == 'all') {
			$('.message').fadeIn();
		} else {
			$('.form-messages [form-type='+type+']').fadeIn();
		}
	});
	$('.form-messages .message').on('click', function() {
		$(this).removeClass('unread');
		$('#view-message div').removeClass('hidden');
		$('#view-message div p').empty();
		var id = $(this).data('id');
		var type = $(this).data('type');
		var type_code = $(this).data('type_code');
		var date = $(this).data('date');
		var name = $(this).data('name');
		var email = $(this).data('email');
		var emailto = $(this).data('emailto');
		var partnerid = $(this).data('partnerid');
		var partnerName = $(this).data('partnername');
		var phone = $(this).data('phone');
		var message = $(this).data('message');
		var question = $(this).data('question');

		$('#view-message [field=type]').append('<p>'+type+'</p>');
		$('#view-message [field=date]').append('<p>'+date+'</p>');
		if (name) {
			$('#view-message [field=name]').append('<p>'+name+'</p>');
		} else {
			$('#view-message [field=name]').addClass('hidden');
		};
		if (email) {
			$('#view-message [field=email]').append('<p>'+email+'</p>');
		} else {
			$('#view-message [field=email]').addClass('hidden');
		};
		if (emailto) {
			$('#view-message [field=emailto]').append('<p>'+emailto+'</p>');
		} else {
			$('#view-message [field=emailto]').addClass('hidden');
		};
		if (partnerid) {
			$('#view-message [field=partnerid]').append('<p>'+partnerid+'</p>');
		} else {
			$('#view-message [field=partnerid]').addClass('hidden');
		};
		if (phone) {
			$('#view-message [field=phone]').append('<p>'+phone+'</p>');
		} else {
			$('#view-message [field=phone]').addClass('hidden');
		};
		if (message) {
			$('#view-message [field=message]').append('<p>'+message+'</p>');
		} else {
			$('#view-message [field=message]').addClass('hidden');
		}
		if (question) {
			$('#view-message [field=question]').append('<p>'+question+'</p>');
		} else {
			$('#view-message [field=question]').addClass('hidden');
		}

		if (partnerName) {
			$('#view-message [field=partnerName]').append('<p>'+partnerName+'</p>');
		} else {
			$('#view-message [field=partnerName]').addClass('hidden');
		}

		var url = '/read-message' ;
		if(type_code == 'request'){
			url = '/read-direct-message'
		}
		
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		$.ajax({
			url: url,
			type: 'POST',
			data: {_token: CSRF_TOKEN, messageid:id},
		}); 
		$('#view-message').fadeIn();
	});
	
	//Faqs
	$('.faq .edit').on('click', function() {
		var faqId = $(this).parent().attr('faq-id');
		var question_en = $.trim($('[faq-id='+faqId+'] .q-en').text());
		var answer_en = $.trim($('[faq-id='+faqId+'] .a-en').text());
		var question_fr = $.trim($('[faq-id='+faqId+'] .q-fr').text());
		var answer_fr = $.trim($('[faq-id='+faqId+'] .a-fr').text());
		$('#edit-faq [name=faq-id]').val(faqId);
		$('#edit-faq [name=question_en]').val(question_en);
		$('#edit-faq [name=answer_en]').val(answer_en);
		$('#edit-faq [name=question_fr]').val(question_fr);
		$('#edit-faq [name=answer_fr]').val(answer_fr);
		$('#edit-faq').fadeIn();
	});
	$('.faq .del').on('click', function() {
		var faqId = $(this).parent().attr('faq-id');
		$('#del-faq [name=faq-id]').val(faqId);
		$('#del-faq').fadeIn();
	});
	$('.faq-nav a').on('click', function(e) {
		$('.faq-nav a').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
		var type = $(this).attr('faq-type');
		$('.faq').hide();
		if (type == 'all') {
			$('.faq').fadeIn();
		} else {
			$('.faqs-list [faq-type='+type+']').fadeIn();
		}
	});
	$('.faq .question').on('click', function() {
		var faq = $(this).attr('faq');
		$('.faq [ans='+faq+']').toggle('open');
	});
	
	//Lang tabs 
	$('.terms-en').show();
	$('.lang-nav [lan=en]').addClass('active');
	$('.lang-nav li').on('click', function() {
		$('.lang-nav li').removeClass('active');
		$(this).addClass('active');
		var lang = $(this).attr('lan');
		$('.lang-tab').hide();
		$('.terms-'+lang).fadeIn();
	});
	
	//Summernote Editor
	if($('#terms_en').length > 0) {
		$('#terms_en').summernote({
			toolbar: [
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['para', ['style','ul', 'ol', 'paragraph']],
				['fontsize', ['fontsize']],
			]
		});
	};
	if($('#terms_fr').length > 0) {
		$('#terms_fr').summernote({
			toolbar: [
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['para', ['style','ul', 'ol', 'paragraph']],
				['fontsize', ['fontsize']],
			]
		});
		$('#summernote').summernote('fontName', 'GothamPro');
	};
	
	//FILTER LISTING
	$('.filter').on('click', function() {
		$(this).toggleClass('open');
        ($(this).hasClass('open')) ? $(".filters").css({'right':'15px','opacity':1}) : $(".filters").css({'right':'-250px','opacity':0});
	});
	
	
	//new pagination after filtration
	function newPagination() {
		var filtered = parseInt($('.services .filtered').length);
		var lastFiltered = last - filtered;
		var pages = Math.ceil(lastFiltered / limit);
		$('.pagination ul').empty();
		if (pages > 1) {
			for (var i=1; i<=pages; i++) {
				$('.pagination ul').append('<li page="'+i+'">'+i+'</li>');
			}
		}
		$('.pagination [page=1]').addClass('active');
		//display only filtered
		var i = 1;
		var l = 1;
		while (i <= last) {
			if (l > limit) {
				break;
			}
			if (!$('.service-block:nth-child('+i+')').hasClass('filtered')) {
				$('.service-block:nth-child('+i+')').removeClass('hidden');
				l++;
			}
			i++;
		}
		$('.filter').removeClass('open');
		$(".filters").css({'right':'-250px','opacity':0});
	}		
	
	$('#subcategory-select option').hide();
	$('#category-select').on('change', function() {
		$('#subcategory-select option').hide();
		$('#subcategory-select option:first').show().attr('selected',true);
		var cat = $('#category-select option:selected').attr('value');
		for (var i = 1; i <= $('#subcategory-select option:last').index() + 1; i++) {
			if ($('#subcategory-select option:nth-child('+i+')').val().indexOf(cat) >= 0) {
				$('#subcategory-select option:nth-child('+i+')').show();
			}
		}
	});
	
	$('.filters button').on('click', function() {
		$('.service-block').filter(function() {
			
			var filterName = $('.fil-name input').val().toLowerCase();
			
			var filterLoc = $('#location-select option:selected').attr('value');
			var filterLocIndex = $('#location-select option:selected').index();
			
			var filterPlan = $('#plan-select option:selected').attr('value');
			var filterPlanIndex = $('#plan-select option:selected').index();
			
			var filterStatus = $('#status-select option:selected').attr('value');
			var filterStatusIndex = $('#status-select option:selected').index();
			
			var filterCategory = $('#category-select option:selected').attr('value');
			var filterCategoryIndex = $('#category-select option:selected').index();
			
			var filterSubcategory = $('#subcategory-select option:selected').attr('value');
			var filterSubcategoryIndex = $('#subcategory-select option:selected').index();
			
			$(this).removeClass('filtered').addClass('hidden');
			
			//by name
			if ($(this).attr('data-name').toLowerCase().indexOf(filterName) < 0 ) {
				$(this).addClass('filtered-name');
				if(!$(this).hasClass('filtered')) {
					$(this).addClass('filtered');
				}
			} else {
				$(this).removeClass('filtered-name').addClass('hidden');
				if(!$(this).hasClass('filtered-loc') || !$(this).hasClass('filtered-plan') || !$(this).hasClass('filtered-status') || !$(this).hasClass('filtered-category') || !$(this).hasClass('filtered-subcategory')) {
					$(this).removeClass('filtered');
				}
			}
			
			//by location
			if (filterLocIndex != 0) {
				if ($(this).attr('data-location') != filterLoc) {
					$(this).addClass('filtered-loc');
					if(!$(this).hasClass('filtered')) {
						$(this).addClass('filtered');
					}
				} else {
					$(this).removeClass('filtered-loc').addClass('hidden');
					if(!$(this).hasClass('filtered-plan') || !$(this).hasClass('filtered-status') || !$(this).hasClass('filtered-category') || !$(this).hasClass('filtered-subcategory')) {
						if(!$(this).hasClass('filtered-name')) {
							$(this).removeClass('filtered');
						}
					}
				}
			} else {
				$(this).removeClass('filtered-loc').addClass('hidden');
			}			
			
			//by yearly plan
			if (filterPlanIndex != 0) {
				if ($(this).attr('data-plan') != filterPlan) {
					$(this).addClass('filtered-plan');
					if(!$(this).hasClass('filtered')) {
						$(this).addClass('filtered');
					}
				} else {
					$(this).removeClass('filtered-plan').addClass('hidden');
					if(!$(this).hasClass('filtered-status') || !$(this).hasClass('filtered-loc') || !$(this).hasClass('filtered-category') || !$(this).hasClass('filtered-subcategory')) {
						if(!$(this).hasClass('filtered-name')) {
							$(this).removeClass('filtered');
						}
					}
				}
			} else {
				$(this).removeClass('filtered-plan').addClass('hidden');
			}	
			
			//by payment status
			if (filterStatusIndex != 0) {
				if ($(this).attr('data-status') != filterStatus) {
					$(this).addClass('filtered-status');
					if(!$(this).hasClass('filtered')) {
						$(this).addClass('filtered');
					}
				} else {
					$(this).removeClass('filtered-status').addClass('hidden');
				if(!$(this).hasClass('filtered-loc') || !$(this).hasClass('filtered-plan') || !$(this).hasClass('filtered-category') || !$(this).hasClass('filtered-subcategory')) {
						if(!$(this).hasClass('filtered-name')) {
							$(this).removeClass('filtered');
						}
					}
				}
			} else {
				$(this).removeClass('filtered-status').addClass('hidden');
			}
			
			//by category
			if (filterCategoryIndex != 0) {
				$(this).attr('data-category');
				if ($(this).attr('data-category').indexOf(filterCategory) >= 0) {
					$(this).addClass('filtered-category');
					if(!$(this).hasClass('filtered')) {
						$(this).addClass('filtered');
					}
				} else {
					$(this).removeClass('filtered-category').addClass('hidden');
					if(!$(this).hasClass('filtered-loc') || !$(this).hasClass('filtered-plan') || !$(this).hasClass('filtered-status') || !$(this).hasClass('filtered-subcategory')) {
						if(!$(this).hasClass('filtered-name')) {
							$(this).removeClass('filtered');
						}
					}
				}
			} else {
				$(this).removeClass('filtered-category').addClass('hidden');
			}
			
			//by subcategory
			if (filterSubcategoryIndex != 0) {
				$(this).attr('data-subcategory');
				if ($(this).attr('data-subcategory').indexOf(filterSubcategory) >= 0) {
					$(this).addClass('filtered-subcategory');
					if(!$(this).hasClass('filtered')) {
						$(this).addClass('filtered');
					}
				} else {
					$(this).removeClass('filtered-subcategory').addClass('hidden');
					if(!$(this).hasClass('filtered-loc') || !$(this).hasClass('filtered-plan') || !$(this).hasClass('filtered-status') || !$(this).hasClass('filtered-category')) {
						if(!$(this).hasClass('filtered-name')) {
							$(this).removeClass('filtered');
						}
					}
				}
			} else {
				$(this).removeClass('filtered-subcategory').addClass('hidden');
			}
			
		});
		
		newPagination();
	});
	
	//LISTING SORT by
	$.fn.sortListUp = function(a,b) {
		var mylist = $(this);
		var listitems = $(a, mylist).get();
		listitems.sort(function(c,d) {
			var compA = $(c).attr('data-'+b).toUpperCase();
			var compB = $(d).attr('data-'+b).toUpperCase();
			return (compA < compB) ? -1 : 1;
		});
		$.each(listitems, function(i, itm) {
			mylist.append(itm);
		});
	}
	$.fn.sortListDown = function(a,b) {
		var mylist = $(this);
		var listitems = $(a, mylist).get();
		listitems.sort(function(c,d) {
			var compA = $(c).attr('data-'+b).toUpperCase();
			var compB = $(d).attr('data-'+b).toUpperCase();
			return (compA < compB) ? 1 : -1;
		});
		$.each(listitems, function(i, itm) {
			mylist.append(itm);
		});
	}
	$('.sort .up').on('click', function() {
		$('.service-block').addClass('hidden');
		var sort = $(this).attr('sort');
		$(".services").sortListUp('.service-block',sort);
		var page = parseInt($('.pagination .active').attr('page'));
		if (page == 1 || !page) {
			for (var i=1; i<=limit; i++) {
				$('.service-block:nth-child('+i+')').removeClass('hidden');
			}
		} else {
			for (var i=page; i <= page+limit; i++) {
				$('.service-block:nth-child('+i+')').removeClass('hidden');
			}
		}
	});
	$('.sort .down').on('click', function() {
		$('.service-block').addClass('hidden');
		var sort = $(this).attr('sort');
		$(".services").sortListDown('.service-block',sort);
		var page = parseInt($('.pagination .active').attr('page'));
		if (page == 1 || !page) {
			for (var i=1; i<=limit; i++) {
				$('.service-block:nth-child('+i+')').removeClass('hidden');
			}
		} else {
			for (var i=page; i <= page+limit; i++) {
				$('.service-block:nth-child('+i+')').removeClass('hidden');
			}
		}
		
	});
	
	//LISTING PAGINATION
	var limit = 20;
	var last = parseInt($('.service-block:last').attr('num'));
	
	var pages = Math.ceil(last / limit);
	if (pages > 1) {
		for (var i=1; i<=pages; i++) {
			$('.pagination ul').append('<li page="'+i+'">'+i+'</li>');
		}
	}
	$('.pagination [page=1]').addClass('active');
	for (var i=1; i<=last; i++) {
		if ($('.service-block:nth-child('+i+')').attr('num') > limit) {
			$('.service-block:nth-child('+i+')').addClass('hidden');
		}
	}
	$('.pagination').on('click', 'li' ,function() {
		var page = parseInt($(this).attr('page'));
		$('.service-block').addClass('hidden');
		if(page == 1) {
			for (var i=1; i <= limit; i++) {
			$('.service-block:nth-child('+i+')').removeClass('hidden');
			} 
		} else {
			for (var i=page+1; i <= page+limit; i++) {
				$('.service-block:nth-child('+i+')').removeClass('hidden');
			}		
		}			
	});

	//IF CHECK OTHER - ADDITIONAL INPUT FIELD
	var addInput = '<input type="text" name="other" maxlength="35" class="add-input" required/>';
	$('.other').on('click', function() {
		$(this).toggleClass('additional');
		($(this).hasClass('additional')) ? $('.additional-field').append(addInput) : $('.add-input').remove();
		($(this).hasClass('additional')) ? $('.additional-field').addClass('visible') : $('.additional-field').removeClass('visible');
	});
	
	//CUSTOM CHECKBOXES
	$('.checkbox-item').append('<span class="checkmark"></span>');
	$('.radio-item').append('<span class="checkmark"></span>');

	//MOBILE MENU OPENER
	$('.mobile-opener').on('click', function() {
		$(this).toggleClass('open');
        ($(this).hasClass('open')) ? $(".menu").fadeIn() : $(".menu").fadeOut();
	});
	
	//OPEN POPUPs
	$('#new-faq-btn').on('click', function(e) {
		e.preventDefault();
		$('#new-faq').fadeIn();
	});

	function formatRow(position, cat, sub_cat, group){
		return '<tr><td><input type="number" name="option[' + position + '][categories]" value="'+cat+'"></td><td><input type="number" name="option[' + position + '][sub_categories]" value="'+sub_cat+'"></td><td><input type="number" name="option[' + position + '][group]" value="'+group+'"></td><td><a href="#" class="remove-plan-option"><span>X</span></a></td></tr>';
	}
	
	$('.btn-edit-plan').on('click', function(e) {
		e.preventDefault();
		var planId = $(this).attr('plan');

		$.ajax({
			type: "get",
			url: '/cp/settings/plans/' + planId,
			success: function(data)
			{
				$('[name=id]').val(data.id);
				$('[name=name]').val(data.name);
				$('[name=photos]').val(data.photos_num);
				$('[name=price]').val(data.price);

				if(data.direct_request == 1){
					$('#d_request_y').trigger('click');
				}else{
					$('#d_request_n').trigger('click');
				}

				if(data.videos == 1){
					$('#video_y').trigger('click');
				}else{
					$('#video_n').trigger('click');
				}

				if(data.position > 3){
					$('form#edit-plan #select-position').val('');
					$('form#edit-plan #position-input').show().prop('disabled', 0);
					$('form#edit-plan #position-input').val(data.position);
				}else{
					$('form#edit-plan #select-position').val(data.position);
				}

				for (i = 0; i< data.plan_options.length; i++){
					var option = data.plan_options[i];
					$('table.edit-plan-option-list  tbody').append(formatRow(i, option.categories_count,option.sub_categories_count, option.group));
				}
			},
			error: function (r) {
				var data = JSON.parse(r.responseText);
				alert(data.message);
				$('#edit-plan').fadeOut();
			}
		});

		$('#edit-plan').fadeIn();
		
	});
	
	$('#new-plan-btn').on('click', function(e) {
		e.preventDefault();
		$('#new-plan').fadeIn();
	});
	$('#edit-profile-btn').on('click', function(e) {
		e.preventDefault();
		$('#edit-profile').fadeIn();
	});
	
	//CLOSE POPUP
	$('.close').on('click', function() {
		$('.popup').fadeOut();
	});
	$('.popup').on('click', function (e) {
		if ($(e.target).closest(".popup .popup_form").length === 0) {
			$(".popup").fadeOut();
		}
	});
	
	//EVENT HANDLER (SUCCESS || ERRORS)
	var pathname = window.location.href;
	var eventStatus = pathname.split('#')[1];
	if (eventStatus === 'success') {
		$('.messages .success').show().delay(3000).fadeOut();
	} else if (eventStatus === 'error') {
		$('.messages .error').show().delay(3000).fadeOut();
	}
	
});
