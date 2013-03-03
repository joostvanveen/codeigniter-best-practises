<?php
if (count($questions)) {
    foreach ($questions as $question) {
        echo '<h2>' . anchor('questions/detail/' . $question->id, escape($question->subject)) . '</h2>';
        echo '<p>' . escape($question->first_name) . ' ' . escape($question->last_name) . ' ' . escape($question->created) . '</p>';
    }
}