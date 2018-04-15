var alcohol = [
    "Trinke 3 Schlücke",
    "Verteile 6 Schlücke",
    "Trinke dein Glas aus",
    "Alle Spieler mit einem „e“ im Namen trinken 2 Schlücke",
    "Alle Mädls trinken einen Schluck, prost Mädls!",
    "Alle Jungs trinken zwei Schlücke, prost Jungs!",
    "Alle Spieler mit einem „a“ im Namen trinken 1 Schluck",
    "Alle, die schon einmal ein Fahrrad geklaut haben, trinken 3 Schlücke, ihr Idioten",
    "Du darfst so viele Schlücke verteilen, wie du Onkel hast",
    "Du darfst so viele Schlücke verteilen, wie du Tanten hast",
    "Trinke zwei Schlücke, wenn du dich schon einmal in einer Schlange vorgedrängelt hast, ansonsten verteile sie",
    "Globe Trotter aufgepasst: Trink vier Schlücke, wenn ihr schon einmal mit einem/r Ausländer/in geschlafen habt",
    "Der Leichteste in der Runde trinkt 3 Schlücke, du Lauch",
    "Mach einen anderen Spieler nach, wer es zuerst herausfindet, wer es ist, verteilt 3 Schlücke",
    "Alle die heute auf Facebook waren, trinken 3 Schlücke",
    "Alle die heute auf Whats App waren, trinken 3 Schlücke",
    "Trinkt 4 Schlücke, wenn du schon einmal von der Polizei angehalten wurdest",
    "Verteile 4 Schlücke, wenn du keinen Sex vor deinem 16. Geburtstag hattest",
    "Der/Die größte im Raum trinkt 2 Schlücke",
    "Der/Die kleinste im Raum trinkt 3 Schlücke"


];

function get_Alcohol() {


    var randomNumber = Math.round(Math.random() * (1 - 21)) + 21;

    document.getElementById("demo").innerHTML = alcohol[randomNumber];
}