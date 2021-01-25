<?php

declare(strict_types=1);

use App\Controller\SiteController;
use App\Controller\EchoController;
use App\Controller\TestController;
use App\Controller\WriterController;
use App\Controller\BookController;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;
use Yiisoft\Router\Route;
use Yiisoft\Http\Method;
use Yiisoft\DataResponse\Middleware\FormatDataResponseAsJson;

return [
    Route::get('/', [SiteController::class, 'index'])->name('home'),
    Route::get('/add[/{id}/{name}/{bookId}/{bookName}/{year}/{authorId}]', [WriterController::class, 'add'])->name('writer/add'),
    Route::get('/read', [WriterController::class, 'read'])->name('writer/read'),
    Route::post('/edit[/{id}/{name}]', [WriterController::class, 'edit'])->name('writer/edit'),
    Route::post('/delete[/{id}]', [WriterController::class, 'delete'])->name('writer/delete'),
    ReverseBlockMerge::class => new ReverseBlockMerge(),
    Route::methods([Method::GET, Method::POST], '/say', [EchoController::class, 'say'])->name('echo/say'),
    Route::get('/api/v1/books', TestController::class)
        ->addMiddleware(FormatDataResponseAsJson::class)
        ->name('api/v1/books'),
];
