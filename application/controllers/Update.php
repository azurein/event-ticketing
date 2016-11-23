<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends Main_Controller {

	public $model_2;
	public $model_3;
	public $model_4;
	public $model_5;

   	public function __construct()
	{
		parent::__construct();
		$this->model_2 = FALSE;
		$this->model_3 = FALSE;
		$this->model_4 = FALSE;
		$this->model_5 = FALSE;

		if($this->ping($this->config->item('model_2'))) {
			$this->load->model("Update_model_2","update_2");
			$this->model_2 = TRUE;
		}
		else if($this->ping($this->config->item('model_3'))) {
			$this->load->model("Update_model_3","update_3");
			$this->model_3 = TRUE;
		}
		else if($this->ping($this->config->item('model_4'))) {
			$this->load->model("Update_model_4","update_4");
			$this->model_4 = TRUE;
		}
		else if($this->ping($this->config->item('model_5'))) {
			$this->load->model("Update_model_5","update_5");
			$this->model_5 = TRUE;
		}
	}

	public function index()
	{
		if(isset($_SESSION['user_id'])) {
			if($this->model_2) {
				$this->update_2->lastUpdate();
				echo "<script>alert('Update berhasil dari ".$this->config->item('model_2')."');</script>";
			}
			else if($this->model_3) {
				$this->update_3->lastUpdate();
				echo "<script>alert('Update berhasil dari ".$this->config->item('model_3')."');</script>";
			}
			else if($this->model_4) {
				$this->update_4->lastUpdate();
				echo "<script>alert('Update berhasil dari ".$this->config->item('model_4')."');</script>";
			} else if($this->model_5) {
				$this->update_5->lastUpdate();
				echo "<script>alert('Update berhasil dari ".$this->config->item('model_5')."');</script>";
			} else {
				echo "<script>alert('Update gagal');</script>";
			}
			
        } else {
            header('Location: '.base_url());
        }
	}

	// Function to check response time
	public function ping($host,$port=80,$timeout=1) {
	    $fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
	    if (!$fsock) {
	    	// fclose();
	    	return FALSE;
	    }
	    else {
	    	// fclose();
			return TRUE;
	    }
	}

}
