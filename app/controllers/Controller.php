<?php

namespace app\controllers;

use League\Plates\Engine;

use function config\connection;

class Controller
{
    public static function view($view, $data = [])
    {
        $viewPath = dirname(__FILE__, 2) . "/view";

        // Create new Plates instance
        $templates = new Engine($viewPath);

        // Render a template
        echo $templates->render($view, $data);
    }


    public static function select($table, $field = '*')
    {
        $connect = connection();

        //select * from table;
        $query = "select {$field} from {$table}";

        $prepare = $connect->query($query);

        return $prepare->fetchAll();
    }

    public static function create($table, $value)
    {
        $connect = connection();

        // insert into table (column) value (:column);

        $query = "insert into {$table} (";
        $query .= implode(", ", array_keys($value)) . ") value (";
        $query .=  ":" . implode(' , :', array_keys($value)) . ")";

        $prepare = $connect->prepare($query);

        return $prepare->execute($value);
    }

    public static function update()
    {
    }

    public static function delete()
    {
    }

    public static function find($table, $field = '*', $key, $value)
    {
        // select * from table where id = id

        $connect = connection();

        $query = "select {$field} from {$table} where {$key} = :{$key}";

        $prepare = $connect->prepare($query);

        $prepare->execute([
            $key => $value
        ]);

        return $prepare->fetch();
        // var_dump($prepare->fetch());
    }
}
