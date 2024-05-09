<?php

if (!function_exists('getRequestParams')) {
    /**
     * Get request parameters.
     *
     * @param array $paramsToCheck
     * @return array
     */
    function getRequestParams(array $paramsToCheck): array
    {
        $params = [];

        foreach ($paramsToCheck as $param) {
            if (request()->has($param)) {
                $params[$param] = request()->input($param);
            }
        }

        return $params;
    }
}
