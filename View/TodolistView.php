<?php

namespace View {

    use Service\TodolistServiceImpl;
    use Helper\InputHelper;

    class TodolistView
    {
        public TodolistServiceImpl $todolistService;

        public function __construct(TodolistServiceImpl $todolistService)
        {
            $this->todolistService = $todolistService;
        }
        public function showTodolist()
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "PILIH MENU" . PHP_EOL;
                echo "1. Tambah Todolist" . PHP_EOL;
                echo "2. Hapus Todolist" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == 1) {
                    $this->addTodolist();
                } elseif ($pilihan == 2) {
                    $this->removeTodolist();
                } elseif ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        public function addTodolist()
        {
            echo "Menambahkan Todolist" . PHP_EOL;

            $todo = InputHelper::input("Todo (ketik x untuk batal)");

            if ($todo === "x") {
                echo "Maaf Anda Batal Menambah Todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        public function removeTodolist()
        {
            echo "MENGHAPUS TOOLIST" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor(x untuk batal)");
            if ($pilihan == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}
