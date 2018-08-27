<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;

Route::get('changelog', \Orlyapps\NovaChangelog\Http\Controllers\ToolController::class . '@index');
