<?php

class BarangModel
{
    private static ?\PDO $db= null;

    public static function connection()
    {
        try {
            if(self::$db === null) {
                self::$db = new PDO('mysql:host=127.0.0.1;dbname=penugasan', 'root', 'root');
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$db;
        } catch (PDOException $th) {
            throw $th;
        }
    }

    public function all()
    {
        $statement = self::connection()->prepare('SELECT * FROM barang');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function find($id)
    {
        $statement = self::connection()->prepare('SELECT * FROM barang WHERE id = ?');
        $statement->bindValue(1, $id);
        $statement->execute();

        return $statement->fetchObject();
    }

    public function insert($nama, $tipe, $jumlah, $harga)
    {
        $statement = self::connection()->prepare('INSERT INTO barang (nama, tipe, jumlah, harga) VALUES (?,?,?,?)');
        $statement->bindValue(1, $nama);
        $statement->bindValue(2, $tipe);
        $statement->bindValue(3, $jumlah);
        $statement->bindValue(4, $harga);
        
        return $statement->execute();
    }

    public function update($id, $nama, $tipe, $jumlah, $harga)
    {
        $statement = self::connection()->prepare('UPDATE barang SET nama = ?, tipe = ?, jumlah = ?, harga = ? WHERE id = ?');
        $statement->bindValue(1, $nama);
        $statement->bindValue(2, $tipe);
        $statement->bindValue(3, $jumlah);
        $statement->bindValue(4, $harga);
        $statement->bindValue(5, $id);

        return $statement->execute();
    }

    public function delete($id)
    {
        $statement = self::connection()->prepare('DELETE FROM barang WHERE id = ?');
        $statement->bindValue(1, $id);

        return $statement->execute();
    }
}