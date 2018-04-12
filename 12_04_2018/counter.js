var pointcounter = 0;

function addPoints() {
    document.getElementsById("points").innerHTML = ++pointcounter;
}

document.write(pointcounter);