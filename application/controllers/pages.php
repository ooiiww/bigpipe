<?php
class Pages extends CI_Controller {
    public function view($page = 'home')
    {
        if (!file_exists('application/views/pages/'.$page.'.php'))
        {
            show_404();
        }
        $data['item_list'] = array('Item 1', 'Item 2');
        $pagelets = array('news', 'recommands', 'special', 'anime', 'anime_new',
            'bangumi', 'bangumi_new', 'music', 'music_new', 'game', 'game_new',
            'science', 'science_new', 'entertainment', 'entertainment_new',
            'hot', 'tags');
        foreach ($pagelets as $pagelet) {
            $data[$pagelet] = array();
            for ($i = 1; $i < 7; $i++)
            {
                $data[$pagelet][$i] = $pagelet.' '.$i;
            }
        }
        $this->load->view('pages/'.$page, $data);
    }
}
?>
