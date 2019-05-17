<?php
/**
 * Created by PhpStorm.
 * User: administrato
 * Date: 2019/5/17
 * Time: 15:59
 */

namespace ESD\Plugins\Swagger;

use ESD\BaseServer\Server\Context;
use ESD\BaseServer\Server\PlugIn\AbstractPlugin;

class SwaggerPlugin extends AbstractPlugin
{

    /**
     * 获取插件名字
     * @return string
     */
    public function getName(): string
    {
        return "Swagger";
    }

    /**
     * 初始化
     * @param Context $context
     * @return mixed
     */
    public function beforeServerStart(Context $context)
    {
        return;
    }

    /**
     * 在进程启动前
     * @param Context $context
     * @return mixed
     */
    public function beforeProcessStart(Context $context)
    {
        $this->ready();
    }
}