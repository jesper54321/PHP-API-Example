<?php

/* class model
{
    public static function __construct()
    {
    }
} */

class model
{
    private static  $db;

    public static $id;
    public static $title;
    public static $content;
    public static $artist_id;
    public static $created_at;

    public static $tables;

    /**
     * Constructor
     */
    public static function constructor()
    {
        global $db;
        self::$db = $db;
        $tempTables = self::$db->query("show tables");
        self::$tables = array();
        foreach ($tempTables as $item) {
            foreach ($item as $key) {
                array_push(self::$tables, strtolower($key));
            }
        };
    }

    /**
     * Metode til at hente lister med
     */
    public static function list($table)
    {
        //var_dump(in_array(strtolower($table), self::$tables));
        $sql = "SELECT * FROM $table";
        return self::$db->query($sql);
    }

    /**
     * Metode til at hente detaljer med
     * @param id 
     */
    public static function details($table, $id)
    {
        $params = array(
            "id" => array($id, PDO::PARAM_INT)
        );

        $sql = "SELECT *
				FROM $table where id = :id";
        return self::$db->query($sql, $params, Db::RESULT_SINGLE);
    }

    public static function save($table)
    {
        $params = array(
            "title" => array(self::$title, PDO::PARAM_STR),
            "content" => array(self::$content, PDO::PARAM_STR),
            "artist_id" => array(self::$artist_id, PDO::PARAM_INT)
        );
        $sql = "INSERT INTO $table(title, content, artist_id) 
					VALUES(:title, :content, :artist_id)";
        if (self::$db->query($sql, $params)) {
            return self::$db->lastInsertId();
        }
    }

    /**
     * Metode til at slette en record med
     * @param id 
     */
    public static function delete($table, $id)
    {
        $params = array(
            "id" => array($id, PDO::PARAM_INT)
        );

        $sql = "DELETE FROM $table 
				WHERE id = :id";
        return self::$db->query($sql, $params);
    }
}
