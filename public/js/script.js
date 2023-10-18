var $ = jQuery;

$('.note').delay(3000).fadeOut();

var translates = {
    next: {
        en: 'Next',
        fr: "Suivant"
    },
    previous: {
        en: 'Previous',
        fr: "Précédent"
    }
};

function translate(key) {
    return translates[key][locale]
}

var href = window.location.href;
var locale = href.search('/en/') ? 'en' : 'fr';

function newPagination() {
    var filtered = parseInt($('.service-listing .filtered').length);
    var last = $('.list-item:last').index() + 1;
    var lastFiltered = last - filtered;
    var pages = Math.ceil(lastFiltered / limit);
    $('.pagination').empty();
    if (pages > 1) {
        $('.pagination').append('<li page="prev" class="page-item navigation" > ' + translate('previous') + ' </li>');
        for (var i = 1; i <= pages; i++) {
            $('.pagination').append('<li page="' + i + '" class="page-item">' + i + '</li>');
        }
        $('.pagination').append('<li page="next" class="page-item navigation" >' + translate('next') + ' </li>');
    }
    $('.pagination [page=1]').addClass('active');
    //display only filtered
    var i = 1;
    var l = 1;
    while (i <= last) {
        if (l > limit) {
            break;
        }
        if (!$('.list-item:nth-child(' + i + ')').hasClass('filtered')) {
            $('.list-item:nth-child(' + i + ')').removeClass('hidden');
            l++;
        }
        i++;
    }
}

$("a.check-href").click(function () {
    $(this).toggleClass("chose");
    $(this).parent().toggleClass('chosefil');
});

//Category/subcategory filter
$('a.subcat-a').on('click', function (e) {
    $(this).closest('ul').closest('li.dropdown-btn').removeClass('chosefil');
    $(this).closest('ul').closest('li.dropdown-btn').find('a').first().removeClass('chose');
});

var listNum = $('.service-listing .list-item:last').index() + 1;
$('.filters-list a').on('click', function (e) {
    var href = $(this).attr('href');
    if (href == '#') {
        e.preventDefault();
    }

    $('.service-listing .list-item').addClass('filtered-cat filtered');
    var filNum = $('.filters-list .chosefil').length;
    var filLastNum = $('.filters-list li:last').index() + 1;

    var categories = [];
    $('.filters-list li.chosefil').each(function () {
        categories.push($(this).data('catfil'))
    });
    var catlist = '.' + categories.join(', .');

    if (filNum != 0) {
        for (var i = 1; i <= listNum; i++) {
            if ($('.service-listing .list-item:nth-child(' + i + ')').is(catlist)) {
                $('.service-listing .list-item:nth-child(' + i + ')').removeClass('filtered-cat');
                if (!$('.service-listing .list-item:nth-child(' + i + ')').hasClass('filtered-price')) {
                    $('.service-listing .list-item:nth-child(' + i + ')').removeClass('filtered');
                }
            }
        }
    } else {
        $('.service-listing .list-item').removeClass('filtered-cat');
        if (!$('.service-listing .list-item').hasClass('filtered-price')) {
            $('.service-listing .list-item').removeClass('filtered');
        }
    }
    newPagination();

});

$('.multirange .lower').on('change', function () {
    var lowP = $('.multirange .lower').val();
    var upperP = $('.multirange .upper').val();

    var url = $('.multirange').data('url');

    var url = new URL(url);
    url.searchParams.set('min_price', lowP);
    url.searchParams.set('max_price', upperP);

    window.location.href = url.href;

});


$('.multirange .upper').on('change', function () {
    var lowP = $('.multirange .lower').val();
    var upperP = $('.multirange .upper').val();

    var url = $('.multirange').data('url');
    console.log(url, lowP, upperP);

    var url = new URL(url);
    url.searchParams.set('min_price', lowP);
    url.searchParams.set('max_price', upperP);

    window.location.href = url.href;
});

//LISTING PAGINATION
var limit = 20;
var last = parseInt($('.list-item:last').index()) + 1;

var pages = Math.ceil(last / limit);
if (pages > 1) {
    $('.pagination').append('<li page="prev" class="page-item navigation" >' + translate('previous') + '</li>');
    for (var i = 1; i <= pages; i++) {
        $('.pagination').append('<li page="' + i + '" class="page-item">' + i + '</li>');
    }
    $('.pagination').append('<li page="next" class="page-item navigation" >' + translate('next') + '</li>');
}
$('.pagination [page=1]').addClass('active');


$('.list-item').addClass('hidden');
$('.list-item').slice(0, limit).removeClass('hidden');


