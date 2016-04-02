function ValidirajIme(val)
{
  var naziv = document.getElementById("ime");
  var tekst = document.getElementById("ime").value;
  var reg = /^[A-Z][a-z]+$/igm;
  if(!(reg.test(tekst)))
  {
    naziv.style.backgroundColor="#FF9494";
  }
  else {
    naziv.style.backgroundColor="white";
  }
}

function Validiraj()
{
  var em=document.getElementById("email").value;
  var ad=document.getElementById("adresa").value;
  if(em != "" && ad != "") return false;
  if(em != "" && ad == "")
  {
    em.required=false;
    return true;
  }
  if(em == "" && ad != "")
  {
    ad.required=false;
    return true;
  }
  else return true;
}

  function ValidirajPrezime(val)
{
  var naziv=document.getElementById("prezime");
  if(val.checkValidity()) naziv.required=false;
  else naziv.required=true;
}

function ValidirajMail(val)
{
  Validiraj();
  var naziv=document.getElementById("mail");
  if(val.checkValidity()) naziv.required=false;
  else naziv.required=true;
}

function ValidirajAdresu(val)
{
  Validiraj();
  var naziv=document.getElementById("adresa");
  if(val.checkValidity()) naziv.required=false;
  else naziv.required=true;
}
