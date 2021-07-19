<?php

    class Conexao {

        private $dsn = 'Aqui vc deve colocar a sua conexão';
        private $user = 'root';
        private $pass = 'Aqui colocar sua senha do BD';

        public function conectar() {

            try {

                $conexao = new PDO(
                    "$this->dsn", 
                    "$this->user", 
                    "$this->pass"
                );

                return $conexao;

            } catch (PDOException $e) {
                echo '<p>' . $e->getMessage() . '<p>';
            }

        }
    }


?>