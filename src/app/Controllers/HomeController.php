<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        try {
            $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root', [
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

            $email = 'tomd@doe.com';
            $name = 'Tom Doe';
            $isActive = 1;
            $createdAt = date('Y-m-d H:m:i', strtotime('07/11/2021 9:00PM'));

            $query = 'INSERT INTO users (email, full_name, is_active, created_at, updated_at)
                      VALUES (:email, :name, :active, :date1, :date2)';

            $stmt = $db->prepare($query);

            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindParam(':active', $isActive, PDO::PARAM_BOOL);
            $stmt->bindValue(':date1', $createdAt);
            $stmt->bindValue(':date2', $createdAt);

            $isActive = 0;
            $name = 'foo bar';

            $stmt->execute();

            $id = (int) $db->lastInsertId();

            $user = $db->query('SELECT * FROM users WHERE id = ' . $id)->fetch();

            echo '<pre>';
            var_dump($user);
            echo '</pre>';
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

        return View::make('index', ['foo' => 'bar']);
    }
}
