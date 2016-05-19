function dajPodatkeZaKodDrzave(kodDrzave, callback, broj, poruka)
{
	
	var xmlhttp = new XMLHttpRequest();
        
		xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				return callback(xmlhttp.responseText, broj, poruka);
            }
        };
        xmlhttp.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + kodDrzave, true);
        xmlhttp.send();
	
}
function uporediPozivniTelIPozivniZaKodDrzave(broj, drzava, poruka)
{
	if(broj != drzava) 
	{
		poruka.innerHTML = "Kod drzave i telefon se ne slažu! Telefon mora biti u formatu pozivni_broj/brojTelefona!";
		return false;
	}
	else{
		poruka.innerHTML = "";
		return true;
	}
}
function ajaxUpitZavrsen(podaci, broj, poruka)
{
	var formatirani = JSON.parse(podaci);
	
	if(formatirani[0])
		return uporediPozivniTelIPozivniZaKodDrzave(broj, formatirani[0]["callingCodes"], poruka)
	else
		return uporediPozivniTelIPozivniZaKodDrzave(broj, "", poruka)
	
}