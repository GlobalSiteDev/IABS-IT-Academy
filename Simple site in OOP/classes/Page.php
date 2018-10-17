<?php

class Page
{
    protected function _renderHeader(){
        echo require_once "html/header.html";
    }
    protected function _renderFooter(){
        echo require_once "html/footer.html";
    }
    protected function _renderContent() {
        echo require_once "html/content.html";
        echo $this->getContent();
    }
    public function render(){
        $this->_renderHeader();
        $this->_renderContent();
        $this->_renderFooter();
    }
}