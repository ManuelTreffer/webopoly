<tr>
<th scope="row">1</th>
    <td><img src="1emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='1'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>

<td id ="1" ></td>

    </tr>
    <tr>
    <th scope="row">2</th>
    <td><img src="2emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='2'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>
<td id="2"></td>

    </tr>
    <tr>
    <th scope="row">3</th>
    <td><img src="3emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='3'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>
<td id="3"></td>

    </tr>
    <tr>
    <th scope="row">4</th>
    <td><img src="4emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='4'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>
<td id="4"></td>

    </tr>
    <tr>
    <th scope="row">5</th>
    <td><img src="5emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='5'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>
<td id="5"></p></td>

</tr>
<tr>
<th scope="row">6</th>
    <td><img src="6emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='6'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>
<td id="6"></p></td>

</tr>
<tr>
<th scope="row">7</th>
    <td><img src="7emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='7'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>
<td id="7"></td>

    </tr>
    <tr>
    <th scope="row">8</th>
    <td><img src="8emoji.png" width="35px"></td>
<td><?php
    $erg = $db->query("SELECT player FROM webopoly WHERE id='8'")
or die($db->error);

$datensatz = $erg->fetch_assoc();
echo $datensatz["player"];
;
    ?></td>
<td id="8"></td>

    </tr>