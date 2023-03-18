<?php

namespace App\Models;

class Invoice extends \App\Model
{
    public function create(float $amount, int $userId): int
    {
        $query = 'INSERT INTO invoices (amount, user_id)
                        VALUES (:amount, :user_id)';

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':amount', (string) $amount, \PDO::PARAM_STR);
        $stmt->bindValue(':user_id', $userId, \PDO::PARAM_INT);
        $stmt->execute();

        return (int) $this->db->lastInsertId();
    }

    public function find(int $invoiceId): array
    {
        $stmt = $this->db->prepare(
            'SELECT invoices.id, amount, full_name
             FROM invoices
             LEFT JOIN users ON users.id = user_id
             WHERE invoices.id = :invoiceId'
        );

        $stmt->bindValue(':invoiceId', $invoiceId);

        $stmt->execute();

        $invoice = $stmt->fetch();

        return $invoice ? $invoice : [];
    }
}
