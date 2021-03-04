<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\SkeletonBundle\Tests;

use Contao\SkeletonBundle\ContentelementInsertagBundle;
use PHPUnit\Framework\TestCase;

class ContaoInsertagBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContentelementInsertagBundle();

        $this->assertInstanceOf('Contao\SkeletonBundle\ContentelementInsertagBundle', $bundle);
    }
}
