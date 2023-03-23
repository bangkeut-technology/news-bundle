<?php
declare(strict_types=1);

namespace BangkeutTechnology\Bundle\NewsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class BangkeutTechnologyNewsBundle
 *
 * @package BangkeutTechnology\Bundle
 * @author Vandeth THO <thovandeth@gmail.com>
 */
class BangkeutTechnologyNewsBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
