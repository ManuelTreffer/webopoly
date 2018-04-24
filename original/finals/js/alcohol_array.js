var alcohol = [
    "Trinke 3 Schlücke",
    "Verteile 6 Schlücke",
    "Trinke dein Glas aus",
    "Alle Spieler mit einem „e“ im Namen trinken 2 Schlücke",
    "Du darfst so viele Schlücke verteilen, wie du Onkel hast",
    "Du darfst so viele Schlücke verteilen, wie du Tanten hast",
    "Trinke zwei Schlücke, wenn du dich schon einmal in einer Schlange vorgedrängelt hast, ansonsten verteile sie",
    "Mach einen anderen Spieler nach, wer es zuerst herausfindet, wer es ist, verteilt 3 Schlücke",
    "Alle die heute auf Facebook waren, trinken 3 Schlücke",
    "Alle die heute auf WhatsApp waren, trinken 3 Schlücke",
    "Der/Die größte im Raum trinkt 2 Schlücke",
    "Der/Die kleinste im Raum trinkt 3 Schlücke"



];

function get_Alcohol() {


    var zufallszahl = Math.round(Math.random() * ((questions.length-1) - 0)) + 0;

    document.getElementById("demo").innerHTML = questions[zufallszahl];
    console.log(zufallszahl);
}