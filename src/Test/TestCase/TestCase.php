<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021 Kenji Suzuki
 * Copyright (c) 2022 Agung Sugiarto.
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/kenjis/ci3-to-4-upgrade-helper
 * @see https://github.com/agungsugiarto/legacy-to-laravel
 */

namespace OpenDesa\Legacy\Test\TestCase;

use CodeIgniter\Test\CIUnitTestCase;
use Kenjis\PhpUnitHelper\TestDouble;
use OpenDesa\Legacy\Test\Traits\ResetInstance;

class TestCase extends CIUnitTestCase
{
    use ResetInstance;
    use TestDouble;
}
