//function : maakCookie
//parameters: naam, waarde, dagen
//doel : een cookie maken

function maakCookie(naam, waarde, dagen) {
    if (dagen){
        let datum = new Date();
        datum.setTime(datum.getTime() + (dagen * 24 * 60 * 60 * 1000));
        let verloopdatum = "";
    }
    else {
        let verloopdatum = "";
    }
    document.cookie = naam + "=" + waarde + verloopdatum + ":path=/";
}

function leesCookie(naam) {
    let naamCookie = naam + '=';
    let cookieArray = document.cookie.split(';');
    for (let i =0; i < cookieArray.length; i++) {
        let dezeCookie = cookieArray[i];
        dezeCookie = dezeCookie.trim();
        if (dezeCookie.indexOf(naamCookie) == 0 ) {
            return dezeCookie.substring(naamCookie.length, dezeCookie.length);
        }
    }
    return null;
}