//SORTing
//LISTING SORT by
$.fn.sortListUp = function (a, b) {
    var mylist = $(this);
    var listitems = $(a, mylist).get();
    listitems.sort(function (c, d) {
        var compA = $(c).attr('data-' + b).toUpperCase();
        var compB = $(d).attr('data-' + b).toUpperCase();
        return (compA < compB) ? -1 : 1;
    });
    $.each(listitems, function (i, itm) {
        mylist.append(itm);
    });
}
$.fn.sortListDown = function (a, b) {
    var mylist = $(this);
    var listitems = $(a, mylist).get();
    listitems.sort(function (c, d) {
        var compA = $(c).attr('data-' + b).toUpperCase();
        var compB = $(d).attr('data-' + b).toUpperCase();
        return (compA < compB) ? 1 : -1;
    });
    $.each(listitems, function (i, itm) {
        mylist.append(itm);
    });
}
$('.sort .up').on('click', function (e) {
    e.preventDefault();
    //$('.list-item').addClass('hidden');
    var sort = $(this).attr('sort');
    $(".service-listing").sortListUp('.list-item', sort);

    var url = $('.sort').data('url');

    var url = new URL(url);
    url.searchParams.set('order_by', sort);
    url.searchParams.set('order_type', 'asc')

    window.location.href = url.href;


});
$('.sort .down').on('click', function (e) {
    e.preventDefault();
    //$('.list-item').addClass('hidden');
    var sort = $(this).attr('sort');
    $(".service-listing").sortListDown('.list-item', sort);
    var url = $('.sort').data('url');

    var url = new URL(url);
    url.searchParams.set('order_by', sort);
    url.searchParams.set('order_type', 'desc')

    window.location.href = url.href;

});

//FILTER URLs
$('.filter-btn').on('click', function () {
    //e.preventDefault();
    var lang = $('html').attr('lang');
    var name = $('[name=filter_name]').val();
    var category = $('[name=filter_category]').val();
    //  var category = $('.custom-dropdown>.value-dropdown').val();
    var place = $('[name=filter_place]').val();
    var budget = $('[name=filter_budget]').val();
    if (lang == 'en') {
        lang = '/' + lang + '/listings-filtered';
    } else {
        lang = '/annonces-filtered';
    }

    var url = lang + '?place=' + place
    $(this).attr('href', url);
});
var filName = $('[name=filter_name]').data('value');
if (filName) {
    if (filName.length > 0) {
        $('[name=filter_name]').val(filName);
    }
}

var selCat = $('[name=filter_category]').data('value');
if (selCat) {
    if (selCat.length > 0) {
        $('[name=filter_category] option').attr('selected', false);
        $('[name=filter_category] [value=' + selCat + ']').attr('selected', true);
    }
}

var selPl = $('[name=filter_place]').data('value');
if (selPl) {
    if (selPl.length > 0) {
        $('[name=filter_place] option').attr('selected', false);
        $('[name=filter_place] [value=' + selPl + ']').attr('selected', true);
    }
}

var selBu = $('[name=filter_budget]').data('value');
if (selBu) {
    if (selBu.length > 0) {
        $('[name=filter_budget] option').attr('selected', false);
        for (var i = 1; i <= 7; i++) {
            if ($('[name=filter_budget] option:nth-child(' + i + ')').html() == selBu) {
                $('[name=filter_budget] option:nth-child(' + i + ')').attr('selected', true);
            }
        }
    }
}


//statistics of clicks
$('.info-element .element').on('click', function () {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var click = $(this).parent().attr('class');
    var id = $('.partner-details').data('id');

    $.ajax({
        url: '/stat',
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            id_partner: id,
            click: click
        }
    })
});

$('.click-details li a.social-network').on('click', function () {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var click = $(this).parent().attr('class');
    var id = $('.service-section').data('id');
    $.ajax({
        url: '/stat',
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            id_partner: id,
            click: click
        }
    })
});


//Service page: add data value to stars
for (var i = 1; i <= 5; i++) {
    $('.service-section li:nth-child(' + i + ')').attr('data-value', i);
}

//LEAVE A RATING


//DELETE FILE
$('.li.files .del').on('click', function (e) {
    e.preventDefault();

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var id = $(this).data('id');
    var file = $(this).data('file');
    var admin = $('.partner-cp').data('type');
    if (admin == 'admin') {
        var url = '/cp/partner-cp/del-file';
    } else {
        var url = '/partner-cp/del-file';
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            id: id,
            fileDel: file,
        },
        success: function (data) {
            $(this).parent().fadeOut();
        },
        error: function (r) {
            console.log(r);
            console.log(r.responseText);
        }
    });
    $(this).parent().fadeOut();
});

//PUBLISH / DRAFT service
$('.tab .status .public .btn').on('click', function (e) {
    e.preventDefault();
    if (!$(this).hasClass('disabled')) {
        $('.tab .status .public span').removeClass('text-primary');
        $('.tab .status .public span').removeClass('text-danger');
        $('.tab .status .public .btn').removeClass('text-danger');
        $('.tab .status .public .btn').removeClass('text-primary');

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var id = $(this).data('id');
        var admin = $('.partner-cp').data('type');
        if (admin == 'admin') {
            var url = '/cp/partner-cp/publish';
        } else {
            var url = '/partner-cp/publish';
        }
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                id_partner: id
            },
            success: function (data) {
                $('.tab .status .public .btn').html(data.msg);
                $('.tab .status .public span').html(data.stat);
                console.log(data.msg);
                if (data.msg === 'Draft') {
                    $('.tab .status .public span').addClass('text-primary');
                    $('.tab .status .public .btn').addClass('text-danger');
                } else {
                    $('.tab .status .public span').addClass('text-danger');
                    $('.tab .status .public .btn').addClass('text-primary');

                }


            }
        });
    }
});

