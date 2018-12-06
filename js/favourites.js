function AddToFavourites(id){
	window.location = "php/add_to_favourites.php?action=add&id=" + id;
}

function RemoveFromFavourites(id){
	window.location = "php/add_to_favourites.php?action=remove&id=" + id;
}
