<?php

$colors = array(
    "#b3d4fc" => "dark",
    "#E46299" => "dark",
    "#5B8BC0" => "dark",
    "#5AD179" => "dark",
    "#FFCD6D" => "light",
    "#FFF1BC" => "light",
    "#DEF0B1" => "light"
);

$questions = array(
    "How will societies be in the future?",
    "What is self-awareness?",
    "Why does the universe exist?",
    "At what point did humans become intelligent?",
    "What is the purpose of life?",
    "What makes a true religion really work?",
    "What can be done when natural resources come to an end?",
    "Why do we see patterns everywhere?",
    "What is love?",
    "Why does evil arise from man?",
    "What is free will, if everything can be calculated?"
);

$answers = array(
    "Some change and some do not. Understand this and be illumitated.",
    "Dogs do not worry about such matters.",
    "Water flows without direction because it is not bound to a single purpose.",
    "Air can be as soft as a breeze and as devastating as a hurricane. This is not so different.",
    "A rock can be felt same as a good idea that comes to mind.",
    "Since nature gave birth to all, isn't everything a wonder of nature?",
    "MU.",
    "We are not one with all. 'We' is an illusion.",
    "Silence should not have a word for it.",
    "Flying and falling are not but the same thing. We all fall from time to time.",
    "Death is part of every man's life. Opposites are not so.",
    "If you can explain the difference between red and blue, you have lost your way.",
    "Clouds do not mind where the wind blows -- they just follow."
);

function pickRandom($list, $isAssociative = false) {
    $index = rand(0, sizeof($list) - 1);
    if ($isAssociative) { 
        $keys = array_keys($list);
        $name = $keys[$index];
        return array($name => $list[$name]);
    }
    return $list[$index];
}

function setColor($color) {
    global $__COLOR__;
    $__COLOR__ = key($color);

    global $__COLOR_TONE__;
    $__COLOR_TONE__ = $color[$__COLOR__];
};

function setQuestion($question) {
    global $__QUESTION__;
    $__QUESTION__ = $question;
}

function setAnswer($answer) {
    global $__ANSWER__;
    $__ANSWER__ = $answer;
}

$pickedColor = pickRandom($colors, true);
$pickedQuestion = pickRandom($questions);
$pickedAnswer = pickRandom($answers);

setColor($pickedColor);
setQuestion($pickedQuestion);
setAnswer($pickedAnswer);

?>