window.onload = function () {
    var datumi = document.getElementsByClassName("vrijeme");
    for (var i = 0; i < datumi.length; i++) {
        var dat = new Date(datumi[i].innerHTML);
        datumi[i].innerHTML = izracunajInterval(dat);
    }

    function izracunajInterval(datum) {
      trenutniDatum=new Date();
        var sekunde = Math.floor((trenutniDatum - datum) / 1000);
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
  }
