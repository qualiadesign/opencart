<?php
class ControllerStep4 extends Controller {
	public function index() {

		$output = "\n\n" . "define('INSTALLED', '" . date('r') . "');" . "\n";
		file_put_contents(DIR_OPENCART . 'config/default.php', $output, FILE_APPEND);

		$this->children = array(
			'header',
			'footer'
		);
		
		$this->template = 'step_4.tpl';

		$this->response->setOutput($this->render());
	}
}
?>