function afmelden() {
    let antwoord = confirm('wilt u zich afmelden?');
    if (antwoord == true){
        alert('u wordt afgemeld!!');
        window.close();
    }
}

function begroeten() {
    let time = new Date().getHours();
    if (time >=0 && time <= 11){
        document.write('<br>Geodemorgen!');
    }
    else if (time >= 12 && time <= 17) {
        document.write('<br>goedemiddag!');
    }
    else {
        document.write('<br>goedeavond!');
    }
}

function dollarkoers() {
    return (1.36);
}

function eurokoers() {
    return (0.74);
}

function dollar_naar_euro(inputdollars) {
    return (inputdollars * eurokoers());
}

function wissel(bedrag, valuta) {
    if (valuta == 'euro'){
        return (bedrag * dollarkoers());
    }else if (valuta == 'dollar') {
        return  (bedrag * eurokoers());
    }
}