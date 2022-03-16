<?php
class Welcome extends Trongate {

    function index() {
        $this->view('welcome');
    }
    function test() {
      $this->view('css_demo');
    }

    function demo() {
      $data['view_module'] = 'welcome';
      $data['view_file'] = 'demo';
      $this->template('public', $data);
    }
}
