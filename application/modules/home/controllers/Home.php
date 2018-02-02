<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/31/2018
 * Time: 4:52 PM
 */

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('category/category', 'category_model');
        $this->load->model('article/article', 'article_model');

        $this->load->config('pagination');
        $config = $this->config->item('default');
        $config['total_rows'] = $this->category_model->count_all();
        $this->load->library('pagination', $config);
    }

    public function index($page = 1)
    {
        if(empty($page))
        {
            $page = 1;
        }
        $cats_per_page = $this->config->item('per_page', 'default');
        $start = $cats_per_page * ($page - 1);
        $categories = $this->category_model->get_list_cats($start, $cats_per_page);
        foreach ($categories as $cat)
        {
            $this->data['categories'][$cat['cat_id']]['info'] = $cat;
            $this->data['categories'][$cat['cat_id']]['articles'] = $this->category_model->get_list_articles($cat['cat_id']);
        }
        $this->data['pagination'] = $this->pagination->create_links();
        $this->parser->parse('index.tpl', $this->data);
    }
}