//partner details
$('.partner-cp .gallery .del').on('click', function (e) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var id = $(this).data('id');
    var img = $(this).data('img');
    var imgId = $(this).data('imageId');
    var cat = $(this).data('img-cat');
    var num = $('.catImages .imgNumber').text();
    var admin = $('.partner-cp').data('type');
    if (admin == 'admin') {
        var url = '/cp/partner-cp/del-image';
    } else {
        var url = '/partner-cp/del-image';
    }
    e.preventDefault();
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            id_partner: id,
            imgId: imgId,
            img: img,
            num: num
        },
        success: function (data) {
            $('.catImages .imgNumber').html(data.msg);
            $('.edit-images [name=imgNum]').val(data.msg);
        }
    });
    $(this).parent().fadeOut();
});

//additional field for checkbox click other
$('.partnerdetails .other-field').on('click', function () {
    var checkBox = $(this).attr('field');
    var addInput = '<textarea type="text" name="other' + checkBox + '" maxlength="100" class="add-input-' + checkBox + '" required/></textarea>';
    $(this).toggleClass('additional');
    ($(this).hasClass('additional')) ? $('.for-' + checkBox + '').append(addInput) : $('.add-input-' + checkBox + '').remove();
    ($(this).hasClass('additional')) ? $('.for-' + checkBox + '').addClass('visible') : $('.for-' + checkBox + '').removeClass('visible');
});

//additional field for radio buttons
$('.partnerdetails .has-field').change(function () {
    var field = $(this).attr('field');

    if ($(this).val() == 'yes' && field != 'aff_caterers' && field != 'free_caterers') {
        if (field == 'accomodation') {
            var addInput = '<input type="number" name="yes_' + field + '" min="0" class="add-input-' + field + '" placeholder="capacity" required/>';
        } else {
            var addInput = '<input type="text" name="yes_' + field + '" maxlength="150" class="add-input-' + field + '" required/>';
        }
        $('.for-' + field).append(addInput);
        $('.for-' + field).addClass('visible');
    } else {
        $('.add-input-' + field).remove();
        $('.for-' + field).removeClass('visible');
    }


    if (field == 'article') {
        if ($(this).val() == 'art_d') {
            $('.for-article-file').addClass('visible');
            $('.add-input-' + field).remove();
            $('.for-' + field).removeClass('visible');
        } else {
            $('.for-article-file').removeClass('visible');
            var addInput = '<input type="url" name="' + field + '_l" min="0" class="add-input-' + field + '" placeholder="Link"/>';
            $('.for-' + field).append(addInput);
            $('.for-' + field).addClass('visible');
        }

    }

    if (field == 'aff_caterers') {
        if ($(this).val() == 'yes') {
            var addInput = '<div class="set"><div class="set-' + field + ' mt-10"><input type="text" value="1" name="set_num_' + field + '" hidden /><div class="' + field + '"><input type="text" name="' + field + '_name_1" placeholder="name"  /><input type="url" name="' + field + '_web_1" class="mt-10" placeholder="url"  /></div></div><div class="button" set="' + field + '">Add one more</div></div>';
            $('.for-' + field).append(addInput);
            $('.for-' + field).addClass('visible');
            $('.for-' + field + '-select').hide();
        } else {
            $('.for-' + field + ' .set').remove();
            $('.for-' + field).removeClass('visible');
            $('.for-' + field + '-select').show();
        }

    }

    if (field == 'free_caterers') {
        if ($(this).val() == 'yes') {
            var addInput = '<div class="set"><div class="set-' + field + ' mt-10"><input type="text" value="1" name="set_num_' + field + '" hidden /><div class="' + field + '"><input type="text" name="' + field + '_name_1" placeholder="name" /><input type="url" name="' + field + '_web_1" class="mt-10" placeholder="url" /></div></div><div class="button" set="' + field + '">Add one more</div></div>';
            $('.for-' + field).append(addInput);
            $('.for-' + field).addClass('visible');
        } else {
            $('.for-' + field + ' .set').remove();
            $('.for-' + field).removeClass('visible');
        }

    }
});
$('.partnerdetails .additional-field').on('click', '.button', function () {
    var set = $(this).attr('set');
    var setNum = parseInt($('.partnerdetails .additional-field .set-' + set + ' [name=set_num_' + set + ']').val()) + 1;
    var block = '<div class="' + set + ' mt-10"><input type="text" name="' + set + '_name_' + setNum + '" placeholder="name" /><input type="url" name="' + set + '_web_' + setNum + '" class="mt-10" placeholder="url"/></div>';
    $('.partnerdetails .additional-field .set-' + set).append(block);
    $('.partnerdetails .additional-field .set-' + set + ' [name=set_num_' + set + ']').val(setNum);
});
//additional field for price
$('.partnerdetails [name=price_for]').change(function () {
    if ($('.partnerdetails [name=price_for] option:selected').hasClass('other-price')) {
        var addInput = '<input type="text" name="other_price" maxlength="35" class="add-input-price" required/>';
        $('.for-price').append(addInput);
        $('.for-price').addClass('visible');
    } else {
        $('.add-input-price').remove();
        $('.for-price').removeClass('visible');
    }

});

