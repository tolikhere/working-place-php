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
            $db = new PDO(
                "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']}",
                $_ENV['DB_USER'],
                $_ENV['DB_PASS'],
                [
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

            $email = 'bor@doe.com';
            $name = 'Bor Doe';
            $isActive = 1;
            $createdAt = date('Y-m-d H:m:i');
            $amount = 235.34;

            $userQuery = 'INSERT INTO users (email, full_name, is_active, created_at)
                      VALUES (:email, :name, :active, :date)';
            $invoiceQuery = 'INSERT INTO invoices (amount, user_id)
                             VALUES (:amount, :user_id)';

            $db->beginTransaction();

            $userStmt = $db->prepare($userQuery);
            $invoiceStmt = $db->prepare($invoiceQuery);

            $userStmt->bindValue(':name', $name);
            $userStmt->bindValue(':email', $email);
            $userStmt->bindValue(':active', $isActive, PDO::PARAM_BOOL);
            $userStmt->bindValue(':date', $createdAt);
            $invoiceStmt->bindValue(':amount', (string) $amount, PDO::PARAM_STR);

            $userStmt->execute();
            $userId = (int) $db->lastInsertId();
            $invoiceStmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
            $invoiceStmt->execute();

            $db->commit();

            $fetchStmt = $db->prepare(
                'SELECT invoices.id AS invoice_id, amount, user_id, full_name
                FROM invoices
                INNER JOIN users ON user_id = users.id
                WHERE email = :email'
            );

            $fetchStmt->bindValue(':email', $email);

            $fetchStmt->execute();

            echo '<pre>';
            var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
            echo '</pre>';
        } catch (\PDOException $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

        return View::make('index', ['foo' => 'bar']);
    }
}
