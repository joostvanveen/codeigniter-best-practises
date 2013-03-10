<?php
class Blog_m extends MY_Model {
    function get_posts() {
        return array(
            array('title' => 'This is my blog post', 'text' => 'This is my text'),
            array('title' => 'This is my second blog post', 'text' => 'This is my text'),
            array('title' => 'This is my third blog post', 'text' => 'This is my text'),
        );
    }
}