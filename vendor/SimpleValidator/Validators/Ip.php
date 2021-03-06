<?php

/*
 * This file is part of Simple Validator.
 *
 * (c) Frédéric Guillot <contact@fredericguillot.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SimpleValidator\Validators;

use SimpleValidator\Base;

/**
 * @author Frédéric Guillot <contact@fredericguillot.com>
 */
class Ip extends Base
{
    public function execute(array $data)
    {
        if (isset($data[$this->field]) && $data[$this->field] !== '') {

            if (! filter_var($data[$this->field], FILTER_VALIDATE_IP)) {

                return false;
            }
        }

        return true;
    }
}