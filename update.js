// rekord torlese / AJAX EVENT
const tableItems = document.querySelectorAll('.allTable');

for (let i = 0; i < tableItems.length; i++) {
	tableItems[i].addEventListener('click', function (e) {
		if (e.target.classList.contains('fa-edit')) {

			// Gombok átállítása
			var updateBtn = document.getElementById('updateBtn');
			var backBtn = document.getElementById('backBtn');
			var plusBtn = document.getElementById('plusBtn');
			var minusBtn = document.getElementById('minusBtn');

			// click után
			plusBtn.style.display = 'none';
			minusBtn.style.display = 'none';
			updateBtn.style.display = 'inline';
			backBtn.style.display = 'inline';

			// valtozok
			var id = e.target.parentNode.parentNode.className;
			sessionStorage.setItem('rowId', id);
			var item = document.getElementById("tdItem-" + id).innerHTML;
			var updateMoney = document.getElementById("tdMoney-" + id).innerHTML;

			// szokoz kivetele a szambol
			var trimUpdateMoney = updateMoney.replace(/ /g, '');

			// szamma alakitas
			var money = parseInt(trimUpdateMoney, 10);

			// tetel es penz behelyezese az input mezobe
			var newItem = document.getElementById('item').value = item;
			var newMoney = document.getElementById('money').value = money;
		}
		e.preventDefault();
	});
}


// Input elemek torlese
function inputDelete() {
	document.getElementById("item").value = '';
	document.getElementById("money").value = '';
}



// UPDATE BUTTON
document.getElementById("updateBtn").addEventListener('click', updateData);
function updateData(e) {

	var updateItem = document.getElementById('item').value;
	var updateMoney = document.getElementById('money').value;
	var id = sessionStorage.getItem('rowId');

	// változók ajax lekérdezéshez
	var phpid = 'id=' + id + '&item=' + updateItem + '&money=' + updateMoney;
	var url = 'select_update_item.php';
	const xhr = new XMLHttpRequest();
	// ajax kapcsolat felépítése




	xhr.open("POST", url, true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			
			inputDelete();
			minuszLista();
			pluszLista();
			totalMoney();

			plusBtn.style.display = 'inline';
			minusBtn.style.display = 'inline';
			updateBtn.style.display = 'none';
			backBtn.style.display = 'none';
		}
	}
	xhr.send(phpid);
	e.preventDefault();
}

// BACK BUTTON
document.querySelector("#backBtn").addEventListener('click', goBack)
function goBack(e) {
	plusBtn.style.display = 'inline';
	minusBtn.style.display = 'inline';
	updateBtn.style.display = 'none';
	backBtn.style.display = 'none';
	inputDelete();
	e.preventDefault();
}
