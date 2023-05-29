function verifyCheckbox() {
	var checkboxgroup = document.getElementById('typeCheckbox').getElementsByTagName("input");
	var limit = 3;
	for (var i = 0; i < checkboxgroup.length; i++) {
		checkboxgroup[i].onclick = function() {
			var checkedcount = 0;
				for (var i = 0; i < checkboxgroup.length; i++) {
				checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
			}
			if (checkedcount > limit) {				
				alert("You can select maximum of " + limit + " checkbox.");
				this.checked = false;
			}
			if (checkedcount == 0){
				alert("You need to select at least one checkbox");
			}
		}
	}
}

function navigateToList(){	
	window.location.href = "list.php";
}