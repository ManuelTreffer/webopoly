var aufgabe = [
    "10 Hampelmänner",
    "10 Kniebeugen",
    "10 Liegestützen",
    "10 Kniebeugen",
    "Glas mit deinem rechten Nachbar tauschen",
    "Glas mit deinem linken Nachbar tauschen",
    "Spiel einen Film nach, deine Mitspieler müssen ihn erraten",
    "Alle Gläser werden nach rechts weitergegeben",
    "Alle Gläser werden nach links weitergegeben",
    "Mach einen Handstand",
    "Stimme ein Lied an, alle müssen mitsingen",
    "Tausche Platz mit der Person links neben dir",
    "Tausche Platz mit der Person rechts neben dir "

];

function get_Aufgabe() {

    var zufallszahl = Math.round(Math.random() * ((aufgabe.length-1) - 0)) + 0;

    document.getElementById("demo").innerHTML = aufgabe[zufallszahl];
}


var questions = [
    "Wofür hast du das letzte Mal unnötig Geld ausgegeben?",
    "Hast du dir schon mal was gebrochen?",
    "Deine letzte peinliche Situation?",
    "Bist du schon mal irgendwo eingebrochen?",
    "Hast du schon mal etwas geklaut?",
    "Hast du schon mal einen Strafzettel bekommen?",
    "Was war dein schönster Urlaub?",
    "Wann hast du dich das letzte Mal so richtig erschrocken?",
    "Wann hast du das letzte geduscht?",
    "Was war heute deine letzte Mahlzeit und was?",
    "Würdest du dir ein Tattoo stechen lassen?",
    "Wovor hast du am meisten Angst?",
    "Schaust du in die Kloschüssel bevor du dein Geschäft vollziehst?"

];

function get_Question() {


    var zufallszahl = Math.round(Math.random() * ((questions.length-1) - 0)) + 0;

    document.getElementById("demo").innerHTML = questions[zufallszahl];
}

var alcohol = [
    "Trinke 3 Schlücke",
    "Verteile 6 Schlücke",
    "Trinke dein Glas aus",
    "Alle Spieler mit einem „e“ im Namen trinken 2 Schlücke",
    "Du darfst so viele Schlücke verteilen, wie du Onkel hast",
    "Du darfst so viele Schlücke verteilen, wie du Tanten hast",
    "Alle die heute auf Facebook waren, trinken 3 Schlücke",
    "Alle die heute auf WhatsApp waren, trinken 3 Schlücke",
    "Der/Die größte im Raum trinkt 2 Schlücke",
    "Der/Die kleinste im Raum trinkt 3 Schlücke"



];

function get_Alcohol() {


    var zufallszahl = Math.round(Math.random() * ((alcohol.length-1) - 0)) + 0;

    document.getElementById("demo").innerHTML = alcohol[zufallszahl];
}



