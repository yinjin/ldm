<?php

/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2016/9/25
 * Time: 下午9:39
 */
namespace App\Controller;
use Common\Controller\HomebaseController;

class IndexController extends HomebaseController
{
    //更新
    public function update() {
        $data = array(
            'version' => '00.00.0002',
            'android' => 'http://www.ldmao.com/zwbst.apk',
            'apple' => 'http://www.ldmao.com/zwbst_apple.ipa'
        );
        $this->ajaxReturn($data,'JSON');
    }
}
