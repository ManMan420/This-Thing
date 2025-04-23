<?php
    use App\Models\riasec;

    /**This is a custom made file, the purpose of which is to have a "Universal" get all data from database function
     * For now, only all questions can be retrieved, I shall be adding other data as well
     */

    function getItems(){
        //use DB statements instead of eloquent
        $items = riasec::all();

        //$questions = "All Goods";

        return $items;
    }
?>