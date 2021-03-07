<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) Sun You
 *
 * @license LGPL-3.0-or-later
 */

namespace Suntzu72\ContaoInserttagBundle\Tests;

use Suntzu72\ContaoInserttagBundle\ContaoInserttagBundle;
use \PHPUnit\Framework\TestCase;

class ContaoInserttagBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new \Suntzu72\ContaoInserttagBundle\ContaoInserttagBundle();

        $this->assertInstanceOf('Suntzu72\ContaoInserttagBundle\ContaoInserttagBundle', $bundle);

    }

    public function testJusttrue(): void
    {
        $this->assertTrue(true);
    }
}
