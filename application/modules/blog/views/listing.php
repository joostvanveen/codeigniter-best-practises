<?php
if (count($posts)) {
    foreach ($posts as $post) {
        echo '<h1>' . $post['title']. '</h1>';
        echo '<p>' . $post['text']. '</p>';
    }
}