/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

 function myFunction() {
	var x = document.getElementById("toggle-menu");
	if (x.style.display === "block") {
	  x.style.display = "none";
	} else {
	  x.style.display = "block";
	}
  }
