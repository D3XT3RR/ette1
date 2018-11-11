$(document).ready( function() {
$('.imgInp').bind('change', function() {

  //this.files[0].size gets the size of your file.
  alert(this.files[0].size);

});
});