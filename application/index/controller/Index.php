<?php
namespace app\index\controller;

use think\Controller;
use think\facade\Env;

class Index extends Controller
{
    public function index($name='jack')
    {

    	print_r($this->request->param());
    	// $data = Db::name('users')->find();

    	// $this->assign('data', $data);
    	// $this->assign('name', $name);

    	// return $this->fetch();
    }

    public function hello()
    {
        echo 'hello';
    }

    public function env()
    {

        throw new \Exception("手动异常");
    }
}
