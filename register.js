function pokazKierunki(){
	var wydzial = document.getElementById("wydzial").value;
	var kierunki = document.getElementById("kierunek");
	var html = `<select id="kierunekSelect" name="kierunekSelect"required>
				<option value="" disabled selected > wybierz kierunek </option>`;
	if ( wydzial == "wybierz_wydzial")
	{
		kierunki.innerHTML = "";
		return
	}
	else if (wydzial == "elektryczny"){
		html +=		   `<option value= \"informatyka\"> Informatyka </option>
						<option value= \"autoirobo\"> Automatyka i Robotyka</option>
						<option value= \"elektro\"> Elektrotechnika</option>`;
	}	
	else if(wydzial == "mechatroniki"){
		html += `<option value= \"autoirobo\"> Automatyka i Robotyka </option>
						<option value= \"mechatronika\"> Mechatronika</option>`;
	}
	else if(wydzial == "elektroniki"){
		html += `<option value= \"elektro\"> Elektrotechnika </option>
						<option value= \"tele\"> Telekomunikacja</option>`;
	}
	
	html += `</select>`;
	kierunki.innerHTML = html;
}