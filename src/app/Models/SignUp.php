<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class SignUp extends Model
{
    public function __construct(
        protected User $userModel,
        protected Invoice $invoiceModel
    ) {
        parent::__construct();
    }

    public function register(array $userInfo, array $invoiceInfo): int
    {
        try {
            $this->db->beginTransaction();


            $userId = $this->userModel->create($userInfo['email'], $userInfo['name'], $userInfo['date']);
            $invoiceId = $this->invoiceModel->create($invoiceInfo['amount'], $userId);

            $this->db->commit();
        } catch (\PDOException $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }

            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

        return $invoiceId;
    }
}
