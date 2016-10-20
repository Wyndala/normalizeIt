<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20.10.2016
 * Time: 10:10
 */

namespace Wyndala\NormalizeIt\Provider;

abstract class AbstractNormalizeProvider {
    abstract function normalize($data);
}