<?php
    use Illuminate\Support\Facades\DB;

    /**This is a custom made file, the purpose of which is to have a "Universal" get all data from database function
     * For now, only all questions can be retrieved, I shall be adding other data as well
     */

    function getItems($table){
        //Retrieve all items from specified table
        $items = DB::table($table)->get();

        return $items;
    }

    function getItemsWhere($table, $condition){
        //Retrieve item from table using a specific condition
        $item = DB::table($table)->where('id', $condition)->get();

        return $item;
    }
?>