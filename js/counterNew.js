var currentPlayer = 1;

var score = [0, 0, 0, 0, 0, 0, 0, 0];


function countScore() {
    switch (currentPlayer) {
        case 1: score[0]++;
            break;
        case 2: score[1]++;
            break;
        case 3: score[2]++;
            break;
        case 4: score[3]++;
            break;
        case 5: score[4]++;
            break;
        case 6: score[5]++;
            break;
        case 7: score[6]++;
            break;
        case 8: score[7]++;
            break;
    }

    // uebergeben von currentPlayer und score des players

    $.ajax({
        'url': 'game',
        'method': 'post',
        'data': {'score': score[currentPlayer-1], 'userid': currentPlayer, 'action': 'saveScore'},
        'success': function(receivedData) {
            //im erfolgsfall
            if(receivedData.result) {
                //console.log('hat geklappt');
            } else {
                //console.log('hat nicht geklappt');
            }
        }
    });





    document.getElementById(currentPlayer.toString()).innerHTML = score[currentPlayer-1].toString();


    if (currentPlayer == qtyPlayers) {
        currentPlayer = 1;
    } else {
        currentPlayer++;
    }
}

function nextPlayer(){
    switch (currentPlayer) {
        case 1: score[0]+=0;
            break;
        case 2: score[1]+=0;
            break;
        case 3: score[2]+=0;
            break;
        case 4: score[3]+=0;
            break;
        case 5: score[4]+=0;
            break;
        case 6: score[5]+=0;
            break;
        case 7: score[6]+=0;
            break;
        case 8: score[7]+=0;
            break;
    }

    document.getElementById(currentPlayer.toString()).innerHTML = score[currentPlayer-1].toString();


    if (currentPlayer == qtyPlayers) {
        currentPlayer = 1;
    } else {
        currentPlayer++;
    }
}