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

namespace OpenDesa\Legacy\Test\Traits;

use OpenDesa\Legacy\Test\TestRequest;

/**
 * @internal
 */
trait FeatureTest
{
    /** @var TestRequest */
    protected $request;

    /**
     * @before
     */
    public function createRequest(): void
    {
        $this->request = new TestRequest($this);
    }

    /**
     * Request to Controller.
     *
     * @param string       $httpMethod HTTP method
     * @param array|string $argv       array of controller,method,arg|uri
     * @param array        $params     POST parameters/Query string
     */
    public function request(string $httpMethod, $argv, array $params = []): string
    {
        return $this->request->request($httpMethod, $argv, $params);
    }

    /**
     * Asserts Redirect.
     *
     * @param string $uri  URI to redirect
     * @param int    $code response code
     */
    public function assertRedirect(string $uri, ?int $code = null): void
    {
        $this->request->assertRedirect($uri, $code);
    }

    /**
     * Asserts HTTP response code.
     */
    public function assertResponseCode(int $code)
    {
        $this->request->assertStatus($code);
    }
}
