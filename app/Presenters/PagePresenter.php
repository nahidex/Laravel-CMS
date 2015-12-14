<?php
namespace App\Presenters;
use Lewis\Presenter\AbstractPresenter;

class PagePresenter extends AbstractPresenter
{
    
    public function prettyUri() {
        return '/' . ltrim($this->uri, '/');
    }
    
    public function linkToPaddedTitle($link) {
        $padding = str_repeat('&nbsp;', $this->depth * 4);
        
        return $padding . link_to($link, $this->title);
    }
    
    public function paddedTitle() {
    	return str_repeat('&nbsp;', $this->depth * 4).$this->title;
    }
}
