<?php

namespace Entity {
    class Todolist
    {
        public string $todo;

        public function __construct($name = "")
        {
            $this->todo = $name;
        }

        public function getTodo()
        {
            return $this->todo;
        }

        public function setTodo(string $name)
        {
            $this->todo = $name;
        }
    }
}
