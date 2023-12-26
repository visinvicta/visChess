<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function authorize ($condition) {
    if (! $condition) {
        abort(Response::FORBIDDEN);
    }

}