$('.partnerdetails .set .button').on('click', function () {
    var set = $(this).attr('set');
    var setNum = parseInt($('.partnerdetails .set-' + set + ' [name=set_num]').val()) + 1;
    if (set == 'conference-room') {
        var block = '<div class="conference-room mt-10"><div class="row"><div class="col-sm-8"><input type="text" name="room_name_' + setNum + '" placeholder="Name"  /></div><div class="col-sm-4"><input type="number" name="room_cap_' + setNum + '" min="0" placeholder="Capacity" /></div></div></div>';
    }
    if (set == 'service_activity') {
        var setNum = parseInt($('.partnerdetails .set-' + set + ' [name=set_num_service]').val()) + 1;
        var setNumIn = setNum - 1;
        if ($('[name=service_activity_name' + setNumIn + ']').val().length > 0 && $('[name=service_activity_description' + setNumIn + ']').val().length > 0) {
            var block = '<div class="service-activity"><input type="text" name="service_activity_name' + setNum + '" maxlength="30" placeholder="Name" required /><textarea name="service_activity_description' + setNum + '" rows="2" maxlength="300" placeholder="Description" class="mt-10" required /></div>';
            $('.partnerdetails .set-' + set).append(block);
            $('.partnerdetails .set-' + set + ' [name=set_num_service]').val(setNum);
        }

    }
    if (set == 'participant') {
        var setNum = parseInt($('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val()) + 1;
        var setNumIn = setNum - 1;
        if ($('[name=space_name' + setNumIn + ']').val().length > 0 && $('[name=min_num' + setNumIn + ']').val().length > 0 && $('[name=max_num' + setNumIn + ']').val().length > 0) {
            var block = '<div class="participant mt-10"><div class="row"><div class="col-sm-6"><input type="text" name="space_name' + setNum + '" maxlength="30" placeholder="Space name" required /></div><div class="col-sm-3"><input type="number" name="min_num' + setNum + '" min="0" placeholder="min" required /></div><div class="col-sm-3"><input type="number" name="max_num' + setNum + '" min="1" placeholder="max" required /></div></div></div>';
            $('.partnerdetails .set-' + set).append(block);
            $('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val(setNum);
        }
    }
    if (set == 'wine') {
        var setNum = parseInt($('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val()) + 1;
        var setNumIn = setNum - 1;
        if ($('[name=wine_name' + setNumIn + ']').val().length > 0 && $('[name=wine_description' + setNumIn + ']').val().length > 0) {
            var block = '<div class="wine"><input type="text" name="wine_name' + setNum + '" maxlength="30" placeholder="Name" required /><textarea name="wine_description' + setNum + '" rows="2" maxlength="300" placeholder="Grape variety" class="mt-10" required /></textarea></div>';
            $('.partnerdetails .set-' + set).append(block);
            $('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val(setNum);
        }
    }
    if (set == 'aff') {
        var setNum = parseInt($('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val()) + 1;
        var setNumIn = setNum - 1;
        if ($('[name=aff_name' + setNumIn + ']').val().length > 0) {
            var block = '<div class="affiliations mt-10"><input type="text" name="aff_name' + setNum + '" maxlength="30" placeholder="Name" /><input type="url" name="aff_link' + setNum + '" placeholder="Link" class="mt-10" /></div>';
            $('.partnerdetails .set-' + set).append(block);
            $('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val(setNum);
        }
    }
    if (set == 'conf') {
        var setNum = parseInt($('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val()) + 1;
        var setNumIn = setNum - 1;
        if ($('[name=room_name' + setNumIn + ']').val().length > 0 && $('[name=room_cap' + setNumIn + ']').val().length > 0) {
            var block = '<div class="conference-room mt-10"><div class="row"><div class="col-md-8"><input type="text" name="room_name' + setNum + '" placeholder="Name" required /></div><div class="col-md-4"><input type="number" name="room_cap' + setNum + '" min="0" placeholder="Capacity" required /></div></div></div>';
            $('.partnerdetails .set-' + set).append(block);
            $('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val(setNum);
        }
    }
    if (set == 'reward') {
        var setNum = parseInt($('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val()) + 1;
        var setNumIn = setNum - 1;
        if ($('[name=price_name' + setNumIn + ']').val().length > 0 && $('[name=contest_name' + setNumIn + ']').val().length > 0) {
            var block = '<div class="reward mt-10"><input type="text" name="price_name' + setNum + '" placeholder="Wine name" required /><input type="text" name="contest_name' + setNum + '" placeholder="Contest name" required class="mt-10"/><span class="radio-item"><input type="radio" name="reward' + setNum + '" value="gold" required /><span>GOLD</span><span class="checkmark"></span></span><span class="radio-item"><input type="radio" name="reward' + setNum + '" value="silver" /><span>SILVER</span><span class="checkmark"></span></span><span class="radio-item"><input type="radio" name="reward' + setNum + '" value="bronze" /><span>BRONZE</span><span class="checkmark"></span></span></div>';
            $('.partnerdetails .set-' + set).append(block);
            $('.partnerdetails .set-' + set + ' [name=set_num_' + set + ']').val(setNum);
        }
    }
    var setNumIn = setNum - 1;
    if (set == 'affiliations' && $('[name=aff-name-' + setNumIn + ']').val().length > 0 && $('[name=aff-link-' + setNumIn + ']').val().length > 0) {
        var block = '<div class="affiliations mt-10"><input type="text" name="aff_name_' + setNum + '" maxlength="30" placeholder="Name" required /><input type="url" name="aff_link_' + setNum + '" placeholder="Link" class="mt-10" /></div>';

        $('.partnerdetails .set-' + set).append(block);
        $('.partnerdetails .set-' + set + ' [name=set_num]').val(setNum);
    }

    if (set != 'affiliations' && set != 'service_activity' && set != 'participant' && set != 'wine' && set != 'aff' && set != 'conf' && set != 'reward') {
        $('.partnerdetails .set-' + set).append(block);
        $('.partnerdetails .set-' + set + ' [name=set_num]').val(setNum);
    }

});

//partner tabs
$('.edit-category .cat select').change(function () {
    var opt = $(this).attr('option');
    $('.option-' + opt + ' .subcat').hide();
    $('.option-' + opt + ' .subcat select').attr('required', false);
    var cat = $('.option-' + opt + ' .cat option:selected').val();
    $(".subcat select:hidden").val("");
    $('.option-' + opt + ' .' + cat).fadeIn().css('display', 'inline-flex');
    $('.option-' + opt + ' .' + cat + ' select').attr('required', true);
});

var partnerTab = window.location.hash.substr(1);
if (partnerTab.length > 0) {
    $('.partner-cp .tab').hide();
    $('.partner-nav a').removeClass('active');
    $('.partner-nav [tab-nav=' + partnerTab + ']').addClass('active');
    $('.partner-cp [tab=' + partnerTab + ']').fadeIn();
}

if ($('.notifications ul li').length == 0) {
    $('.notifications').hide();
}
$('.notifications .del').on('click', function () {
    $(this).parent().remove();
    if ($('.notifications ul li').length == 0) {
        $('.notifications').fadeOut();
    }
});


$('.profile-info li:first-child').on('click', function () {
    $(this).toggleClass('openBlock');
    var block = $(this).attr('block');
    ($(this).hasClass('openBlock')) ? $('.' + block + ' .li').fadeIn() : $('.' + block + ' .li').hide();
});
//Lang tabs
$('.info-en').show();
$('.lang-nav [lan=en]').addClass('active');
$('.lang-nav li').on('click', function () {
    $('.lang-nav li').removeClass('active');
    $(this).addClass('active');
    var lang = $(this).attr('lan');
    $('.lang-tab').hide();
    $('.info-' + lang).fadeIn();
});

//profile tab popups
$('.contactDetail .button').on('click', function (e) {
    console.log('click');
    e.preventDefault();
    $('.edit-contacts').fadeIn();
});

$('.companyDetails .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-company').fadeIn();
});
$('.socialLiks .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-www').fadeIn();
});
$('.seo .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-seo').fadeIn();
});

$('.images-alt-button.button').on('click', function (e) {
    e.preventDefault();
    $('.edit-images-alt').fadeIn();
});
$('.optionPlan .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-option').fadeIn();
});
$('.categorySubcat .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-category').fadeIn();
});

$('.event-types .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-event-types').fadeIn();
});

$('.fulfilDetails').on('click', function (e) {
    e.preventDefault();
    $(this).closest('ul').next('.partner-details-form').first().fadeIn();
});

$('.vipPlan .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-vip').fadeIn();
});

