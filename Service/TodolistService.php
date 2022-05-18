<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService
    {
        public function showTodolist(): void;
        public function addTodolist(string $toodo): void;
        public function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolist)
        {
            $this->todolistRepository = $todolist;
        }

        public function showTodolist(): void
        {
            echo "TAMPIL TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $key => $value) {
                echo "$key." . $value->getTodo()  . PHP_EOL;
            }
        }

        public function addTodolist(string $todolist): void
        {
            $todo = new Todolist($todolist);
            $this->todolistRepository->save($todo);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        public function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}
