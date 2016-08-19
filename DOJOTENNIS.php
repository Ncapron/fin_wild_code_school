<?php

function getScore($tab, $joueur1, $joueur2) {

    for ($i=0; $i <count($tab) ; $i++) {
        if ( $tab[$i] == 1 ) {
            if ($joueur1->score < 30 ) {
                $joueur1->score = $joueur1->score + 15;
            }
            elseif ( $joueur1->score == 30 ) {
                $joueur1->score = 40;
            }
            elseif ( $joueur1->score == 40 ) {
                if ( $joueur2->score < 40 ) {
                    $joueur1->score = 1;
                    $joueur2->score = 0;
                    break;
                }
                elseif ( $joueur2->score == 40 ) {
                    $joueur1->score = 42;
                }
                else {
                    $joueur1->score = 40;
                    $joueur2->score = 40;
                }
            }
            else {
                $joueur1->score = 1;
                $joueur2->score = 0;
                break;
            }
        }
        else {
            if ($joueur2->score < 30 ) {
                $joueur2->score = $joueur2->score + 15;
            }
            elseif ( $joueur2->score == 30 ) {
                $joueur2->score = 40;
            }
            elseif ( $joueur2->score == 40 ) {
                if ( $joueur1->score < 40 ) {
                    $joueur2->score = 1;
                    $joueur1->score = 0;
                    break;
                }
                elseif ( $joueur1->score == 40 ) {
                    $joueur2->score = 42;
                }
                else {
                    $joueur2->score = 40;
                    $joueur1->score = 40;
                }
            }
            else {
                $joueur2->score = 1;
                $joueur1->score = 0;
                break;
            }
        }
    }
return array($joueur1->nom => $joueur1->score, $joueur2->nom => $joueur2->score);
}