<?php

declare(strict_types=1);

namespace App\Models;

class User extends \App\Model
{
    public function create(string $email, string $name, string $date, bool $isActive = true): int
    {
        $query = 'INSERT INTO users (email, full_name, is_active, created_at)
                      VALUES (:email, :name, :active, :date)';

        $stmt = $this->db->prepare($query);

        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':active', $isActive, \PDO::PARAM_BOOL);
        $stmt->bindValue(':date', $date);

        $stmt->execute();
        return (int) $this->db->lastInsertId();
    }
}
