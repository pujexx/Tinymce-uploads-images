<?php 

class Uploads extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('m_attachment');
	}

	public function index(){
		$this->load->view('upload/iframe_file_upload');
	}

	public function upload(){
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
       	$config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload()):

            $data = array('error' => $this->upload->display_errors());
        	
            $this->load->view("upload/iframe_file_upload", $data);

        else:

            $data = array('upload_data' => $this->upload->data());
            $upload =
                array(
                    'file'=> $data['upload_data']['file_name'],
                    'name'=>$data['upload_data']['orig_name'],
                    'type' =>  $data['upload_data']['file_type'],
                    'date' => date('Y-m-d')
                    );
            $insert_id = $this->m_attachment->add_attachment($upload);
            $data['insert_id'] = $insert_id;
            $data['success_upload'] = "upload/iframe_file_success";
            $this->load->view('upload/iframe_file_upload',$data);
           
        endif;  
	}
    public function edit(){
	
     	$this->form_validation->set_rules('insert_id', 'insert_id', 'required');
       if($this->form_validation->run()  ==true):
	
            $update = 
                array(
                    'name'=>$this->input->post('name'),
                    'caption'=>$this->input->post('caption'),
                    'description'=>$this->input->post('description'),
                    'alternate' => $this->input->post('alternate')
                   

                 );
            	$id = $this->input->post('insert_id');
            $this->m_attachment->edit_attachment($id,$update);
            
            echo 'success';
        endif;
       
    }
   public function gallery (){
			
			$m = $this->input->get('m')?$this->input->get('m') : '';
			$year='';
			$month ='';
			if($m !=''):
				$i = explode('-', $m);
				$year = $i[0];
				$month = $i[1];
			endif;
			
			$data['year_month']= $this->m_attachment->get_year_month()->result();

            $data['gallerys'] = $this->m_attachment->get_attachments('published',$year,$month);
           

            $this->load->view('upload/iframe_file_list',$data);
	}
    public function deleted(){
       
        $this->form_validation->set_rules('insert_id', 'insert_id', 'required');
        if($this->form_validation->run()  ==true):
            $id = $this->input->post('insert_id');
            $this->m_attachment->edit_attachment($id,array('status'=>'deleted'));
        endif;

    }

} 
 ?>
