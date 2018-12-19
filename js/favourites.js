function AddToFavourites(id){
	// old: window.location = "php/add_to_favourites.php?action=add&id=" + id;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("favBtn").src = 'style/image/ulubione.png';
		}
	};
	xhttp.open("GET", "php/add_to_favourites.php?id=" + id, true);
	xhttp.send();
	
}
