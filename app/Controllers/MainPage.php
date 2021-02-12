<?php

namespace App\Controllers;

class MainPage extends BaseController
{
    public function index()
    {
        return view('main_page.php');
    }

    public function displayData()
    {
        $db = db_connect();
        $query = $db
            ->table('platforms')
            ->select('*');
        $result = $query->get()->getResult();

        return view('main_page', [
            'platforms' => $result
        ]);
    }

    public function displayArticles()
    {
        $db = db_connect();
        $query = $db
            ->table('articles')
            ->select('id, article_author, article_created_at, article_title, article_header, article_text, platform');

        $query2 = $db
            ->table('platforms')
            ->select('*');
        $result = $query2->get()->getResult();

        return view('main_page', [
            'articles' => $query->get()->getResult(),
            'platforms' => $result
        ]);
    }
    //--------------------------------------------------------------------

}
