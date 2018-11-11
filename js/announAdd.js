$(document).ready( function() {
$('.imgInp').bind('change', function() {

  //this.files[0].size gets the size of your file.
  if(this.files[0].size > 2097152){
  	alert("Plik jest za duży, wynosi " + Math.round(this.files[0].size/1024/1024 * 100)/100 + "MB a powinien być mniejszy niż 2MB");
  	this.value = "";
  }
  

});
});