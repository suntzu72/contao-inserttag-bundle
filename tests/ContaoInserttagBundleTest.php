<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Suntzu72\ContaoInserttagBundle\Tests;

use Suntzu72\ContaoInserttagBundle\ContentInsertagBundle;
use PHPUnit\Framework\TestCase;

class ContaoInserttagBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContentInsertagBundle();

        $this->assertInstanceOf('Suntzu72\ContentInsertagBundle\ContentInsertagBundle', $bundle);
    }
}
