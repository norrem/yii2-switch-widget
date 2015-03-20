<?php
/**
 * @link https://github.com/2amigos/yii2-switch-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests;

use tests\models\Model;
use Yii;

/**
 * SwitchRadioTest
 */
class SwitchRadioTest extends \PHPUnit_Framework_TestCase
{
    public function testWidget()
    {
        $model = new Model();
        $view = Yii::$app->getView();
        $content = $view->render('//switch-radio', ['model' => $model]);
        $actual = $view->render('//layouts/main', ['content' => $content]);
        file_put_contents(__DIR__ . '/data/test-switch-radio.bin', $actual);
        $expected = file_get_contents(__DIR__ . '/data/test-switch-radio.bin');
        $this->assertEquals($expected, $actual);
    }
}