//details edit
$('.schedule .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-schedule-' + db).fadeIn();
});
$('.rates .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-rates-' + db).fadeIn();
});
$('.general .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-general-' + db).fadeIn();
});
$('.catering .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-catering-' + db).fadeIn();
});
$('.specialties .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-specialties-' + db).fadeIn();
});
$('.otherservice .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-otherservice-' + db).fadeIn();
});
$('.food .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-food-' + db).fadeIn();
});
$('.comment .button').on('click', function (e) {
    var db = $(this).data('db');
    e.preventDefault();
    $('.edit-comment-' + db).fadeIn();
});

$('.catImages .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-images').fadeIn();
});
$('.catImages .button').on('click', function (e) {
    e.preventDefault();
    $('.edit-images').fadeIn();
});

//ajax partner contact form
$(".partner-form button").on('click', function (e) {
    if ($('.partner-form [name=name]').val().length > 0 && $('.partner-form [name=email]').val().length > 0 && $('.partner-form [name=message]').val().length > 0 && $('.partner-form [type=checkbox]:checked').length > 0) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        e.preventDefault();
        $.ajax({
            url: '/partner-form',
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                name: $('.partner-form [name=name]').val(),
                email: $('.partner-form [name=email]').val(),
                partner_id: $('.partner-form [name=partner_id]').val(),
                message: $('.partner-form [name=message]').val(),
                lang: $('html').attr('lang')
            },
            success: function (data) {
                $('.partner-form').empty();
                $('.partner-form').html('<h4>' + data.msg + '</h4>');
            }
        });
    }
});

//ajax contact form
$(".contact-form button").on('click', function (e) {
    if ($('.contact-form [name=name]').val().length > 0 && $('.contact-form [name=email]').val().length > 0 && $('.contact-form [name=message]').val().length > 0 && $('.contact-form [type=checkbox]:checked').length > 0) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        e.preventDefault();
        $.ajax({
            url: '/contact-form',
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                name: $('.contact-form [name=name]').val(),
                email: $('.contact-form [name=email]').val(),
                message: $('.contact-form [name=message]').val(),
                lang: $('html').attr('lang')
            },
            success: function (data) {
                $('.contact-form').empty();
                $('.contact-form').html('<h4>' + data.msg + '</h4>');
            }
        });
    }
});

