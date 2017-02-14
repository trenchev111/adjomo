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
    });

    var initialCountry = telInput.intlTelInput("getSelectedCountryData").iso2;
    addressDropdown.val(initialCountry);

    telInput.on("countrychange", function(e, countryData) {
        addressDropdown.val(countryData.iso2);
    });

    addressDropdown.change(function() {
        telInput.intlTelInput("setCountry", $(this).val());
    });
})