var j = 1;
function highlightPlayer() {


    document.getElementById("playerEmoji").src = j + "emoji.png";
    j++;

    if (j == 9) {
        j = 1;
    }



}

