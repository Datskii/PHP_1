<?php
function render($template, $params=[]) {
    extract($params);
    include TEMPLATES_DIR . "render.php";
}