<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 5:42 PM
 */

class Categories extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category', 'category_model');
    }

    public function view($cat_id = '')
    {
        if(($cat = $this->category_model->get_by_id($cat_id)) != NULL)
        {
            $this->data['cat'] = $cat;
            if(($cat_parent = $this->category_model->get_by_id($cat['cat_parent_id'])) != NULL)
            {
                $this->data['cat_parent'] = $cat_parent;
            }

            $articles = $this->category_model->get_list_articles($cat_id);
            $this->data['articles'] = $articles;

            $this->parser->parse('view.tpl', $this->data);
        }
        else
        {
            redirect(admin_home_url());
        }
    }
}