
function exchange(bedrag, converteren) {
    euro_dollarkoers = 1.36;
    dollar_eurokoers = 0.74;
    euro_roebelkoers = 48.40;
    roebel_eurokoers = 0.02;


    if (converteren === 'dollar/euro') {
        document.getElementById('resultaat').innerHTML = bedrag + 'dollar voor ' + (bedrag * dollar_eurokoers) + ' euro';
    }
    else if (converteren === 'euro/dollar'){
        document.getElementById('resultaat').innerHTML = bedrag + 'euro voor ' + (bedrag * euro_dollarkoers) + ' dollar';
    }

    else if (converteren === 'ruble/euro'){
        document.getElementById('resultaat').innerHTML = bedrag + 'euro voor ' + (bedrag * euro_roebelkoers) + ' roebel';
    }

    else if (converteren === 'euro/ruble'){
        document.getElementById('resultaat').innerHTML = bedrag + 'roebel voor ' + (bedrag * roebel_eurokoers) + ' euro';
    }
};