//open first faq
$('#collapse1').addClass('show');

//ajax partner phone form
$(".phone-form button").on('click', function (e) {
    console.log('hi')
    if ($('.phone-form [name=phone]').val().length > 0) {
        console.log($('.phone-form [name=phone]').val())
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        e.preventDefault();
        $.ajax({
            url: '/leave-phone',
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                phone: $('.phone-form [name=phone]').val(),
                lang: $('html').attr('lang')
            },
            success: function (data) {
                $('.phone-form .form').empty();
                $('.phone-form .form').html('<h4>' + data.msg + '</h4>');
            }
        });
    }
});

//ajax subscribe form
$(".subscribe-form button").on('click', function (e) {
    if ($('.subscribe-form [name=email]').val().length > 0) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        e.preventDefault();
        $.ajax({
            url: '/subscribe',
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                email: $('.subscribe-form [name=email]').val(),
                lang: $('html').attr('lang')
            },
            success: function (data) {
                $('.subscribe-form').empty();
                $('.subscribe-form').html(data.msg);
            }
        });
    }
});

//add shadow affect
if ($('html').attr('page') == 'faqs') {
    $('.services').addClass('shadow');
}

//active page
var page = $('html').attr('page');
$('header .links [page=' + page + ']').addClass('active');

//active language
var language = $('html').attr('lang');
$('.head-nav [lan=' + language + ']').addClass('active');

$(document).ready(function () {
    $('.time').mask('00:00', {
        placeholder: "00:00"
    });

});

$('.filesUpload').on('change', function () {
    var names = [];
    var num = 5 - parseInt($('.fileNum').val());
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
        names.push($(this).get(0).files[i].name);
        names.push('<br>');
    }
    if ($(this)[0].files.length > num) {
        $('#menus').html('To many files. 5 allowed');
        $('.file-limit').attr('disabled', true);
    } else {
        $('#menus').html(names);
        $('.file-limit').attr('disabled', false);
    }
});

$('.imagesFileUpload').on('change', function () {
    if ($(this).hasClass('multiple')) {
        var names = [];
        var imgMax = parseInt($('.imgNumber').data('max'));
        var num = imgMax - (parseInt($('.imgNumber').text()) - 1);
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            names.push($(this).get(0).files[i].name);
            names.push('<br>');
        }
        if ($(this)[0].files.length > num) {
            $('#filenames').html("Too many images..");
            $('.img-limit').attr('disabled', true);
        } else {
            $('#filenames').html(names);
            $('.img-limit').attr('disabled', false);
        }
    } else if ($(this).hasClass('mainimage')) {
        var name = $(this).val().split('\\').pop();
        $('#mainimage').text(name);
    } else if ($(this).hasClass('articleFile')) {
        var name = $(this).val().split('\\').pop();
        if (name) {
            $('label .zone').css('color', 'transparent');
        } else {
            $('label .zone').css('color', '#333333');
        }
        $('#articleFile').text(name);
    } else {
        var name = $(this).val().split('\\').pop();
        if (name) {
            $('label .zone').css('color', 'transparent');
        } else {
            $('label .zone').css('color', '#333333');
        }
        $('#filename').text(name);
    }
    if ($('.logo-file')) {
        $('[name=current_logo]').attr('value', name);
    }
});

$('input[type=file]').on('dragenter', function () {
    $('label .zone').addClass('dragover');
});

$('input[type=file]').on('dragleave', function () {
    $('label .zone').removeClass('dragover');
});

//IF CHECK OTHER - ADDITIONAL INPUT FIELD
var addInput = '<input type="text" name="other" maxlength="35" class="add-input" required/>';
$('.other').on('click', function () {
    $(this).toggleClass('additional');
    ($(this).hasClass('additional')) ? $('.additional-field').append(addInput) : $('.add-input').remove();
    ($(this).hasClass('additional')) ? $('.additional-field').addClass('visible') : $('.additional-field').removeClass('visible');
});

//show register form
$('.register-btn').on('click', function (e) {
    e.preventDefault();
    $('.register-form').fadeIn();
});

//show phone form
$('#contactUs').on('click', function (e) {
    e.preventDefault();
    $('.phone-form').fadeIn();
});

//show user register form
$('.create-account .create').on('click', function (e) {
    e.preventDefault();
    $('.login-form').fadeOut();
    $('.user-register-form').fadeIn();
});

//show login form
$('.log-in, .rating-login').on('click', function (e) {
    e.preventDefault();
    $('.login-form').fadeIn();
});
$('.rating').on('click', function (e) {
    e.preventDefault();
    $('.rate-form').fadeIn();
});
//close button
$('.close').on('click', function () {
    $('.popup').fadeOut();
});
//close popup
$('.popup-form').on('click', function () {
    $('.popup').fadeOut();
}).on('click', 'form', function (e) {
    e.stopPropagation();
});


//Custom checkmark/radio
$('.checkbox-item').append('<span class="checkmark"></span>');
$('.radio-item').append('<span class="checkmark"></span>');
//Gallery
$('.imageBox').on('click', function (e) {
    if ($(e.target).closest(".imageBox img").length === 0 && $(e.target).closest(".imageBox .left-slide").length === 0 && $(e.target).closest(".imageBox .right-slide").length === 0) {
        $(".imageBox").fadeOut();
    }
});

