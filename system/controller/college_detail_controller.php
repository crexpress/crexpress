<?php if (!defined('CREXO')) exit('No Trespassing!');

class College_detail_Controller extends Crexo_Controller {

	public function front_index(){
		$this->data['styles'] = Html::styles( array( 
			'bootstrap.css'	=>	'all',
			'bootstrap.min.css' => 'all',
			'style.css' => 'all',
			//contains the *essential* css needed for the slider to work
			'bjqs.css' => 'all',
			'initcarousel.css' => 'all',
			//contains additional styles used to set up this demo page - not required for the slider
			'demo.css' => 'all',
		));

		$this->data['scripts'] = Html::scripts(array(
			'jquery.min.js',
			'jquery.js?ver=1.7.2',
			'amazingcarousel.js?ver=1.2',
			'initcarousel.js',
			'bjqs-1.3.min.js'
		));

		$this->data['meta_title']			=	$this->model['crexo']->meta_title($this->slug);
		$this->data['meta_description']		= 	$this->model['crexo']->meta_description($this->slug);
		$this->data['meta_keywords']		= 	$this->model['crexo']->meta_keywords($this->slug);
		
		$this->data['page_title']		=	$this->model[$this->page_template]->page_title($this->slug);
		$this->data['page_content']		=	$this->model[$this->page_template]->page_content($this->slug);
		$this->data['colleges']			=	$this->model[$this->page_template]->colleges();
		$this->data['featured_image']	=	$this->model[$this->page_template]->featured_image($this->slug,$width='200',$height='200',$class='');

		$this->data['about_us']		=	$this->model[$this->page_template]->about_us($this->slug);
		$this->data['courses']		=	$this->model[$this->page_template]->courses($this->slug);
		$this->data['contact_us']	=	$this->model[$this->page_template]->contact_us($this->slug);
		
		parent::load();
	}
}