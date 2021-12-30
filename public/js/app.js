function openNav() {
    document.getElementById("sidebar").style.width = "250px";
    document.getElementById("app").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("app").style.marginLeft = "0";
}

jQuery(function() {
    $('#theme-select').on('change', function() {
       document.forms['theme-form'].submit();
    });
});