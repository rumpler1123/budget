// rekord torlese / AJAX EVENT
const allTableItem = document.querySelectorAll('.allTable');

for (let i = 0; i < allTableItem.length; i++) {
	allTableItem[i].addEventListener('click', function (e) {
		if (e.target.classList.contains('fa-times')) {
			// törlés megerősítése
			var c = confirm("Biztosan törölni akarod?");
			if (c) {

				// xhr
				// Változók felvétele
				var xhr = new XMLHttpRequest();
				var url = 'delete.php';
				const id = "id=" + e.target.parentNode.parentNode.className;

				xhr.open('POST', url, true);

				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

				xhr.onreadystatechange = function () {
					//Call a function when the state changes.
					if (xhr.readyState == 4 && xhr.status == 200) {
						// Listazas 
						minuszLista();
						pluszLista();
						totalMoney();
					}
				}

				xhr.send(id);
				e.preventDefault();
			}
		}
	});
}


/*
További fejlesztések:
ajax funkció rövidítése. 1 fájl 3 megívás.
*/