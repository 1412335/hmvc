<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 4:38 PM
 */

class Articles extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article', 'article_model');
    }

    public function view($article_id = '')
    {
        $article = $this->article_model->get_by_id($article_id, PUBLIC_STATUS);
        if( ! $article)
        {
            redirect(base_url('home'));
        }
        else
        {
            $related_articles = $this->article_model->get_related_to_3($article_id, 4, 'tags');
            $this->data['related_articles'] = $related_articles;

//            $related_cat_articles = $this->article_model->get_related_to($article_id, 4);
//            $this->data['related_cat_articles'] = $related_cat_articles;

            $this->data['article'] = $article;
            $this->parser->parse('view.tpl', $this->data);
        }
    }

}