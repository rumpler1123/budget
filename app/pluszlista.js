function pluszLista() {
	const xhr = new XMLHttpRequest();

	xhr.open("GET", "listplus.php", true);

	xhr.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			// Változok felvétele
			var sum = 0;
			var data = JSON.parse(this.responseText);
			var html = "";


			if (data.length == 0) {
				document.querySelector(".inTableDiv").style.visibility = "hidden";
			} else {

				for (var i = 0; i < data.length; i++) {
					var id = data[i].id;
					var item = data[i].kiadas_neve;
					var money = parseInt(data[i].kiadas_osszege);

					sum = sum + money;

					html += `<tr class="${id}">
				<td id="tdItem-${id}">${item}</td>
				<td id="tdMoney-${id}">${numberWithCommas(money)} Ft .</td>
				<td>
				<i class="item-edit fas fa-edit pr-1 text-warning"></i>

				<i class="item-delete fas fa-times text-danger" ></i>
				</td>
				</tr>`
				}
				document.querySelector(".inTableDiv").style.visibility = "visible";
				document.getElementById("moneyPlusTable").innerHTML = html;
				document.getElementById("totalPlusMoney").innerHTML = numberWithCommas(sum);
			}
		}
	}

	xhr.send();
}

pluszLista();

function numberWithCommas(x) {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}