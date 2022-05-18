<?php

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

require_once __DIR__ . "/../Entity/todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";


function TesShowTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistRepository->todolist[1] = new Todolist("Huda");
    $todolistRepository->todolist[2] = new Todolist("Anam");
    $todolistRepository->todolist[3] = new Todolist("Irfan");
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function TesAddTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function TesRemoveTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
}

TesRemoveTodolist();
