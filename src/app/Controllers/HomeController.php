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
            ]);
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            $email = $_GET['email'];
            $query = 'SELECT * FROM  users WHERE email = ?';

            echo $query . '<br>';

            $stmt = $db->prepare($query);

            $stmt->execute([$email]);

            foreach ($stmt->fetchAll() as $user) {
                echo '<pre>';
                var_dump($user);
                echo '<pre>';
            }
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }

        var_dump($db);

        return View::make('index', ['foo' => 'bar']);
    }
}
