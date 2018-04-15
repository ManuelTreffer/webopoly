var aufgabe = [
"10 Hampelmänner",
"10 Liegestützen",
    "10 Kniebeugen",
    "Glas mit deinem rechten Nachbar tauschen",
    "Glas mit deinem linken Nachbar tauschen",
    "Hebt fünf Finger und spielt so lange „Ich hab noch nie…“ bis ein Spieler keine Finger mehr oben hat",
    "Mime einen Film nach und deine Mitspieler müssen ihn erraten",
    "Stelle bei Facebook einen Satz rein, der folgende Wörter beinhaltet: …",
    "Alle Gläser werden nach rechts weitergegeben",
    "Alle Gläser werden nach links weitergegeben",
    "Gib deinen rechten Spieler einen Kuss auf die Wange",
    "Gib deinen linken Spieler einen Kuss auf die Wange",
    "Erzähl solange Flachwitze/ Informatikerwitze bis jemand lacht"

];

function get_Aufgabe() {


    var randomNumber = Math.round(Math.random() * (1 - 13)) + 13;

    document.getElementById("demo").innerHTML = aufgabe[randomNumber];
}