//IMAGE BOX
$('.gallery img').on('click', function () {
    $('.imageBox img').remove();
    var imgGel = parseInt($('.gallery .gal-img:last img').attr('img-id'));
    var imgId = parseInt($(this).attr('img-id'));
    var imgSrc = $(this).attr('src');
    $('.imageBox .container').append('<img src="' + imgSrc + '" img-id="' + imgId + '" alt=""/>');
    $('.imageBox').fadeIn();

    //nav
    $('.imageBox .image-nav .left').on('click', function () {
        imgId--;
        if (imgId < 1) {
            imgId = imgGel;
        }
        var imgSrc = $('[img-id="' + imgId + '"]').attr('src');
        $('.imageBox img').attr('src', imgSrc).attr('img-id', imgId);
    });
    $('.imageBox .image-nav .right').on('click', function () {
        imgId++;
        if (imgId > imgGel) {
            imgId = 1;
        }
        var imgSrc = $('[img-id="' + imgId + '"]').attr('src');
        $('.imageBox img').attr('src', imgSrc).attr('img-id', imgId);
    });

    //swipe
    var dragging = false;
    var iX;
    var offset1;
    var offset2;
    $(".imageBox img").bind('mousedown touchstart', function (e) {
        dragging = true;
        offset1 = this.offsetLeft;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            iX = e.originalEvent.touches[0].pageX - offset1;
        } else {
            iX = e.clientX - offset1;
        }
        this.setCapture && this.setCapture();
        return false;
    });
    $('.imageBox img').bind('mousemove touchmove', function (e) {
        if (dragging) {
            var e = e || window.event;
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var oX = e.originalEvent.touches[0].pageX - iX;
            } else {
                var oX = e.clientX - iX;
            }
            $(".imageBox .container > img").css({
                'left': oX + 'px'
            });
            return false;
        }
    });

    function changeImg() {
        var imgSrc = $('[img-id="' + imgId + '"]').attr('src');
        $('.imageBox .container > img').attr('src', imgSrc).attr('img-id', imgId);
    }

    $('.imageBox img').bind('mouseup touchend', function (e) {
        dragging = false;
        e.cancelBubble = true;
        offset2 = this.offsetLeft;
        var diff = offset1 - offset2;
        if (diff > 30) {
            imgId++;
            if (imgId > imgGel) {
                imgId = 1;
            }
            changeImg();
        }
        if (diff < -30) {
            imgId--;
            if (imgId < 1) {
                imgId = imgGel;
            }
            changeImg();
        }
        $(".imageBox .container > img").css({
            'left': '50%'
        });
    });
});


//service page tabs
var activeTab = $('.tab-nav .active').attr('tab');
$('#' + activeTab).css('display', 'block');

$('.tab-nav li').on('click', function () {
    $('.tab').hide();
    $('.tab-nav li').removeClass('active');

    activeTab = $(this).attr('tab');
    $(this).addClass('active');
    $('#' + activeTab).fadeIn();
});

//display contact block
$('.click-details li').on('click', function () {
    $(this).find('a').show();
    $(this).find('span').hide();
});


//rating

$('.rating').on('click', function () {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var id_partner = $(this).data('service');
    var user_email = $(this).data('user');
    var stars = parseInt($('.rating-stars ul .selected-active:last').index()) + 1;
    console.log(stars);
    var lang = $('html').attr('lang');
    $.ajax({
        url: '/rate',
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            id_partner: id_partner,
            user_email: user_email,
            stars: stars,
            lang: lang
        },
        success: function (data) {
            $('.rating').parent().addClass('d-none')
            $('.rating-message').replaceWith('<span class="rating-message" style="text-decoration: none; cursor: auto"> ' + data.msg + '</span>');

            let rate = data.rate;
            $('.rating-stars ul li').removeClass('selected');
            for (let i = 1; i <= rate; i++) {
                $('.rating-stars ul li:nth-child(' + i + ')').addClass('selected');
            }

            setTimeout(function () {
                $('.rating-message').addClass('d-none');
            }, 2000);
        }
    });
});

$('.stars li').on('click', function () {
    let selected = $(this).index() + 1;
    let stars = $(this).parent().children('li.star');


    for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('text-yellow');
        $(stars[i]).removeClass('selected-active');

    }

    for (i = 0; i < selected; i++) {
        console.log(stars[i])
        $(stars[i]).addClass('text-yellow');
        $(stars[i]).addClass('selected-active');
    }

    $('.rating').parent().removeClass('d-none')
});


//range
var lower = $('.lower');
var upper = $('.upper');
var lowerVal = parseInt(lower.val());
var upperVal = parseInt(upper.val());
var resultL = $('.result-l');
var resultU = $('.result-u');
var lowMin = parseInt(lower.attr('min'));
var lowMax = parseInt(lower.attr('max'));
var upMin = parseInt(upper.attr('min'));
var upMax = parseInt(upper.attr('max'));
lower.on('input', function () {
    lowerVal = parseInt(lower.val());
    upperVal = parseInt(upper.val());
    if (upperVal <= lowerVal + 1) {
        upper.val(lowerVal + 2)
        if (lowerVal == lowMin) {
            upper.val(lowerVal + 2)
        }
    }
    resultL.html(lowerVal)
    resultU.html(upperVal)
})
upper.on('input', function () {
    lowerVal = parseInt(lower.val());
    upperVal = parseInt(upper.val());

    if (lowerVal >= upperVal - 1) {
        lower.val(upperVal - 2)

        if (upperVal == upMax) {
            lower.val(upperVal - 2)
        }

    }
    resultL.html(lowerVal)
    resultU.html(upperVal)
})

