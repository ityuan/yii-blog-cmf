<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/7/13
 * Time: 下午3:35
 */

namespace plugins\wxreply;


class Plugins extends \plugins\Plugins
{
    public $info = [
        'author' => '易大师',
        'version' => 'v1.0',
        'id' => 'wxreply',
        'name' => '微信自动回复',
        'description' => '微信自动回复'
    ];

    public function wechat($app)
    {
        $app->events->addListener('yii\web\Controller','afterAction', 'plugins\wxreply\ReplyListener');
    }

}