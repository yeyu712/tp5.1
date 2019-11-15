<?php
namespace app\controller;

class Before extends Controller
{
    protected $beforeAction =[
        'first'
    ];

    protected function first()
    {
        echo 'first<br/>';
    }

    protected function second()
    {
        echo 'second<br/>';
    }
    
    protected function third()
    {
        echo 'third<br/>';
    }

    public function index()
    {
        return 'index';
    }

    public function one()
    {
        return 'one';
    }
}