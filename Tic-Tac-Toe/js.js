
    //on page load -> generate game board;
window.onload = function(){
    console.log("Page Loaded")
    setRandomTileOrder(12);
    setTiles();
}

//global variable

let i = 0;
let clicks;
let timeScore;

/*start button initiates game and starts counter
initiates game start on button press*/
let startButton = document.getElementById("startGame")
startButton.addEventListener("click", startGame);

function startGame() {
    tiles.forEach(tile => tile.addEventListener("click", displayTile));
    resetTiles();
    startButton.disabled = true;
     console.log(randomOrderArray);
    startTimer();
}

//Timer Function -> starts timer when game is started end when game is complete or game is cancelled.
let count;

function startTimer() {
    clearInterval(timer); //clears timer before timer starts. This fixes issue if timer is triggered again, when already running. 
    count = 0, timer = setInterval(function () {
        count = count++;
        document.getElementById("timer").firstChild.innerText = count++;

        //end timer when timer reaches -1, This displays 0.
        if (count === 60) {
            clearInterval(timer);
            document.getElementById("timer").firstChild.innerText = "Game Over";
        }
    }, 1000);
}

/* icon assign function -> replaces random numbers with icon pairs
when icon assigned, tile is also assigned an attribute icon variables */

//countClicks -> calculates number of user clicks -> needed to calculate score
function countMoves(){
    clicks = n;
    document.getElementById("clicks").firstChild.innerHTML = clicks;
    
}

//ClearTiles -> Clear tiles when new game is started;


/*match tiles -> when one tile is clicked and displayed, check if next tile clicked has the same attribute value
if match icons remain displayed and correctly guessed tiles become disabled. */

//countCorrectAnswers -> count the number of tiles with value correct. each time a pair of tiles are matched, add 1 to the coundCorrectAnswers value;

//completeGAme -> When the number of correct answers == the number of cells the game can end.

//calculateScore -> adds number of clicks and elapsed time to calculate score & displays score upon game completion. 
function calculateScore(){
    timeScore = parseInt(timeScore);
    let calculatedScore = (timeScore + clicks);
    console.log(calculatedScore);
    document.querySelector("#score").firstChild.innerHTML = calculatedScore;
}
//refresh/reset -> click button, invokes endGame() the reset tiles values, and return their default styling.

//additional levels of difficulty

//1. generateRandomColor -> generates a random background color, to make matching harder as game progresses
let newRGB;

function generateRGBVal() {

    function generateRandomColor() {
        let r = Math.random();
        r = r * 255;
        r = Math.round(r);
        return r;
    }

    let rgbValue = [];
    for (let i = 0; i <= 2; i++) {
        let singleVal = generateRandomColor();
        rgbValue.push(singleVal);
    }
    newRGB = `rgb(${rgbValue[0]},${rgbValue[1]},${rgbValue[2]})`;
    return newRGB;
}
//2. addAdditional tiles -> 12, 16, 20, 24
//3. Reduce time -> decrease amount of time available to complete the game. 
//4. change icons to a math problem to be matched to the correct answer;

//additional iterations/Future development
// publish leaderboard;
//use api to generate random icon or picture



var board;
var playerO = "O";
var playerX = "X";
var currPlayer = playerO;
var gameOver = false;

window.onload = function() {
    setGame();
}

function setGame() {
    board = [
                [' ', ' ', ' '],
                [' ', ' ', ' '],
                [' ', ' ', ' ']
            ]

    for (let r = 0; r < 3; r++) {
        for (let c = 0; c < 3; c++) {
            let tile = document.createElement("div");
            tile.id = r.toString() + "-" + c.toString();
            tile.classList.add("tile");
            if (r == 0 || r == 1) {
                tile.classList.add("horizontal-line");
            }
            if (c == 0 || c == 1) {
                tile.classList.add("vertical-line");
            }
            tile.innerText = "";
            tile.addEventListener("click", setTile);
            document.getElementById("board").appendChild(tile);
        }
    }
}

function setTile() 
{
    if (gameOver) 
    {
        return;
    }

    let coords = this.id.split("-");    //ex) "1-2" -> ["1", "2'"]
    let r = parseInt(coords[0]);
    let c = parseInt(coords[1]);

    if (board[r][c] != ' ') 
    { 
        //already taken spot
        return;
    }
    
    board[r][c] = currPlayer; //mark the board
    this.innerText = currPlayer; //mark the board on html

    //change players
    if (currPlayer == playerO) 
    {
        currPlayer = playerX;
    }
    else 
    {
        currPlayer = playerO;
    }

    //check winner
    checkWinner();
}


function checkWinner() {
    //horizontally, check 3 rows
    for (let r = 0; r < 3; r++) {
        if (board[r][0] == board[r][1] && board[r][1] == board[r][2] && board[r][0] != ' ') {
            //if we found the winning row
            //apply the winner style to that row
            for (let i = 0; i < 3; i++) {
                let tile = document.getElementById(r.toString() + "-" + i.toString());
                tile.classList.add("winner");
                setTimeout(confi, 2000);
            }
            gameOver = true;
            return;
        }
    }

    //vertically, check 3 columns
    for (let c = 0; c < 3; c++) {
        if (board[0][c] == board[1][c] && board[1][c] ==  board[2][c] && board[0][c] != ' ') {
            //if we found the winning col
            //apply the winner style to that col
            for (let i = 0; i < 3; i++) {
                let tile = document.getElementById(i.toString() + "-" + c.toString());                
                tile.classList.add("winner");
                setTimeout(confi, 2000);
            }
            gameOver = true;
            return;
        }
    }

    //diagonally
    if (board[0][0] == board[1][1] && board[1][1] == board[2][2] && board[0][0] != ' ') {
        for (let i = 0; i < 3; i++) {
            let tile = document.getElementById(i.toString() + "-" + i.toString());                
            tile.classList.add("winner");
            setTimeout(confi, 2000);
        }
        gameOver = true;
        return;
    }

    //anti-diagonally
    if (board[0][2] == board[1][1] && board[1][1] == board[2][0] && board[0][2] != ' ') {
        //0-2
        let tile = document.getElementById("0-2");                
        tile.classList.add("winner");
        setTimeout(confi, 2000);

        //1-1
        tile = document.getElementById("1-1");                
        tile.classList.add("winner");
        setTimeout(confi, 2000);

        //2-0
        tile = document.getElementById("2-0");                
        tile.classList.add("winner");
        setTimeout(confi, 2000);
        gameOver = true;
        return;
    }
}

function confi(){
    if(confirm("Do you Want to play again? \n Click on Cancel to Go back..")){
        window.location.replace("game.html");
    }else{
        window.location.replace("../home.php");
    }
}