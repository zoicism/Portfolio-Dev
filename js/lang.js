if(window.location.search.substr(1)=="lang=tur") {
    $('.eng').css('display','none');
    $('.tur').css('display','flex');
    $('.engl').css('display','none');
    $('.turk').css('display','block');
    $('.lang').text('TR');
    
    $('a').each(function() {
            var aHref = $(this).attr('href');
            if(aHref!=undefined) {
                $(this).attr('href', aHref+'?lang=tur');
                //console.log(aHref);
            }
        });
}
$('.lang').click(function() {
    var currentLang = $('.lang').text();
    console.log(currentLang);
    if(currentLang=='ENEN') {
        $('.eng').css('display','none');
        $('.tur').css('display','flex');
        $('.engl').css('display','none');
        $('.turk').css('display','block');
        $('.lang').text('TR');
        
        $('a').each(function() {
            var aHref = $(this).attr('href');
            if(aHref!=undefined && aHref!='#projects-page') {
                if(aHref!='#projects-page') {
                    $(this).attr('href', aHref+'?lang=tur');
                    console.log(aHref);
                }
            }
        });
        
    } else {
        $('.eng').css('display','flex');
        $('.tur').css('display','none');
        $('.engl').css('display','block');
        $('.turk').css('display','none');
        $('.lang').text('EN');
        
        $('a').each(function() {
            var aHref = $(this).attr('href');
            if(aHref!=undefined) {
                aHref = aHref.replace('?lang=tur', '');
                $(this).attr('href', aHref);
                //console.log(aHref);
            }
        });
    }
});