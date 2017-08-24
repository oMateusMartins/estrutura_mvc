<?php

class homeController extends controller {

    public function index() {
        $var = 'nome';
        $this->loadView('home');
    }
}