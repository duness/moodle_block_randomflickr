<?php

class block_randomflickr extends block_base {
    public function init() {
        $this->title = get_string('defaulttitle', 'block_randomflickr');
    }

    public function get_content() {
	    if ($this->content !== null) {
	      return $this->content;
	    }

	    $result = '<div class="container-img"><img src="https://loremflickr.com/500/500/' . $this->config->text . '"/></div>';
	    $this->content         =  new stdClass;
	    $this->content->text   = $result;

	    return $this->content;
	}

	public function specialization() {
	    if (isset($this->config)) {
	        if (empty($this->config->title)) {
	            $this->title = get_string('defaulttitle', 'block_randomflickr');            
	        } else {
	            $this->title = $this->config->title;
	        }
	 
	        if (empty($this->config->text)) {
	            $this->config->text = get_string('defaulttext', 'block_randomflickr');
	        }
	    }
	}
}
