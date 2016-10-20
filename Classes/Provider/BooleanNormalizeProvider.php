<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20.10.2016
 * Time: 10:14
 */

namespace Wyndala\NormalizeIt\Provider;

class BooleanNormalizeProvider extends AbstractNormalizeProvider
{

    private $nonLanguageMatchTable = array(
        1 => true,
        0 => false,
        true => true,
        false => false,
        'y' => true,
        'n' => false
    );

    private $languageMatchTable = array(
        'ja' => true,
        'nein' => false,
        'yes' => true,
        'no' => false,
        'si' => true
    );

    private $matchTable = array();

    public function __construct()
    {
        $this->matchTable = $this->mergeMatchTable();
    }

    private function mergeMatchTable()
    {
        return $this->matchTable + $this->nonLanguageMatchTable + $this->languageMatchTable;
    }

    /**
     * @param $data
     * @return boolean
     */
    function normalize($data)
    {
        if (isset($this->matchTable[$data])) {
            return $this->matchTable[$data];
        }

        return $data;
    }
}