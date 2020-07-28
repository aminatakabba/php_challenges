<?php

function magic8Ball(){
  echo "Tell me... What is your question?\n";  
  $question = readline(">");
  echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: ";   
  $choice = rand(0, 19);
  // echo $choice;
  if ($choice === 0){
    return "It is certain.";
  } else if($choice === 1) {
    return "It is decidedly so.";
  } else if ($choice === 2) {
    return "Without a doubt.";
  } else if ($choice === 3) {
    return "Yes - definitely.";
  } else if ($choice === 4) {
    return "You may rely on it.";
  } else if ($choice === 5) {
    return "As I see it, yes";
  } else if ($choice === 6) {
    return "Mostl likely";
  } else {
    return "Souds about right";
  }
}
magic8Ball();
