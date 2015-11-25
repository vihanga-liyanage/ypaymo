<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller
{
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('product_model'));

        $this->data['img_path'] = base_url("assets/images/");
        $this->data['result'] = $this->product_model->get_product();
        $this->data['admin_logged'] = $this->session->userdata('logged_in');
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('description','Description', 'required');
        $this->form_validation->set_rules('availableQuality','Available Quality', 'required');
        $this->form_validation->set_rules('unitPrice','Unit Price', 'required');
        $this->form_validation->set_rules('subCategory','Sub Category', 'required');
        $this->form_validation->set_rules('brand','Brand', 'required');
        $this->form_validation->set_rules('warrantyType','Warranty Type', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            
            $this->data['admin_logged'] = $this->session->userdata('logged_in');

            $this->load->view('templates/header', $this->data);
            $this->data['img_path'] = base_url("assets/images/");
            $this->load->view('product/product_home', $this->data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $this->data);
            $this->load->view('admin_login', $this->data);
            $this->load->view('templates/footer');
        }
    }

    public function insert()
    {

        if ($this->form_validation->run() == FALSE) {
            //In case of a validation error
            $this->index();
        } else {

            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']	= '0';
            $config['max_width']  = '0';
            $config['max_height']  = '0';

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload("fileName"))
            {
                //if the uploading failed
                $this->data['image_error'] = $this->upload->display_errors('<div class="error">', '</div>');
                $this->index();
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());

                //Insert data into image table
                $this->product_model->insert_into_image($data);

                //Insert data into category table
                $upload_data = $data['upload_data'];

                $params['name'] = $this->input->post('name');
                $params['description'] = $this->input->post('description');
                $params['availableQuality'] = $this->input->post('availableQuality');
                $params['unitPrice'] = $this->input->post('unitPrice');
                $params['subCategory'] = $this->input->post('subCategory');
                $params['discount'] = $this->input->post('discount');
                $params['brand'] = $this->input->post('brand');
                $params['warrantyType'] = $this->input->post('warrantyType');
                $params['warrantyPeriod'] = $this->input->post('warrantyPeriod');
                $params['model'] = $this->input->post('model');
                $params['dimension'] = $this->input->post('dimension');
                $params['weight'] = $this->input->post('weight');
                $params['fileName'] = $upload_data['file_name'];

                $this->product_model->insert_into_product($params);

                redirect('Product');
            }
        }
    }
    public function update($id, $state = 1){

        if ($state == 1) {
            $this->load->view('templates/header', $this->data);
            $this->load->view('templates/nav');
            $temp = $this->product_model->get_given_product($id);
            $this->load->view('templates/footer');

            $this->data['cur_data'] = $temp[0];
            $this->load->view('product/product_update', $this->data);

        } else {
            if (isset($_POST['back'])) {
                redirect('Product');
            } else {
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates/header', $this->data);
                    $this->load->view('templates/nav');
                    //In case of a validation error
                    $this->data['cur_data'] = array('PId' => $id);
                    $this->load->view('product/product_update', $this->data);
                    $this->load->view('templates/footer');

                } else {

                    $data = array(
                        'id' => $id,
                        'fields' => array(
                            'name' => $this->input->post('name'),
                            'description' => $this->input->post('description'),
                            'availableQuality' => $this->input->post('availableQuality'),
                            'unitPrice' => $this->input->post('unitPrice'),
                            'subCategory' => $this->input->post('subCategory'),
                            'discount' => $this->input->post('discount'),
                            'brand' => $this->input->post('brand'),
                            'warrantyType' => $this->input->post('warrantyType'),
                            'warrantyPeriod' => $this->input->post('warrantyPeriod'),
                            'model' => $this->input->post('model'),
                            'dimension'=> $this->input->post('dimension'),
                            'weight' => $this->input->post('weight')
                        )
                    );
                    $this->product_model->update($data);
                    redirect('Product');
                }
            }
        }
    }
    public function delete($id,$state=1){
        if ($state == 1) {
            $this->load->view('templates/header', $this->data);
            $this->load->view('templates/nav');
            $temp = $this->product_model->get_given_product($id);
            $this->data['cur_data'] = $temp[0];
            $this->load->view('product/product_delete', $this->data);
            $this->load->view('templates/footer');

        } else {
            if (isset($_POST['back'])) {
                redirect('Product');
            } else {
                $data = array(
                    'id' => $id
                );
                $this->product_model->delete($data);
                redirect('Product');
            }
        }
    }


}