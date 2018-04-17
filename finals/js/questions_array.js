
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
    "Faltest, rollst oder knüllst du das Klopapier auf der Toilette zusammen?",
    "Wovor hast du am meisten Angst?",
    "Schaust du in die Kloschüssel bevor du dein Geschäft vollziehst?"

];

function get_Question() {


    var randomNumber = Math.round(Math.random() * (1 - 15)) + 15;

    document.getElementById("demo").innerHTML = questions[randomNumber];
}