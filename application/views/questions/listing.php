<?php
if (count($questions)) {
    foreach ($questions as $question) {
        echo '<h2>' . anchor('questions/detail/' . $question->id, $question->subject) . '</h2>';
        echo '<p>' . $question->first_name . ' ' . $question->last_name . ' ' . $question->created . '</p>';
    }
}