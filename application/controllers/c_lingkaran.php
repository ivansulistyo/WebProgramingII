<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class c_lingkaran extends CI_Controller{
        public function lingkaran($n)
        {
            $this->load->model('m_lingkaran');

            $data['phi'] = 3.14; 
            $data['r'] = $n;
            $data['hasil'] = $this->m_lingkaran->jumlah($n);
            $this->load->view('v_lingkaran', $data);
        }

    }
?>