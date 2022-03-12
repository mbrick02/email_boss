<?php
class Test_trngt_css extends Trongate {
  function test_css() {
    $data['test'] = 'test';
    $this->view('trngt_css_pg', $data);
  }

}
