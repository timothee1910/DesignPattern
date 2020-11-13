<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 17:39
 */

class ApiFragementWeather implements WeatherRendererInterface
{
    // ...
    private $kernel;

    public function render($curl, Request $request, array $options = array())
    {
        $curl = curl_init();
// ...
        $subRequest = $this->createSubRequest($uri, $request); // ...
        $level = ob_get_level();
        try {
            return $this->kernel->handle($subRequest, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\Exception $e) {
// ...
            return new Response();
        }
    }

    public function getName()
    {
        return 'inline';
    }

}