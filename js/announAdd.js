$(document).ready( function() {
$('.imgInp').bind('change', function() {
  //this.files[0].size gets the size of your file.
  if(this.files[0].size > 2097152){
  	alert("Plik jest za duży, wynosi " + Math.round(this.files[0].size/1024/1024 * 100)/100 + "MB a powinien być mniejszy niż 2MB");
  	this.value = "";
  }
  else{
  	var num = $(this).prop("name").slice(-1);
    //$(document.getElementById("img-upload" + num)).removeAttr("src").attr("src",$(this).val() + "?timestamp=" + new Date().getTime());
    var reader = new FileReader();
    reader.onload = function (e) {
      $(document.getElementById("img-upload" + num)).removeAttr("src").attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
  }
});
});