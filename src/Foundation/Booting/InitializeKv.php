<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 16/4/12
 * Time: 12:14
 */

namespace Zan\Framework\Foundation\Booting;

use Zan\Framework\Contract\Foundation\Bootable;
use Zan\Framework\Foundation\Application;
use Zan\Framework\Foundation\Core\ConfigLoader;
use Zan\Framework\Foundation\Core\Path;
use Zan\Framework\Store\Facade\KV;

class InitializeKv implements Bootable
{
    public function bootstrap(Application $app)
    {
        $kvMap = ConfigLoader::getInstance()->load(Path::getKvPath());
        KV::initConfigMap($kvMap);
    }
}