//surprise felder werden im fertigen spiel offiziell nicht mehr verwendet!

var surprise = [
    "5 Punkte mehr",
    "3 Felder vor",
    "2 Punkte weniger",
    "5 Felder vor",
    "10 Felder zurück",
    "3 Felder zurück",
    "1 Feld zurück",
    "2 Felder zurück",
    "4 Felder zurück",
    "5 Felder zurück",
    "6 Felder zurück",
    "7 Felder zurück",
    "8 Felder zurück",
    "9 Felder zurück",
    "1 Feld vor",
    "2 Felder vor",
    "4 Felder vor",
    "6 Felder vor",
    "7 Felder vor",
    "8 Felder vor",
    "9 Felder vor",
    "10 Felder vor"


];

function get_Surprise() {


    var zufallszahl = Math.round(Math.random() * ((questions.length-1) - 0)) + 0;

    document.getElementById("demo").innerHTML = questions[zufallszahl];
    console.log(zufallszahl);
}