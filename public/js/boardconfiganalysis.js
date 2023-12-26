var board = null
var game = new Chess()
var $status = $('#status')
var $fen = $('#fen')
var $pgn = $('#pgn')
board = Chessboard('analysisboard', config)
updateStatusAll()

function updateStatusAll() {
  var status = ''

  var moveColor = 'White'
  if (game.turn() === 'b') {
    moveColor = 'Black'
  }

  // checkmate?
  if (game.in_checkmate()) {
    status = 'Game over, ' + moveColor + ' is in checkmate.'
  }

  // draw?
  else if (game.in_draw()) {
    status = 'Game over, drawn position'
  }

  // game still on
  else {
    status = moveColor + ' to move'

    // check?
    if (game.in_check()) {
      status += ', ' + moveColor + ' is in check'
    }
  }

  board.position(game.fen());
  $status.html(status)
  $fen.html(game.fen())
  $pgn.html(game.pgn())
}

function updateStatusNoPGN(status) {
  board.position(game.fen());
  $status.html(status)
  $fen.html(game.fen())
}

var config = {
  position: 'start',
}

let scrollPosition = 0;
let copyPGN = '';
let importmoves = [];

const importField = document.getElementById("importpgn");
const importButton = document.getElementById("importpgnsubmit");

importButton.addEventListener("click", function () {
  game.load_pgn(importField.value);
  copyPGN = importField.value;
  importmoves = copyPGN.replace(/\d+\.\s+/g, '').split(/\s+/).filter(move => move.trim() !== '');
  scrollPosition = importmoves.length;

  updateStatusAll();
  // importField.value = '';

})

function nextMove() {
  let splitPGN = copyPGN;
  const moves = splitPGN.replace(/\d+\.\s+/g, '').split(/\s+/).filter(move => move.trim() !== '');
  const firstmoves = moves.slice(0, scrollPosition);
  const formattedMoves = firstmoves.map((move, index) => `${index + 1}. ${move}`);
  const formattedString = formattedMoves.join(' ');
  game.load_pgn(formattedString);
  updateStatusNoPGN();
}

const leftscroll = document.getElementById("leftscroll");
const rightscroll = document.getElementById("rightscroll");

leftscroll.addEventListener('click', function () {

  if (scrollPosition > 0) {
    scrollPosition--;
    nextMove();
  };

});

rightscroll.addEventListener('click', function () {

  if (scrollPosition < importmoves.length) {
    scrollPosition++;
    nextMove();
  }

  console.log(`Game Move Count: ${scrollPosition}`);
});

document.addEventListener('keydown', function (event) {
  if (event.key === 'ArrowLeft') {
    if (scrollPosition > 0) {
      scrollPosition--;
      nextMove();
    };

  } else if (event.key === 'ArrowRight') {
    if (scrollPosition < importmoves.length) {
      scrollPosition++;
      nextMove();
    }

  }

  console.log(`Game Move Count: ${scrollPosition}`);
});





const dbbutton = document.getElementById("posttodb");
dbbutton.addEventListener("click", sendResult);

function sendResult() {
  let game = {
    "userid": 1,
    "gamepgn": copyPGN,
  }

  if (importmoves !== '') {
    fetch('/analysis', {
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
