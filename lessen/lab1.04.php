<h3>php lab 1.4</h3>
<?php
    $naam         = 'karim';
    $nederlands   = '8.5';
    $engels       = '7.7';
    $rekenen      = '6.7';
    $programmeren = '8.5';
    $databases    = '9.4';
    $naam2        = 'sophie';
    $nederlands2  = '8.9';
    $engels2      = '8.7';
    $rekenen2     = '9.7';
    $programmeren2= '9.5';
    $databases2   = '9.2';
    $gemiddeld    = ($nederlands + $engels + $rekenen + $programmeren + $databases)/5;
    $gemiddeld2   = ($nederlands2 + $engels2 + $rekenen2 + $programmeren2 + $databases2)/5;
    $groepG       = ($gemiddeld + $gemiddeld2)/2;
    echo "<table border='1'>
        <caption>
            <strong>Rapport</strong>
        </caption>
        <thead>
            <tr>
                <th>Naam</th><th>Nederlands</th><th>Engels</th>
                <th>Reknen</th><th>Programmeren</th>
                <th>databases</th>
                <th>Gemiddeld</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$naam</td><td>$nederlands</td><td>$engels</td>
                <td>$rekenen</td><td>$programmeren</td>
                <td>$databases</td><td>$gemiddeld</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>$naam2</td><td>$nederlands2</td><td>$engels2</td>
                <td>$rekenen2</td><td>$programmeren2</td>
                <td>$databases2</td><td>$gemiddeld2</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan='6'>Groep gemiddeld</td><td>$groepG</td>
            </tr>
        </tfoot>
    </table>";
