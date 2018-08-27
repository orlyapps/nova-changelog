<?php

namespace Orlyapps\NovaChangelog\Http\Controllers;

use Illuminate\Support\HtmlString;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ToolController extends Controller
{
    public function index()
    {
        $changelogFile = base_path() . '/CHANGELOG.md';
        if (!file_exists($changelogFile)) {
            file_put_contents($changelogFile, '## [Unreleased]');
        }

        $changelogMarkdown = file_get_contents($changelogFile);

        $parsedown = new \Parsedown;
        $html = (string)new HtmlString($parsedown->text($changelogMarkdown));

        return $html;
    }
}
