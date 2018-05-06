
var randomNumber;
function myFunction() {
    randomNumber = Math.round(Math.random() * (1 - 6)) + 6;
    //document.getElementById("randomNumber").innerHTML = randomNumber;
    document.getElementById("dice").src = "img/" + randomNumber + ".png";





}
var relevantPlayer = 1;
//   var playerPosition = [1, 1, 1, 1, 1, 1, 1, 1];


var playerPosition = [];

for(i = 0; i < qtyPlayers; i++) {
    playerPosition[i] = 1;
}






function movePlayer(){

    if((playerPosition[relevantPlayer-1]+randomNumber)>12){

        playerPosition[relevantPlayer-1]=playerPosition[relevantPlayer-1]+randomNumber-12;
    } else {
        playerPosition[relevantPlayer-1]+=randomNumber;
    }

    document.getElementById("cell"+playerPosition[relevantPlayer-1]).appendChild(document.getElementById('player' + relevantPlayer)).innerHTML;


    on();
    getTask();
    highlightPlayer();

    //formel prüfen..
    relevantPlayer = (relevantPlayer + 1) % (qtyPlayers + 1);

    if(relevantPlayer == 0)
    {
        relevantPlayer = 1;
    }


}

function getTask() {

    switch(playerPosition[zugSpieler-1]){
        case 1:
        case 4:
        case 7:
        case 10:
            get_Question();
            break;
        case 2:
        case 5:
        case 8:
        case 11:
            get_Aufgabe();
            break;
        case 3:
        case 6:
        case 9:
        case 12:
            get_Alcohol();
            break;
    }
}




function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}


