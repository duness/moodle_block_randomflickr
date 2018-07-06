<?php
 
class block_randomflickr_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
 
		$mform->addElement('text', 'config_title', get_string('blocktitle', 'block_randomflickr'));
		$mform->setDefault('config_title', 'Pics of cats');
		$mform->setType('config_title', PARAM_TEXT);

        $mform->addElement('text', 'config_text', get_string('blockstring', 'block_randomflickr'));
        $mform->setDefault('config_text', 'cat');
        $mform->setType('config_text', PARAM_RAW);
	}
}
