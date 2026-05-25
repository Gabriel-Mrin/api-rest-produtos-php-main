<?php

namespace api\models;

use api\core\Database;
use PDO;

class User {

    public static function findAll() {
        $conn = new Database();

        $result = $conn->executeQuery(
            'SELECT * FROM clientes'
        );

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findByCpf(string $cpf) {

        $conn = new Database();

        $result = $conn->executeQuery(
            'SELECT * FROM clientes WHERE cpf = :CPF LIMIT 1',
            array(
                ':CPF' => $cpf
            )
        );

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function updateByCpf(string $cpf, array $data) {

        $conn = new Database();

        return $conn->executeQuery(
            'UPDATE clientes
             SET
                nome = :NOME,
                email = :EMAIL
             WHERE cpf = :CPF',
            array(
                ':NOME' => $data['nome'],
                ':EMAIL' => $data['email'],
                ':CPF' => $cpf
            )
        );
    }

    public static function deleteByCpf(string $cpf) {

        $conn = new Database();

        return $conn->executeQuery(
            'DELETE FROM clientes WHERE cpf = :CPF',
            array(
                ':CPF' => $cpf
            )
        );
    }
}