<?php

/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Webman\Route;

//禁止默认路由规则
Route::disableDefaultRoute();

Route::get('/', [app\controller\IndexController::class, 'index']);
Route::get('/test', [app\controller\IndexController::class, 'db']);
Route::get('/model', [app\controller\IndexController::class, 'test']);
Route::get('/sync', [app\controller\QueueController::class, 'index']);
Route::get('/async', [app\controller\QueueController::class, 'queue']);
