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


    var zufallszahl = Math.round(Math.random() * ((questions.length-1) - 0)) + 0;

    document.getElementById("demo").innerHTML = questions[zufallszahl];
    console.log(zufallszahl);
}