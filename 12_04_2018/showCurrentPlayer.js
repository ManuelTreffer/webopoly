var j = 1;
function highlightPlayer() {


    document.getElementById("playerEmoji").src = j + "emoji.png";
    j++;

    if (j == 8) {
        j = 1;
    }



}


/*
function highlightPlayer() {


    var randomNumber = Math.round(Math.random() * (1 - 6)) + 6;

        document.getElementById("playerEmoji").src = randomNumber + "emoji.png";


}*/