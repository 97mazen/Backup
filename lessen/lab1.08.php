<?php
echo "<h1>Inschrijfformulier</h1>";
echo "<form action=\"lab08.verwerken.php\" method=\"post\">
        <table  border= '1'> 
            <tr>
                <td>Acternaam </td>
                <td><input type='text' name='Acternaam'></td>
            </tr>
            <tr><td>Voornaam </td>
                <td><input type='text' name='voornaam'></td>
            </tr>
            <tr>
                <td>Straat </td>
                <td><input type='text' name='straat'></td>
            </tr>
            <tr>
                <td>Postcode</td>
                <td><input type='text' name='postcode'></td>
            </tr>
            <tr>
                <td>Plaats </td>
                <td><input type='text' name='plaats'></td>
            </tr>
            <tr>
                <td>E-mailadres </td>
                <td><input type='text' name='email'></td>
            </tr>
        </table>
        <h3>Keies een opleiding :</h3>
            <input type=\"radio\" name=\"study\" value=\"ICT\">ICT<br>
            <input type=\"radio\" name=\"study\" value=\"Engels\" checked>Engels<br>
            <input type=\"radio\" name=\"study\" value=\"Techniek\" checked>Techniek<br>
            <input type=\"radio\" name=\"study\" value=\"Nederlands\" checked>Nederlands<br>
            <input type=\"submit\" value=\"submit\" name='submit'>
            <input type=\"reset\" value=\"Reset\">
    </form>";
