<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 2/7/2018
 * Time: 10:50 AM
 */

class Slides_admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('slide', 'slide_model');

        $this->load->library('form_validation');
        $this->load->helper('upload');
    }

    public function index()
    {
        if(($msg = $this->session->flashdata('msg')) != NULL)
        {
            $this->data['msg'] = $msg;
        }
        $slides = $this->slide_model->get_many();
        $slides_data_tb = array();
        foreach ($slides as $item)
        {
            $slides_data_tb[] = $item['slide_id'];
            $slides_data_tb[] = $item['slide_title'];
            $slides_data_tb[] = "<img src=".base_url()."uploads/slides/$item[slide_path] height=150 width=200 class='img-responsive img-bordered' style='margin: 5px;'>";
            $slides_data_tb[] = $item['slide_url'];
            $slides_data_tb[] = $item['slide_created_date'];
            $slides_data_tb[] = $item['slide_modified_date'];
            $slides_data_tb[] = "<a href='".admin_url('slides/'.$item['slide_id'].'/edit')."' class='btn btn-primary btn-flat btn-sm'><i class='fa fa-edit'></i></a>";
            $slides_data_tb[] = "<a href='".admin_url('slides/'.$item['slide_id'].'/delete')."' class='btn btn-danger btn-flat btn-sm'><i class='fa fa-remove'></i></a>";
        }
        $this->data['slides'] = $slides_data_tb;
        $this->data['table_attr'] = 'id="example1"';
        $this->data['td_attr'] = 'style="min-width: 100px;"';
        $this->parser->parse('slides_admin/index.tpl', $this->data);
    }

    public function add()
    {
        if(isset($_POST['slide_title']))
        {
            $this->form_validation->set_rules('slide_title', 'Slide Title', 'trim|required');
            $this->form_validation->set_rules('slide_url', 'Slide URL', 'trim|required|valid_url');
            $this->form_validation->set_rules('slide_status', 'Slide Status', 'required');
            if($this->form_validation->run() == false)
            {
                echo json_encode(array(
                    'error' => 1,
                    'msg'   => validation_errors()
                ));
            }
            else if(isset($_FILES['slide_img']) && $_FILES['slide_img']['size'] > 0)
            {
                $slide_img = $_FILES['slide_img'];
                $file_extension = substr($slide_img['name'], strrpos($slide_img['name'], '.'));
                $root_dir = APPPATH.'../uploads/slides/';
                $directory = array(
                    $root_dir . date('Y'),
                    $root_dir . date('Y') .'/'. date('m'),
                    $root_dir . date('Y') .'/'. date('m') .'/'. date('d')
                );
                if( ! make_dir($directory))
                {
                    echo json_encode(array(
                        'error' => 1,
                        'msg'   => 'Error when create the directory.'
                    ));
                }
                else
                {
                    $filename =  $directory[2] .'/'. sha1($slide_img['name']) . $file_extension;
                    if(move_uploaded_file($slide_img['tmp_name'], $filename))
                    {
                        $new_slide = $_POST;
                        $new_slide['slide_path'] = substr($filename, strlen($root_dir));
                        if(($result = $this->slide_model->insert($new_slide)) == true)
                        {
                            echo json_encode(array(
                                'error' => 0,
                                'msg'   => 'Saved successfully.'
                            ));
                        }
                        else
                        {
                            echo json_encode(array(
                                'error' => 1,
                                'msg'   => 'Error when insert the slide into db.'
                            ));
                        }
                    }
                    else
                    {
                        echo json_encode(array(
                            'error' => 1,
                            'msg'   => 'Error when save the image to directory.'
                        ));
                    }
                }
            }
            else
            {
                echo json_encode(array(
                    'error' => 1,
                    'msg'   => 'Slide Image is required.'
                ));
            }
        }
        else
        {
            $this->parser->parse('slides_admin/add.tpl', $this->data);
        }
    }

    public function edit($slide_id = '')
    {
        if(($slide = $this->slide_model->get_by_id($slide_id)) != NULL)
        {
            if(isset($_POST['slide_title']))
            {
                $this->form_validation->set_rules('slide_title', 'Slide Title', 'trim|required');
                $this->form_validation->set_rules('slide_url', 'Slide URL', 'trim|required|valid_url');
                $this->form_validation->set_rules('slide_status', 'Slide Status', 'required');
                if($this->form_validation->run() == false)
                {
                    echo json_encode(array(
                        'error' => 1,
                        'msg'   => validation_errors()
                    ));
                }
                else
                {
                    $update = $_POST;
                    if(isset($_FILES['slide_img']) && $_FILES['slide_img']['size'] > 0)
                    {
                        $slide_img = $_FILES['slide_img'];
                        $file_extension = substr($slide_img['name'], strrpos($slide_img['name'], '.'));
                        $root_dir = APPPATH . '../uploads/slides/';
                        $directory = array(
                            $root_dir . date('Y'),
                            $root_dir . date('Y') . '/' . date('m'),
                            $root_dir . date('Y') . '/' . date('m') . '/' . date('d')
                        );
                        if ( ! make_dir($directory))
                        {
                            echo json_encode(array(
                                'error' => 1,
                                'msg' => 'Error when create the directory.'
                            ));
                        }
                        else
                        {
                            $filename = $directory[2] . '/' . sha1($slide_img['name']) . $file_extension;
                            if(move_uploaded_file($slide_img['tmp_name'], $filename))
                            {
                                $update['slide_path'] = substr($filename, strlen($root_dir));
                            }
                            else
                            {
                                echo json_encode(array(
                                    'error' => 1,
                                    'msg' => 'Error when save the image to directory.'
                                ));
                                exit();
                            }
                        }
                    }
                    if(($result = $this->slide_model->update($slide_id, $update)) == true)
                    {
                        echo json_encode(array(
                            'error' => 0,
                            'msg'   => 'Updated successfully.'
                        ));
                    }
                    else
                    {
                        echo json_encode(array(
                            'error' => 1,
                            'msg'   => 'Error when update the slide.'
                        ));
                    }
                }
            }
            else
            {
                $this->data['slide'] = $slide;
                $this->parser->parse('slides_admin/edit.tpl', $this->data);
            }
        }
        else
        {
            redirect(admin_url('slides'));
        }
    }

    public function delete($slide_id = '')
    {
        if($this->slide_model->delete($slide_id))
        {
            $this->session->set_flashdata('msg', 'Deleted slide successfully.');
        }
        redirect(admin_url('slides'));
    }
}