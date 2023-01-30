$( document ).ready(function() {
    CheckForHighlight();
});

function CheckForHighlight(){
    href = window.location.href;
    values = href.split('?')[1]; // Remove the url
    highlight = values.split('=')[1]; // Grab the second parmeter
    $('#'+highlight).addClass('highlightedElem');
    //highlightedElemclass has box shadow or border
}