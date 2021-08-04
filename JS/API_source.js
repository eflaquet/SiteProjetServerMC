function onelinePlayer() {
    var objDiv = document.getElementById("online_players");
    fetch("./API/API_Players.php").then((resp) => resp.json()).then(function(connect) {
        console.log(connect);

        objDiv.innerHTML = connect["result"];
        objDiv.scrollTop = objDiv.scrollHeight;


    }).catch(function(error) {
        console.log(error);
    });

}
setInterval(onelinePlayer, 3000);