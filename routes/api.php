<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;

Route::get('/changelog', function (Request $request) {
    $changelogFile = base_path() . '/CHANGELOG.md';
    $changelogMarkdown = file_get_contents($changelogFile);

    $parsedown = new Parsedown;
    $html = (string)new HtmlString($parsedown->text($changelogMarkdown));

    return $html;
});
