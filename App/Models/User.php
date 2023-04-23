<?php

namespace App\Models;

class User
{

    private static $table = 'User';

    public static function get(int $id)
    {

        $connPdo = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

        $pgsql = 'SELECT * FROM' . self::$table . 'WHERE id = :id';
        $stmt = $connPdo->prepare($pgsql);

        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception('Não foi possivel econtrar usuarios');
        }
    }

    public static function all()
    {

        $connPdo = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

        $pgsql = 'SELECT * FROM';
        $stmt = $connPdo->prepare($pgsql);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception('Não foi possivel econtrar usuarios');
        }
    }
}
