<?php

// complete all "todo"s to build a blackjack game

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];

// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
    $deck = [];
    foreach ($suits as $suit) {
        foreach ($cards as $card) {
            $cardAndSuit = [];
            $cardValue = [];

            $cardAndSuit[] = "$card $suit";
            $cardValue[] = $card;

            $deck[] = array_combine($cardValue, $cardAndSuit);
        }
    }
    shuffle($deck);
    return $deck;
}

// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
    if (key($card) == 'A'){
        return true;
    } else {
        return false;
    }
}

// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
    if (key($card) == 'A'){

        return 11;
    }
    if (key($card) == 'K' || key($card) == 'Q' || key($card) == 'J') {
        return 10;
    } else {
        return key($card);
    }
}

// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
    $handArray = [];
    foreach ($hand as $card) {
        $cardValue = getCardValue($card);
        $handArray[] = $cardValue;
    }
    $handTotal = array_sum($handArray);

    if (in_array(11, $handArray) && $handTotal > 21) {
        $aces = array_count_values($handArray);
        $numOfAces = $aces['11'];
        $handTotal -= ($numOfAces * 10);
    }

    return $handTotal;
}

// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard(&$hand, &$deck) {
    $drawnCard = array_shift($deck);
    $hand[] = $drawnCard;
    return $hand;
}

// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) {
  // todo
    $handOutput = [];

    if ($hidden){
        foreach ($hand as $card) {
            foreach ($card as $value) {
                $handOutput[] = "[$value]"; 
            }
        }
        $hiddenOutput = $handOutput;
        for ($i = 1; $i < count($hiddenOutput); $i++){
            $hiddenOutput[$i] = "[???]";
        }
        $hiddenOutput = implode('', $hiddenOutput);
        $handTotal = "???";

        $output = "$name ==================" . PHP_EOL . "$hiddenOutput       Total: $handTotal" . PHP_EOL;
        return $output;        
    } else {
        foreach ($hand as $card) {
            foreach ($card as $value) {
                $handOutput[] = "[$value]"; 
            }
            // print_r($handOutput);
        }
        $handOutput = implode('', $handOutput);
        $handTotal = getHandTotal($hand);

        $output = "$name ==================" . PHP_EOL . "$handOutput       Total: $handTotal" . PHP_EOL;
        return $output;
    }

}

$dealerScore = 0;
$playerScore = 0;

do {
    // build the deck of cards
    $deck = buildDeck($suits, $cards);

    // initialize a dealer and player hand
    $dealer = [];
    $player = [];


    // dealer and player each draw two cards
    drawCard($dealer, $deck);
    drawCard($dealer, $deck);
    drawCard($player, $deck);
    drawCard($player, $deck);

    // echo the dealer hand, only showing the first card
    $dealerOutput = echoHand($dealer, 'Dealer', true);
    echo $dealerOutput;

    // echo the player hand
    $playerOutput = echoHand($player, 'Player', false);
    echo $playerOutput;

    // allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
    $decision = '';
    while ($decision != 's' && getHandTotal($player) <= 21) {

            fwrite(STDOUT, "(H)it or (S)tay? " . PHP_EOL);
            $decision = strtolower(trim(fgets(STDIN)));
            if ($decision == 's') {
                break;
            }
            if ($decision == 'h') {
                drawCard($player, $deck);
                echo echoHand($dealer, 'Dealer', true);
                echo echoHand($player, 'Player', false) . PHP_EOL;
            }
    }

    if (getHandTotal($player) <= 21) {
        while (getHandTotal($dealer) < 18) {
            if (getHandTotal($dealer) < 17) {
                drawCard($dealer,$deck);
                echo echoHand($dealer, 'Dealer', true);
                echo echoHand($player, 'Player', false) . PHP_EOL;         
            }
            if (getHandTotal($dealer) >= 17) {
                break;
            }
        } 
    }

        
    echo PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;

    if (getHandTotal($player) > 21) {
        echo echoHand($dealer, 'Dealer', false);
        echo echoHand($player, 'Player', false) . PHP_EOL;
        echo 'BUST!' . PHP_EOL;
        $dealerScore++;
    } elseif (getHandTotal($dealer) > 21 && getHandTotal($player) <= 21) {
        echo echoHand($dealer, 'Dealer', false);
        echo echoHand($player, 'Player', false) . PHP_EOL;
        echo 'YOU WIN, DEALER BUSTED!' . PHP_EOL;
        $playerScore++;
    } elseif (getHandTotal($player) > getHandTotal($dealer)) {
        echo echoHand($dealer, 'Dealer', false);
        echo echoHand($player, 'Player', false) . PHP_EOL;
        echo 'YOU WIN!' . PHP_EOL;
        $playerScore++;
    } elseif (getHandTotal($player) < getHandTotal($dealer)) {
        echo echoHand($dealer, 'Dealer', false);
        echo echoHand($player, 'Player', false) . PHP_EOL;
        echo 'YOU LOSE!' . PHP_EOL;
        $dealerScore++;
    } elseif (getHandTotal($player) == getHandTotal($dealer)) {
        echo echoHand($dealer, 'Dealer', false);
        echo echoHand($player, 'Player', false) . PHP_EOL;
        echo 'TIE!' . PHP_EOL;
    }

    echo "Your score: $playerScore.     Dealer's score: $dealerScore" . PHP_EOL;


    fwrite(STDOUT, "Play again? (y/n) " . PHP_EOL);
    $playAgain = strtolower(trim(fgets(STDIN)));

    if ($playAgain == 'n') {
        break;
    }

    echo PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;

} while ($playAgain != 'n');

echo 'Bye!' . PHP_EOL;

// show the dealer's hand (all cards)
// todo

// todo (all comments below)

// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)

// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card

// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins
