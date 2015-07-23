<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class requests extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("model_requests");
    }

    public function test_directory($search_letter = null, $search_code = null, $search_word = null) {
        $decription = "Geno Scientific Molecular Pathology Laboratory offers state of the art molecular testing. Our laboratory test directory will look through our database to help you find what you are looking for. Click through our test directory by letter.  ";
        $keywords1 = "Medical services, GenoScientific Molecular Diagnostics Laboratory, Genotype Molecular Testing, ";
        $keywords2 = ", Medical Professional Plaza, 2 Ethel Road, Suite 203C, Edison, NJ";


        $letters['letter'] = $search_letter;


        if (isset($search_code)) {
            $search_word_cleaned = ucfirst(str_replace('-', ' ', $search_word));
            $data['title'] = "Test Directory - " . $search_code . " | " . $search_word_cleaned;
            $data['meta_desc'] = $decription . "Code " . $search_code . " , " . $search_word_cleaned;
            $data['meta_keywords'] = $keywords1 . "Laboratory Test Directory, Labroatory Code " . $search_code . ", " . $search_word_cleaned . ", " . $keywords2;

            $this->load->view('templates/html_header', $data);
            $this->load->view('templates/header');
            $this->load->view('templates/hidden_sidebar');

            $results['code_result'] = $this->model_requests->get_data_by_code($search_code);
            $results['search_code'] = $search_code;
            $results['search_letter'] = $search_letter;
            $results['search_item'] = $search_word;
            $this->load->view('content/test_directory_word', $results);
        } else {
            if (isset($search_letter)) {
                $data['title'] = "Test Directory - " . ucfirst($search_letter);
                $data['meta_desc'] = $decription . "Letter " . $search_letter;
                $data['meta_keywords'] = $keywords1 . "Laboratory Test Directory, Laboratory Letter " . $search_letter . $keywords2;

                $results['letter_result'] = $this->model_requests->get_data($letters);
            } else {
                $data['title'] = "Test Directory";
                $data['meta_desc'] = $decription;
                $data['meta_keywords'] = $keywords1 . "Laboratory Test Directory";

                $results['letter_result'] = null;
            }
            $results['search_item'] = $search_letter;
            $this->load->view('templates/html_header', $data);
            $this->load->view('templates/header');
            $this->load->view('templates/hidden_sidebar');
            $this->load->view('content/test_directory', $results);
        }

        $this->load->view('templates/footer');
    }

    public function get_data() {

        $data['letter'] = $this->input->post('letter');

        $result = $this->model_requests->get_data($data);
        if ($result) {
            $result = json_encode($result);
            echo $result;
        } else {
            echo "failed";
        }
    }

    public function get_data_by_id() {

        $data['id'] = $this->input->post('id');

        $result = $this->model_requests->get_data_by_id($data);
        if ($result) {
            $result = json_encode($result);
            echo $result;
        } else {
            echo "failed";
        }
    }

}
