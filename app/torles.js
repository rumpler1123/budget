// rekord torlese / AJAX EVENT
const allTableItem = document.querySelectorAll('.allTable');

for(let i = 0; i < allTableItem.length; i++){
	allTableItem[i].addEventListener('click', function(e){
		if(e.target.classList.contains('fa-times')){
			// törlés megerősítése
			var c = confirm("Biztosan törölni akarod?");
			if(c){
					
		 // xhr
		 // Változók felvétele
		 var http = new XMLHttpRequest();
		 var url = 'delete.php';
		 const id = "id="+e.target.id;

		http.open('POST', url, true);

		http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

		http.onreadystatechange = function() {
		//Call a function when the state changes.
		    if(http.readyState == 4 && http.status == 200) {

		       minuszLista();
		       pluszLista();
		       totalMoney();
		    }
		}


		http.send(id);
		e.preventDefault();
		}
	}
	});
}


/*
További fejlesztések:
ajax funkció rövidítése. 1 fájl 3 megívás.
*/