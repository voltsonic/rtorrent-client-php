<?php
declare(strict_types=1);

namespace VoltsonicTests\Traits;

trait ClientGenericResponsesTrait {
    /**
     * Handles a generic response code from xmlrpc setting for tests.
     *
     * @param $completeCode
     * @return callable
     */
    protected function responseCode(&$completeCode): callable {
        return function($complete) use(&$completeCode) {
            $completeCode = $complete;
        };
    }

    protected function responseCodeAssert($completeCode, $message = 'Code: {code}', $codeSuccess = 0){
        $this->assertTrue($completeCode == $codeSuccess, str_replace('{code}', $completeCode, $message));
    }
}