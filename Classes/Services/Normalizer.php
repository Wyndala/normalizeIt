<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20.10.2016
 * Time: 10:02
 */

namespace Wyndala\NormalizeIt\Services;

class Normalizer
{

    public function __construct()
    {

    }

    /**
     * @param $data
     * @param $normalizeProvider
     * @return mixed
     * @throws \Exception
     */
    public function normalize($data, $normalizeProvider)
    {
        if (method_exists($normalizeProvider,'normalize')) {
            return $normalizeProvider->normalize($data);
        } else {
            throw new \Exception('Incorrect NormalizeProvider given!');
        }
    }
}