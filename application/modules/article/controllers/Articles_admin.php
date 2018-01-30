<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 2:40 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_admin extends MY_Controller
{
    protected $status = array(
        0	=> 'unpublic',
        1	=> 'public'
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article', 'article_model');

        $this->load->_add_module_paths('category');
        $this->load->model('category', 'category_model');

        $this->load->library('form_validation');

        $config = array(
            'max_size'	=> '100',
            'max_height'	=> '1024',
            'max_width'	=> '1024',
            'allowed_types'	=> 'png|jpg|jpeg',
            'upload_path'	=> './uploads/articles/'
        );
        $this->load->library('upload', $config);

        $cats = $this->category_model->get_many();

        $cats_option = array();
        foreach ($cats as $item)
        {
            $cats_option[$item['cat_id']] = $item['cat_name'];
        }
        $this->data['cats'] = $cats_option;

        $this->data['status'] = $this->status;
    }

    public function index()
    {
        $articles = $this->article_model->get_list_articles();
        $articles_data_table = array();
        foreach ($articles as $item)
        {
            $articles_data_table[] = $item['article_id'];
            $articles_data_table[] = "<a href=".base_url()."articles/$item[article_id]>$item[article_name]</a>";
            $articles_data_table[] = "<a href=".base_url()."categories/$item[cat_id]>$item[cat_name]</a>";
            $articles_data_table[] = $item['article_des'];
            $articles_data_table[] = $this->status[$item['article_status']];
            $articles_data_table[] = $item['article_created_date'];
            $articles_data_table[] = $item['article_modified_date'];
            $articles_data_table[] = "<a href=".base_url()."admin/articles/$item[article_id]/edit role='button' class='btn btn-flat btn-primary btn-sm'><i class='fa fa-edit'></i></a>";
            $articles_data_table[] = "<a href=".base_url()."admin/articles/$item[article_id]/delete onclick='return confirm(\"Do you want to delete this article?\");'
										role='button' class='btn btn-flat btn-danger btn-sm'><i class='fa fa-remove'></i></a>";
        }
        $this->data['articles'] = $articles_data_table;
        $this->data['table_attr'] = 'class="table table-bordered table-striped" id="example1"';
        $this->data['td_attr'] = 'style="max-width: 250px;"';

        if(($msg = $this->session->flashdata('msg')) != NULL)
        {
            $this->data['msg'] = $msg;
        }
        $this->parser->parse('articles_admin/index.tpl', $this->data);
    }

    public function add()
    {
        $this->form_validation->set_rules('article_name', 'Article Name', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('article_cat_id', 'Article Category', 'required');
        $this->form_validation->set_rules('article_tags', 'Article Tags', 'regex_match["/.+,?/"]');
        $this->form_validation->set_rules('article_status', 'Article Status', 'required');
        $this->form_validation->set_rules('article_des', 'Article Description', 'required');
        $this->form_validation->set_rules('article_content', 'Article Content', 'required');

        if($this->form_validation->run() == FAlSE)
        {
            $this->data['errors'] = validation_errors();
            $this->parser->parse('articles_admin/add.tpl', $this->data);
        }
        else
        {
            if($this->upload->do_upload('article_image') == FALSE)
            {
                $this->data['errors'] = $this->upload->display_errors();
                $this->parser->parse('articles_admin/add.tpl', $this->data);
            }
            else
            {
                $file_data = $this->upload->data();
                $new_article = array(
                    'article_name' => $_POST['article_name'],
                    'article_des' => $_POST['article_des'],
                    'article_content' => $_POST['article_content'],
                    'article_cat_id' => $_POST['article_cat_id'],
                    'article_cat_status' => $_POST['article_cat_status'],
                    'article_cat_tags' => $_POST['article_cat_tags'],
                    'article_thumbnail' => $file_data['file_name'],
                );
                $this->article_model->insert($new_article);
                $this->session->set_flashdata('msg', 'Added new article successfully.');
                redirect(admin_url('article'));
            }
        }
    }

    public function edit($article_id = '')
    {
        $article = $this->article_model->get_article_by_id($article_id);
        if(empty($article))
        {
            redirect(admin_url('article'));
        }
        else
        {
            $this->data['article'] = $article;

            $this->form_validation->set_rules('article_name', 'Article Name', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('article_cat_id', 'Article Category', 'required');
            $this->form_validation->set_rules('article_tags', 'Article Tags', 'regex_match["/.+,?/"]');
            $this->form_validation->set_rules('article_status', 'Article Status', 'required');
            $this->form_validation->set_rules('article_des', 'Article Description', 'required');
            $this->form_validation->set_rules('article_content', 'Article Content', 'required');

            if($this->form_validation->run() == FALSE)
            {
                $this->data['errors'] = validation_errors();
                $this->parser->parse('articles_admin/edit.tpl', $this->data);
            }
            else
            {
                $update = array(
                    'article_name' => $_POST['article_name'],
                    'article_cat_id' => $_POST['article_cat_id'],
                    'article_des' => $_POST['article_des'],
                    'article_content' => $_POST['article_content'],
                    'article_cat_status' => $_POST['article_cat_status'],
                    'article_cat_tags' => $_POST['article_cat_tags'],
                );
                if(isset($_FILES['article_image']) && ($_FILES['article_image']['size'] > 0))
                {
//					var_dump($_FILES['article_image']);
                    if($this->upload->do_upload('article_image') == FALSE)
                    {
                        $this->data['errors'] = $this->upload->display_errors();
                        $this->parser->parse('articles_admin/edit.tpl', $this->data);
                        return;
                    }
                    else
                    {
                        $file_data = $this->upload->data();
                        $update['article_thumbnail'] = $file_data['file_name'];
                    }
                }
                $this->article_model->update($article_id, $update);
                $this->session->set_flashdata('msg', "Updated article successfully.");
                redirect(admin_url('article'));
            }
        }
    }

    public function delete($article_id = '')
    {
        $this->article_model->delete($article_id);
        $this->session->set_flashdata('msg', "Deleted article successfully.");
        redirect(admin_url('article'));
    }

    public function related($article_id = '')
    {
        var_dump($this->article_model->get_related_to($article_id, 5, 'tags'));
    }

}