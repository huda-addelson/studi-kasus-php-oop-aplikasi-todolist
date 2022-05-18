<?php

require_once __DIR__ . "/../Entity/todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../View/TodolistView.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function TesViewShowTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistview = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistview->showTodolist();
}

function TesViewAddTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistview = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistview->addTodolist();

    $todolistService->showTodolist();
}

function TesViewRemoveTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistview = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistview->removeTodolist();

    $todolistService->showTodolist();
    $todolistview->removeTodolist();

    $todolistService->showTodolist();
}

TesViewRemoveTodolist();
