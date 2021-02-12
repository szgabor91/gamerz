<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $query = $db->table('articles')
            ->select('article_title')
            ->where([
                'article_type' => 1
            ]);

        echo json_encode($query->get()->getResult());
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

    public function showNews($id)
    {
        $db = db_connect();
        $queryArticles = $db->table('articles')
            ->select('id, article_author, article_created_at, article_title, article_header, article_text')
            ->where([
                'article_type' => 1,
                'id' => $id
            ]);
        $resultArticles = $queryArticles->get()->getResult();

        $queryPlatforms = $db
            ->table('platforms')
            ->select('*');
        $resultPlatforms = $queryPlatforms->get()->getResult();

        return view('news', [
            'articles' => $resultArticles,
            'platforms' => $resultPlatforms,
        ]);
    }
    //--------------------------------------------------------------------

}
