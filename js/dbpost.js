const dbbutton = document.getElementById("posttodb");
dbbutton.addEventListener("click", sendResult);

function sendResult() {
    let game = {
      "userid": 1,
      "gamepgn": importmoves,
  }

  if (importmoves !== '') {
      fetch('controllers/analysis.php', {
          method: 'POST',
          headers: {
              'Content-type': 'application/json'
          },
          body: JSON.stringify(game)
      }).then(function (response) {
          return response.text();
      }).then(function (data) {
          console.log(data);
      })
  }
}
