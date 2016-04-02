var brojDozvoljenihSekundi=0;
var datumi = document.getElementsByClassName("vrijeme");
var zaFilter = document.getElementsByClassName("pomvrijeme");
window.onload = function () {
  for (var i = 0; i < datumi.length; i++) {
    var dat = new Date(datumi[i].innerHTML);
  /*  var fil = new Date(zaFilter[i].innerHTML);*/
    datumi[i].innerHTML = izracunajInterval(dat);
  /*  zaFilter[i].innerHTML = izracunajBrojSekundi(fil);*/
  }
}

function izracunajInterval(datum) {
  trenutniDatum=new Date();
  var sekunde = Math.floor((trenutniDatum - datum) / 1000);
  zaFilter=trenutniDatum-datum;
  interval = Math.floor(sekunde / 2592000);
  if (interval >= 1) {
    return datum;
  }

  interval = Math.floor(sekunde / 86400);

  if (interval%10 == 1) {
    return 'Novost je objavljena prije ' + interval + " dan";
  }
  else if (interval%10 >= 2 && interval%10 < 7) {
    return 'Novost je objavljena prije ' + interval + " dana";
  }
  else if (interval >= 7 && interval < 14) {
    return 'Novost je objavljena prije 1 sedmicu';
  }
  else if (interval >= 14 && interval < 21) {
    return 'Novost je objavljena prije 2 sedmice';
  }
  else if (interval >= 22 && interval < 28) {
    return 'Novost je objavljena prije 3 sedmice';
  }
  else if (interval > 0 && interval <= 31) {
    return 'Novost je objavljena prije 4 sedmice';
  }

  interval = Math.floor(sekunde / 3600);

  if (interval%10 == 1) {
    return 'Novost je objavljena prije ' + interval + " sat";
  }
  else if (interval%10 >= 2 && interval%10 <= 4) {
    return 'Novost je objavljena prije ' + interval + " sata";
  }
  else if (interval > 4) {
    return interval + " sati";
  }

  interval = Math.floor(sekunde / 60);

  if (interval%10 == 1) {
    return 'Novost je objavljena prije ' + interval + " minutu";
  }
  else if (interval%10 >= 2 && interval%10 <= 4) {
    return 'Novost je objavljena prije ' + interval + " minute";
  }
  else if (interval > 4) {
    return 'Novost je objavljena prije ' + interval + " minuta";
  }

  interval = Math.floor(sekunde);

  if (interval == 1) {
    return 'Novost je objavljena prije ' + interval + " sekundu";
  }
  else if (interval >= 2 && interval <= 4) {
    return 'Novost je objavljena prije ' + interval + " sekunde";
  }
  else  {
    return 'Novost je objavljena prije ' + interval + " sekundi";
  }
}
/*Filtriranje novosti */



function izracunajBrojSekundi(datum)
{
  trenutniDatum=new Date();
  return brojSekundi =((trenutniDatum - datum));
}

function raspon(datum) {
    var proteklo = Math.floor((new Date() - datum) / 1000);
    if (proteklo >= 2592000 ) { return -1; }

    var interval = Math.floor(proteklo / 86400);
    if (interval <= 1) {return 3;}
	if (interval >= 2 && interval < 7) {return 2;}
	if (interval >= 7 && interval <= 31) {return 1;}
}

function Izdvoji() {

  /*var x = document.getElementById("izdvoji").value;

  if (x=="sedmicne"){
    brojDozvoljenihSekundi=604800;
  }
  else if (x=="danasnje"){
    brojDozvoljenihSekundi=86400;
  }
  else if (x=="mjesecne"){
    brojDozvoljenihSekundi=2592000;
  }
  console.log(x);
  console.log(brojDozvoljenihSekundi);*/

  var x = document.getElementById("izdvoji").value;
    var Novosti = document.getElementsByClassName("Novost");
    var datumi = document.getElementsByClassName("pomvrijeme");

    if ( x == "danasnje")
	{
		for (var i = 0; i < datumi.length; i++) {
			var d = new Date(datumi[i].innerHTML);
			if(raspon(d) != 3) Novosti[i].style.display = 'none';
			else Novosti[i].style.display = 'inline-block';
		}
	}

	if ( x == "sedmicne")
	{
		for (var i = 0; i < datumi.length; i++) {
			var d = new Date(datumi[i].innerHTML);
			if(raspon(d) != 2 && raspon(d) != 3) Novosti[i].style.display = 'none';
			else Novosti[i].style.display = 'inline-block';
		}
	}

	if ( x == "mjesecne")
	{
		for (var i = 0; i < datumi.length; i++) {
			var d = new Date(datumi[i].innerHTML);
			if(raspon(d) == -1) Novosti[i].style.display = 'none';
			else Novosti[i].style.display = 'inline-block';
		}
	}

	if( x == "sve")
	{
		for (var i = 0; i < datumi.length; i++) {
			var d = new Date(datumi[i].innerHTML);
			Novosti[i].style.display = 'inline-block';
		}
	}
  }
