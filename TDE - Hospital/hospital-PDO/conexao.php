<?php
class Conexao {
    private static $instance;

    public static function getConn() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new \PDO('pgsql:host=localhost;port=5432;dbname=Hospital;', 'postgres', 'postgres');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        return self::$instance;
    }
}
?>
