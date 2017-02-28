$(function(){
    $("#phone").intlTelInput({
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
            });
        },
        utilsScript: "assets/build/js/utils.js"
    });

    $('.ham-menu').click(function(){
        $('.slide-menu').toggle("slow");
    })

    // get the country data from the plugin
    var countryData = $.fn.intlTelInput.getCountryData(),
    telInput = $("#phone"),
    addressDropdown = $("#country");

    // init plugin
    telInput.intlTelInput({
        utilsScript: "assets/build/js/utils.js"
    });

    $.each(countryData, function(i, country) {
        addressDropdown.append($("<option></option>").attr("value", country.iso2).text(country.name));
        window.arr = country.name;
    });

    var initialCountry = telInput.intlTelInput("getSelectedCountryData").iso2;
    addressDropdown.val(initialCountry);

    telInput.on("countrychange", function(e, countryData) {
        addressDropdown.val(countryData.iso2);
    });

    addressDropdown.change(function() {
        telInput.intlTelInput("setCountry", $(this).val());
    });

    // tags
    var engine = new Bloodhound({
        local: [{value: 'spain'}, {value: 'venezuela'}],
        datumTokenizer: function(d) {
            return Bloodhound.tokenizers.whitespace(d.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace        
    });    

    engine.initialize();

    $('#top_verticals').tokenfield({
        typeahead: [null, { 
            source: engine.ttAdapter() 
        }]
    });
    
    // sw
    $('#smartWizard').smartWizard({        
        showStepURLhash: false,
        theme: "dots",
        showPreviousButton: false
    });

    var nav = $('#smartWizard ul.nav');
    nav.detach();
    nav.insertBefore($('#smartWizard nav.navbar'));

    $("#smartWizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
        console.log("You are on step "+stepNumber+" now");
        if(stepNumber < 1){
            $('.sw-btn-prev').hide();
            $('.sw-btn-next').text('Next').removeClass('btn-register');
        }else{
            $('.sw-btn-prev').show().text('Skip this').addClass('btn-skip');
            $('.sw-btn-next').text('Register').addClass('btn-register').removeClass('disabled');
        }
    });


    // open close menu
    var slideOpen = 1;
    $('.hamburger').click(function(){          
        $(this).toggleClass('is-active');
        $('.menu ul').toggleClass('show slideInRight');
    })

    // push section-1 as header height
    var hh = $('header').height();
    $('.section-1').css('margin-top',hh);

    // select from ddown
    $('.section-5 .dropdown li a').click(function(){
        $('.section-5 .dropdown-toggle').html($(this).text() + "<span class='caret'></span>");
    })

    // slideeee
    $('.frame').slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 3,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true
            }
            },            
            {
            breakpoint: 620,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }        
        ]
    })

    // phone slider
    $('.phone-slider ul').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false
    })


    var calculate_area = function(){
        var area = $('area').attr('coords').split(',');
        var area_top = parseInt(area[1]);
        var area_left = parseInt(area[0]) + 18;

        var areaWidth = parseInt(area[1]) + parseInt(area[3]);
        var areaHeight_a = parseInt(area[0]) - parseInt(area[1]);
        var areaHeight_b = parseInt(area[7]) - parseInt(area[6]);
        var areaHeight = areaHeight_a + areaHeight_b;

        $('.phone').css({
            'top': area_top + 'px',
            'margin-left': area_left + 'px',
            'width': areaWidth + 'px',
            'height': areaHeight + 'px'
        });
    }

    calculate_area();

    $(window).load(function(){
        calculate_area();
    });

    $('map').imageMapResize();

    // scroll to section
    $('.menu ul li a').click(function(){
        var link_attr = $(this).attr('section');
        var this_a = $(this);
        $('main section').each(function(){
            var section_attr = $(this).attr('scroll');
            $('.menu ul li a').removeClass('active');
            this_a.addClass('active');
            if(link_attr == section_attr){                
                $('html,body').animate({
                    scrollTop: $(this).offset().top
                }, 600)
            }
        })
    })


    // scroll to section-2
    $('.arrow-down').click(function(){
        $('html,body').animate({
            scrollTop: $('.section-2').offset().top
        }, 600)
    })

})