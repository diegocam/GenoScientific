<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class site extends CI_Controller {

	public $decription = "Geno Scientific Molecular Pathology Laboratory offers state of the art molecular testing. ";
	public $keywords1 = "Medical services, GenoScientific Molecular Diagnostics Laboratory, Genotype Molecular Testing, ";
	public $keywords2 = ", Medical Professional Plaza, 2 Ethel Road, Suite 203C, Edison, NJ";

	function __construct() {
		parent::__construct();
		session_start();
	}

	public function script_tag($path, $is_external = FALSE) {
		if ($is_external) {
			$script = '<script src="' . $path . '" ></script>';
		} else {
			$script = '<script src="' . base_url() . $path . '" ></script>';
		}

		return $script;
	}

	public function index() {
		$data["links"][] = link_tag("styles/home.css");
		$data['title'] = "Welcome";
		$data['meta_desc'] = $this->decription . "We offer testing for leukemia, lymphoma, solid tumors, and molecular markers associated with certain diseases. Our test repertoire is based on the latest research";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", GenoScientific Home" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('content/welcome_message');
		$this->load->view('templates/footer');
	}

	public function womens_health() {
		$data["links"][] = link_tag("styles/womens_health.css");
		$data['title'] = "Women's Health";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", women genotype, women std" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/womens_health');
		$this->load->view('templates/footer');
	}

	public function cardiovascular() {
		$data['title'] = "Cardiovascular Genetics";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", cardiovascular genotype, cardiovascular molecules" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/cardiovascular');
		$this->load->view('templates/footer');
	}

	public function cardiovascular_page($page) {
		$data['title'] = ucfirst(str_replace("-", " ", $page));
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", cardiovascular genes, cardiovascular genotype" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/cardiovascular_pages/' . $page);
		$this->load->view('templates/footer');
	}

	public function download_forms() {
		$data["links"][] = link_tag("styles/download_forms.css");
		$data['title'] = "Download Forms";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ",download forms, forms, downloads" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/download_forms');
		$this->load->view('templates/footer');
	}

	public function cancer_genetics() {
		$data["links"][] = link_tag("styles/cancer_genetics.css");
		$data['title'] = "Cancer Genetics";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", download forms, forms, downloads" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/cancer_genetics');
		$this->load->view('templates/footer');
	}

	public function cancer_genetics_page($page) {
		$data['title'] = ucfirst(str_replace("-", " ", $page));
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", cancer genes, cancer genotype" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/cancer_genetics_pages/' . $page);
		$this->load->view('templates/footer');
	}

	public function cytogenetics() {
		$data['title'] = "Cytogenetics and Fish";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", fish genotype, diseases" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/cytogenetics');
		$this->load->view('templates/footer');
	}

	public function pharmacogenomics() {
		$data['title'] = "Pharmacogenomics";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", fish genotype, diseases" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/pharmacogenomics');
		$this->load->view('templates/footer');
	}

	public function anatomics() {
		$data['title'] = "Anatomics";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/anatomics');
		$this->load->view('templates/footer');
	}

	public function quality_compliance() {
		$data['title'] = "Quality and Compliance";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/quality_compliance');
		$this->load->view('templates/footer');
	}

	public function infectious_diseases() {
		$data['title'] = "Infectious Diseases";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", diseases genotype, infectious, diseases" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/infectious_diseases');
		$this->load->view('templates/footer');
	}

	public function contact() {
		$data["links"][] = link_tag("styles/contact.css");
		$data['title'] = "Contact Us";
		$data['meta_desc'] = $this->decription . "GenoScientific Molecular Diagnostics Laboratory";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", get in touch, questions, support" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/contact');
		$this->load->view('templates/footer');
	}

	public function about() {
		$data["links"][] = link_tag("styles/about_us.css");
		$data['title'] = "About Us";
		$data['meta_desc'] = $this->decription . " About us. Medical services, GenoScientific Molecular Diagnostics Laboratory, A key strength of GenoScientific...  We are a vigorous program in the development and validation of cutting edge tests in-house, with the goal of translating basic molecular knowledge to the actual practice of clinical medicine.";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", read more, learn, who we are, about genotype" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/about-us');
		$this->load->view('templates/footer');
	}

	public function insurances() {
		$data["links"][] = link_tag("styles/insurances.css");
		$data['title'] = "Insurance";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", how to pay, insurance payments, what insurances" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/insurances');
		$this->load->view('templates/footer');
	}

	public function locations() {
		$data["links"][] = link_tag("styles/locations.css");
		$data["links"][] = $this->script_tag("https://maps.googleapis.com/maps/api/js", TRUE);
		$data["links"][] = $this->script_tag("scripts/locations.js");
		$data['title'] = "Locations";
		$data['meta_desc'] = $this->decription . "";
		$data['meta_keywords'] = $this->keywords1 . $data['title'] . ", where, maps, location" . $this->keywords2;
		$this->load->view('templates/html_header', $data);
		$this->load->view('templates/header');
		$this->load->view('templates/hidden_sidebar');
		$this->load->view('content/locations');
		$this->load->view('templates/footer');
	}

	public function about_us() {
		$this->about();
	}

	public function contact_us() {
		$this->contact();
	}

	public function genetic_testing() {
		$this->index();
	}

	public function personal_medicine() {
		$this->index();
	}

	public function gdx_services() {
		$this->index();
	}

	public function quality__compliance() {
		$this->index();
	}

	public function reporting_portal() {
		$this->index();
	}

	public function cancerous_testing() {
		$this->cancer_genetics();
	}

	public function requisitions__reporting() {
		$this->index();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */