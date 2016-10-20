<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20.10.2016
 * Time: 10:17
 */

namespace Wyndala\Tests\Services;

use PHPUnit\Framework\TestCase;
use Wyndala\NormalizeIt\Provider\BooleanNormalizeProvider;

class BooleanNormalizeProviderTest extends TestCase
{
    /**
     * @dataProvider booleanDataProvider
     * @param $data
     * @param $result
     * @test
     */

    public function normalizerTest($data, $result)
    {
        $normalizer = new BooleanNormalizeProvider();
        $this->assertEquals($result, $normalizer->normalize($data));
    }

    public function booleanDataProvider()
    {
        return [
            'number 1 case' => [1, true],
            'number 0 case' => [0, false],
            'true case' => [true, true],
            'ja case' => ['ja', true],
            'nein case' => ['nein', false],
            'yes case' => ['yes', true],
            'no case' => ['no', false],
            'si case' => ['si', true],
            'y case' => ['y', true],
            'n case' => ['n', false]
        ];
    }
}