<?php
namespace App\Presenters;
use Lewis\Presenter\AbstractPresenter;

class UserPresenter extends AbstractPresenter
{
    
    public function lastLoginDifference() {
        return $this->last_login_at->diffForHumans();
    }
}
