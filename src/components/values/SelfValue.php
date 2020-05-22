<?php
namespace extas\components\values;

use extas\components\Replace;
use extas\components\THasValue;

/**
 * Class SelfValue
 *
 * Need in a config:
 *  value:string
 *  replaces:array
 *
 * @package extas\components\values
 * @author jeyroik <jeyroik@gmail.com>
 */
class SelfValue extends ValueDispatcher
{
    use THasValue;

    /**
     * @param mixed $value
     * @return mixed|string|string[]
     * @throws \Exception
     */
    public function build($value)
    {
        if (!$this->isValid($value)) {
            throw new \Exception('Invalid value dispatcher "Self" settings');
        }

        $replaces = $this->getReplaces();

        return Replace::please()->apply($replaces)->to($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value): bool
    {
        return is_string($value);
    }
}
