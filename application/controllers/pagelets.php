<?php
class Pagelets extends CI_Controller {
    public function view($pagelet = 'home')
    {
        if (!file_exists('application/views/pagelets/'.$pagelet.'.html'))
        {
            show_404();
        }
        $this->load->view('pagelets/'.$pagelet.'.html');
    }
}
?>
