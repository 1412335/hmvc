<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 3:27 PM
 */

class Categories_admin extends MY_Controller
{
    protected $cats;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category', 'category_model');
        $this->load->library('form_validation');

        $this->load->config('upload');
        $config = $this->config->item('setting');
        $config['upload_path'] .= 'categories';
        $this->load->library('upload', $config);

        $this->cats = $this->category_model->get_list_cats();

        $cats_option = array();
        foreach ($this->cats as $item)
        {
            $cats_option[$item['cat_id']] = $item['cat_name'];
        }
        $this->data['cats'] = $cats_option;
        $this->data['cats_status'] = $this->status;
    }

    public function index()
    {
        if(($msg = $this->session->flashdata('msg')) != NULL)
        {
            $this->data['msg'] = $msg;
        }
        $this->data['cats_html'] = $this->show_cats($this->cats);
        $this->parser->parse('categories_admin/index.tpl', $this->data);
    }

    public function show_cats($cats, $parent_id = 0, $str = '', $i = 0)
    {
        $cats_child = array();
        $html = '';
        foreach ($cats as $key => $item)
        {
            if($item['cat_parent_id'] == $parent_id)
            {
                $cats_child[] = $item;
                unset($cats[$key]);
            }
        }
        if( ! empty($cats_child))
        {
            foreach ($cats_child as $key => $item)
            {
                if($parent_id == 0)
                {
                    $i++;
                }
                $html .= "<tr id=$item[cat_id]>
							<td>$i</td>
							<td>$item[cat_id]</td>
							<td>{$str}<a href=".base_url()."categories/$item[cat_id] target='_blank'>$item[cat_name]</a></td>
							<td><a href=".base_url()."categories/$item[cat_parent_id] target='_blank'>$item[cat_parent_name]</a></td>
							<td style='max-width: 250px'>$item[cat_des]</td>
							<td>".$this->status[$item['cat_status']]."</td>
							<td>$item[cat_created_date]</td>
							<td>$item[cat_modified_date]</td>
							<td></td>
							<td><a role='button' href=".base_url()."admin/categories/$item[cat_id]/edit class='btn btn-primary btn-flat btn-sm'><i class='fa fa-edit'></i></a></td>";

                if($item['cat_status'] == PUBLIC_STATUS) {
                    $html .= "<td><a role='button' href=" . base_url() . "admin/categories/$item[cat_id]/delete  
								onclick='return confirm(\"Are you want to delete this cat?\");' class='btn btn-danger btn-flat btn-sm'><i class='fa fa-remove'></i></a></td>";
                }
                $html .= "</tr>";
                $str .= '|---';
                $html .= $this->show_cats($cats, $item['cat_id'], $str, $i);
                $str = substr($str, 0, strlen($str) - 4);
            }
        }
        return $html;
    }

    public function add()
    {
        $this->form_validation->set_rules('cat_name', 'Category Name', 'required|trim|min_length[3]|is_unique[category.cat_name]');
        $this->form_validation->set_rules('cat_status', 'Category Status', 'required');

        if($this->form_validation->run() == false)
        {
            $this->data['errors'] = validation_errors();
            $this->parser->parse('categories_admin/add.tpl', $this->data);
        }
        else
        {
            if($this->upload->do_upload('cat_thumbnail'))
            {
                $data = $this->upload->data();
                $new_cat = array(
                    'cat_name'	=> $_POST['cat_name'],
                    'cat_des'	=> $_POST['cat_des'],
                    'cat_parent_id'	=> $_POST['cat_parent_id'],
                    'cat_status'	=> $_POST['cat_status'],
                    'cat_thumbnail'	=> $data['file_name']
                );
                $this->category_model->insert($new_cat);
                $this->session->set_flashdata('msg', 'Added new category successfully.');
                redirect(admin_url().'categories');
            }
            else
            {
                $this->data['errors'] = $this->upload->display_errors();
                $this->parser->parse('categories_admin/add.tpl', $this->data);
            }
        }
    }

    public function check_cat_name($cat_name, $cat_id)
    {
        if($this->category_model->get_one(array('cat_name' => $cat_name), $cat_id) != NULL)
        {
            $this->form_validation->set_message('check_cat_name', 'The {field} field contain a value in used.');
            return FALSE;
        }
        return TRUE;
    }

    public function edit($cat_id = '')
    {
        $cat = $this->category_model->get_by_id($cat_id);
        if(empty($cat))
        {
            redirect(admin_url('categories'));
        }
        else
        {
            $this->data['cat'] = $cat;

            $articles = $this->category_model->get_list_articles($cat_id, NULL, NULL, NULL);
            $articles_data_tb = array();
            foreach ($articles as $item)
            {
                $articles_data_tb[] = $item['article_id'];
                $articles_data_tb[] = "<a href=".base_url()."articles/$item[article_slug]-$item[article_id] target='_blank'>$item[article_name]</a>";
                $articles_data_tb[] = $item['article_des'];
                $articles_data_tb[] = $this->status[$item['article_status']];
                $articles_data_tb[] = $item['article_created_date'];
                $articles_data_tb[] = $item['article_modified_date'];
                $articles_data_tb[] = "<a class='btn btn-primary btn-flat btn-sm' href=".base_url()."admin/articles/$item[article_id]/edit><i class='fa fa-edit'></i></a>";
                $articles_data_tb[] = ($item['article_status'] == PUBLIC_STATUS) ? "<a class='btn btn-danger btn-flat btn-sm' href=".base_url()."admin/articles/$item[article_id]/delete><i class='fa fa-remove' 
                                        onclick='return confirm(\"Do you want to delete this article?\");'></i></a>" : '';
            }
            $this->data['table_attr'] = 'id="example1"';
            $this->data['td_attr'] = 'style="max-width: 250px;"';
            $this->data['articles'] = $articles_data_tb;

            $this->form_validation->set_rules('cat_name', 'Category Name', 'required|trim|min_length[3]|callback_check_cat_name['.$cat_id.']');
            $this->form_validation->set_rules('cat_status', 'Category Status', 'required');

            if($this->form_validation->run() == FALSE)
            {
                $this->data['errors'] = validation_errors();
                $this->parser->parse('categories_admin/edit.tpl', $this->data);
            }
            else
            {
                $update = array(
                    'cat_name' => $_POST['cat_name'],
                    'cat_parent_id' => $_POST['cat_parent_id'],
                    'cat_des' => $_POST['cat_des'],
                    'cat_status' => $_POST['cat_status']
                );
                if(isset($_FILES['cat_thumbnail']) && $_FILES['cat_thumbnail']['size'] > 0)
                {
                    if($this->upload->do_upload('cat_thumbnail'))
                    {
                        $data = $this->upload->data();
                        $update['cat_thumbnail'] = $data['file_name'];
                    }
                    else
                    {
                        $this->data['errors'] = $this->upload->display_errors();
                        $this->parser->parse('categories_admin/edit.tpl', $this->data);
                        return;
                    }
                }
                $this->category_model->update($cat_id, $update);
                $this->session->set_flashdata('msg', "Updated category $cat[cat_name] successfully.");
                redirect(admin_url('categories'));
            }
        }
    }

    public function delete($cat_id = '')
    {
        $this->category_model->delete($cat_id);
        $this->session->set_flashdata('msg', "Deleted category successfully.");
        redirect(admin_url('categories'));
    }

}