//end range


function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$(".filters-list li:has(ul)").addClass("dropdown-btn");


//          MAP

var icons = {
    cat1: {
        icon: '/images/event.png'
    },
    cat2: {
        icon: '/images/animation.png'
    },
    cat3: {
        icon: '/images/location.png'
    },
    cat4: {
        icon: '/images/traiteur.png'
    },
    cat5: {
        icon: '/images/autour.png'
    },
    cat6: {
        icon: '/images/deco.png'
    },
    angence: {
        icon: '/images/pin.svg'
    }
};


// REPLACE WITH DATA FROM API
//TITLE | POSITION - LAT , LNG | ICON | TITLE | CONTENT

//var place = $('.location .mapservices').text();
var servicePlace = [{
    title: $('#map').data('cat'),
    position: {
        lat: $('#map').data('lat'),
        lng: $('#map').data('lon')
    },
    icon: $('#map').data('icon'),
    content: '<div class="pin"><img src="' + $('#map').data('image') + '" alt=""><h6>' + $('#map').data('name') + '</h6><p class="place">' + $('#map').data('code') + ', ' + $('#map').data('address') + '</p></div>'
}];
var places, sc;

function initMap() {
    var page = $('.location').attr('id');
    if (page == 'service') {
        places = servicePlace;
        sc = {
            lat: places[0].position.lat,
            lng: places[0].position.lng
        }
    } else {
        if (place.length > 0) {
            places = place;
            sc = {
                lat: places[0].position.lat,
                lng: places[0].position.lng
            }
        } else {
            places = {};
            sc = {
                lat: 46.9615801,
                lng: 7.4726237
            };
        }

    }


    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: sc,
        disableDefaultUI: true,
        styles: [{
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#444444"
            }]
        },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "color": "#f2f2f2"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                    "saturation": -100
                },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#f39200"
                },
                    {
                        "visibility": "on"
                    }
                ]
            }
        ]
    });

    var InfoWindows = new google.maps.InfoWindow({});
    bounds = new google.maps.LatLngBounds()
    places.forEach(function (location) {

        var position = location.position;
        if (position.lat == '' || position.lng == '') {
            return;
        }
        var marker = new google.maps.Marker({
            position: {
                lat: location.position.lat,
                lng: location.position.lng
            },
            map: map,
            icon: icons[location.icon].icon,
            title: location.title
        });

        bounds.extend(marker.position)

        marker.addListener('mouseover', function () {
            InfoWindows.open(map, this);
            InfoWindows.setContent(location.content);
        });
    });

    //map.fitBounds(bounds);
}


// ADMIN select plan
$(document).on("click", '#plan-choose', function () {
    var title = $(this).data("plan-name");
    var id = $(this).data("plan-id");
    $("#ModalCenter #ModalCenterTitle").text(title);
    $("#ModalCenter #input-plan_id").val(id);
    $("#ModalCenter #start_date").val('');
});

$(document).on("click", '#plan-payment-choose', function () {
    var title = $(this).data("plan-name");
    var id = $(this).data("plan-id");
    $("#ModalPayment #ModalTitle").text(title);
    $("#ModalPayment #plan_id").val(id);
    $("#ModalPayment #card_plan_id").val(id);
});


// Callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        // Enable the submit button
        $('#payBtn').removeAttr("disabled");
        // Display the errors on the form
        $(".payment-status").html('<p>' + response.error.message + '</p>');
    } else {
        var form$ = $("#paymentFrm");
        // Get token id
        var token = response.id;
        console.log(token);
        // Insert the token into the form
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        $("#payment_token").val(token);
        // Submit form to the server
        form$.get(0).submit();
    }
}

$(document).ready(function () {
    // On form submit
    $("#paymentFrm").submit(function () {
        // Disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");

        // Create single-use token to charge the user
        Stripe.createToken({
            number: $('#card_number').val(),
            exp_month: $('#card_exp_month').val(),
            exp_year: $('#card_exp_year').val(),
            cvc: $('#card_cvc').val()
        }, stripeResponseHandler);

        // Submit from callback
        return false;
    });

    //	FILE INPIT
    $('.add-file').on('click', function () {
        var file = $(this).parent().find('.file');
        file.trigger('click');
    });
    $(".file").on('change', function () {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });

});


//	BANER DROPDOWN
$('.custom-dropdown .dropdown-menu li span').on('click', function () {
    var choice = $(this).text();
    var code = $(this).parent('li').data('code');
    $('.custom-dropdown>.value-dropdown').val(choice);
    $('[name=filter_category]').val(code);
});


//	FILTER DROPDOWN
$('.filters-list li a').on('click', function (e) {
    if ($(this).attr('href') != '#') {
        return true;
    }
    $(this).siblings().toggle('slow');
});


function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}
