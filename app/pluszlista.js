function pluszLista(){
	const xhr = new XMLHttpRequest();

	xhr.open("GET","listplus.php",true);

	xhr.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			// Változok felvétele
			var sum = 0;
			var data = JSON.parse(this.responseText);
			var html = "";
			console.log(this.responseText);
			if(data.length == 0){
				document.querySelector(".inTableDiv").style.visibility = "hidden";
			} else {

			for(var i = 0; i < data.length; i++){
				var id = data[i].id;
				var item = data[i].kiadas_neve;
				var money = parseInt(data[i].kiadas_osszege);

				sum = sum + money;

				html += `<tr>
				<td>${item}</td>
				<td>${numberWithCommas(money)} Ft .</td>
				<td><i class="item-delete fas fa-times text-danger" id="${id}"></i></td>
				</tr>`
			}
			document.querySelector(".inTableDiv").style.visibility = "visible";
			document.getElementById("moneyPlusTable").innerHTML  = html;
			document.getElementById("totalPlusMoney").innerHTML  = numberWithCommas(sum);
			}
		}
	}

	xhr.send();
}

pluszLista();

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}