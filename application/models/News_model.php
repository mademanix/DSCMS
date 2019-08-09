<?php 
class News_model extends CI_Model {

    public function __construct() 
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                $query = $this->db->get('DSCMS_news');
                return $query->result_array();
        }

        $query = $this->db->get_where('DSCMS_news', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news()
    {

        $viewed = FALSE;
        if($this->input->post('viewed'))
            $viewed = TRUE;

        $tmp = $this->session->userdata('logged_in');

        $author = $tmp['realname'];
        $date = date("Y-m-d");

        /*$slug = preg_replace('/[^A-Za-z0-9\-]/', '', (iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', strtolower(str_replace(' ', '-', $this->input->post('title'))))));*/

        $slug = time();

        $show_author = FALSE;
        if($this->input->post('author'))
            $show_author = TRUE;

        $show_date = FALSE;
        if($this->input->post('date'))
            $show_date = TRUE;

        $data = array(

            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            'author' => $author,
            'show_author' => $show_author,
            'is_viewed' => $viewed,
            'date' => $date,
            'show_date' => $show_date
        );

        return $this->db->insert('DSCMS_news', $data);
    }

    public function update_news()
    {

        $viewed = FALSE;
        if($this->input->post('viewed'))
            $viewed = TRUE;

        $tmp = $this->session->userdata('logged_in');

        $author = $tmp['realname'];
        $date = $this->input->post('u_date');

        $slug = $this->input->post('slug');

        $show_author = FALSE;
        if($this->input->post('author'))
            $show_author = TRUE;

        $show_date = FALSE;
        if($this->input->post('date'))
            $show_date = TRUE;

       /* $content = preg_replace('~\s*<br ?/?>\s*~',"<br />",$this->input->post('text'));*/
        $content = $this->input->post('text');

        $data = array(

            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'text' => ($content),
            'author' => $author,
            'show_author' => $show_author,
            'is_viewed' => $viewed,
            'date' => $date,
            'show_date' => $show_date
        );
    
        return $this->db->update("DSCMS_news", $data, array('slug' => $slug));
    }

    public function remove_news($slug) {
    
        return $this->db->delete("DSCMS_news", array('slug' => $slug)); 
    } 
}		

  	