<?php

/*
 * This file is part of the FastCodeFormAnnotationBundle package.
 *
 * (c) Miguel Malavé <mmalave.fastcode@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FastCode\Bundle\FormAnnotationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Miguel Malavé <mmalave.fastcode@gmail.com>
 */
class FastCodeFormAnnotationBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
