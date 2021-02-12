<?php

namespace App\Controllers;

class Tests extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $query = $db->table('articles')
            ->select('article_title')
            ->where([
                'article_type' => 2
            ]);

        echo json_encode($query->get()->getResult());
    }

    public function showTests($id)
    {
        $db = db_connect();
        $queryArticles = $db->table('articles')
            ->select('id, article_author, article_created_at, article_title, article_header, article_text')
            ->where([
                'article_type' => 2,
                'id' => $id
            ]);
        $resultArticles = $queryArticles->get()->getResult();

        $queryPlatforms = $db
            ->table('platforms')
            ->select('*');
        $resultPlatforms = $queryPlatforms->get()->getResult();

        return view('tests', [
            'articles' => $resultArticles,
            'platforms' => $resultPlatforms,
        ]);
    }

    //--------------------------------------------------------------------

}
