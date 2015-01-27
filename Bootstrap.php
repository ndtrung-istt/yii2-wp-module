<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace istt\wp;

use yii\base\BootstrapInterface;
use yii\web\GroupUrlRule;
use yii\console\Application as ConsoleApplication;
use yii\db\Connection;

/**
 * Bootstrap class registers module and user application component. It also creates some url rules which will be applied
 * when UrlManager.enablePrettyUrl is enabled.
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Bootstrap implements BootstrapInterface
{

    /** @inheritdoc */
    public function bootstrap($app)
    {
        /** @var $module Module */
        if ($app->hasModule('wp') && ($module = $app->getModule('wp')) instanceof Module) {
            if ($app instanceof ConsoleApplication) {
                $module->controllerNamespace = 'istt\wp\commands';
            } else {
                $configUrlRule = [
                    'prefix' => $module->urlPrefix,
                    'rules'  => $module->urlRules
                ];

                if ($module->urlPrefix != 'wp') {
                    $configUrlRule['routePrefix'] = 'wp';
                }

                $app->get('urlManager')->rules[] = new GroupUrlRule($configUrlRule);

            }

            $app->get('i18n')->translations['wp*'] = [
                'class'    => 'yii\i18n\PhpMessageSource',
                'basePath' => __DIR__ . '/messages',
            ];
            if ($module->db instanceof Connection){
            	$app->set('gtmDb', $module->db);
            }
        }
    }
}