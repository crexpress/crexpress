<?php if (!defined('CREXO')) exit('No Trespassing!');

class Sitemap_Controller extends Crexo_Controller {
	
	public function front_index(){
		$this->data['styles'] = Html::styles( array( 
			'style'	=>	'all',
			'initcarousel' => 'all',
			)
		);
		$this->data['scripts'] = Html::scripts(array(
				'jquery1.7.2',
				'amazingcarousel',
				'initcarousel',
				'bjqs-1.3.min',
			)
		);

		$this->data['meta_title'] = $this->model['retina']->meta_title($this->page);
		$this->data['meta_description'] = $this->model['retina']->meta_description($this->page);
		$this->data['meta_keywords'] = $this->model['retina']->meta_keywords($this->page);
		
		$this->data['page_title'] = $this->model[$this->page_template]->page_title($this->slug);
		$this->data['page_content'] = $this->model[$this->page_template]->page_content($this->slug);
		$this->data['page_alt'] 		= 	$this->model[$this->page_template]->page_alt($this->slug);
		$this->data['pages'] 			= 	$this->model[$this->page_template]->pages();
		
		parent::load();
	}
}