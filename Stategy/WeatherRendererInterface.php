<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 17:37
 */

interface WeatherRendererInterface
{
    /**
     * Renders a URI and returns the Response content.
     *
     * @param string|ControllerReference $uri
     * @param Request $request A Request instance
     * @param array $options An array of options
     *
     * @return Response A Response instance
     */
    public function render($url, Request $request, array $options = []);
    /**
     * @return string The strategy name
     */
    public function getName();
}