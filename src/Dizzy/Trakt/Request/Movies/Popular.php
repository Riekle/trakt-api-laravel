<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 15-7-2016
 * Time: 00:45
 */

namespace Dizzy\Trakt\Request\Movies;


use Dizzy\Trakt\Request\AbstractRequest;
use Dizzy\Trakt\Request\RequestType;

/**
 * Class Popular
 * @package Dizzy\Trakt\Request\Movies
 */
class Popular extends AbstractRequest
{
    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "movies/popular";
    }
}