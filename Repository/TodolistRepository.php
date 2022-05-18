<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        public function save(Todolist $todolist): void;
        public function remove(int $number);
        public function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
        public array $todolist = array();
        public function save(Todolist $todo): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todo;
        }

        public function remove(int $number)
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }

        public function findAll(): array
        {
            return $this->todolist;
        }
    }
}
