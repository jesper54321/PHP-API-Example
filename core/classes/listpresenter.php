<?php
class ListPresenter {
	public $fields;
	public $data;
	public $html;

	public function __construct($fields, $data) {
		$this->fields = $fields;
		$this->data = $data;
	}

	public function create() {	
		$this->html = "<table border=\"1\">\n<thead>\n<tr>\n";
		foreach($this->fields as $value) {
			$this->html .= "<th>".$value."</th>\n";
		}
		$this->html .= "</tr>\n</thead>\n<tbody>\n";

		foreach($this->data as $key => $value) {
			$this->html .= "<tr>\n";
			foreach($this->fields as $key2 => $value2) {
				$this->html .= "<td>" . $value[$key2] . "</td>";
			}
			$this->html .= "</tr>\n";
		}
		$this->html .= "</tbody>\n</table>\n";

		return $this->html;
	}
}