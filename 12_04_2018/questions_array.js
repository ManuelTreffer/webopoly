
var questions = ["Wofür hast du das letzte Mal unnötig Geld ausgegeben?",
    "Hast du dir schon mal was gebrochen?",
    "Deine letzte peinliche Situation?",
    "Dein letzter Kuss?",
    "Wer war die letzte Person mit der du geschlafen hast?",
    "Hattest du schon mal einen Blowjob gegeben bzw. bekommen?",
    "Bist du schon mal irgendwo eingebrochen?",
    "Hast du schon mal etwas geklaut?",
    "Wer ist der/die hübscheste im Raum?",
    "Hattest du schon mal einen verrückten Traum mit einem Lektor?",
    "Wann und wo war dein schlimmster Absturz? ",
    "Was ist deine einprägsamste Saufgeschichte?",
    "Warst du schon mal nicht nüchtern in einer Vorlesung?",
    "Bist du schon mal betrunken Auto gefahren?",
    "Hast du schon einmal betrunken was verloren?",
    "Bist du nach dem ausgehen nicht mehr in dein Haus/Wohnung reingekommen",
    "Warst du schon mal in Gegenwart deiner Eltern betrunken?",
    "Hattest du an einem Abend mit mehreren Leuten was gehabt?",
    "Bist du schon mal im Schwimmbad eingebrochen?",
    "Hast du schon mal einen Strafzettel bekommen?",
    "Was war dein schönster Urlaub?",
    "Wann hast du dich das letzte Mal so richtig erschrocken?",
    "Wann hast du das letzte geduscht?",
    "Was war heute deine letzte Mahlzeit und was?",
    "Wie viele Männer und Frauen hast du schon insgesamt geküsst?",
    "Würdest du dir ein Tattoo stechen lassen?",
    "Faltest, rollst oder knüllst du das Klopapier auf der Toilette zusammen?",
    "Wann hattest du das letzte Mal einen Kater?",
    "Wovor hast du am meisten Angst?",
    "Schaust du in die Kloschüssel bevor du dein Geschäft vollziehst?"
];

function get_Question() {


    var randomNumber = Math.round(Math.random() * (1 - 29)) + 29;

    document.getElementById("demo").innerHTML = questions[randomNumber];
}