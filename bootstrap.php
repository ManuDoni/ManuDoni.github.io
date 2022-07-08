<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */
$events->beforeBuild(function (Jigsaw $jigsaw) {
    //carica l'ultima versione del gist del calcolatore di orari
    $jigsaw->setConfig('time_calculator_html', file_get_contents('https://gist.githubusercontent.com/ManuDoni/7b65568541d333b422678657b536f771/raw/'));
});