<?php
/**
 * Created by PhpStorm.
 * User: Dizzy
 * Date: 14-7-2016
 * Time: 01:11
 */

namespace Dizzy\Trakt;

use Dizzy\Trakt\Api\Movies;
use GuzzleHttp\ClientInterface;

/**
 * Class Trakt
 * @package Dizzy\Trakt
 */
class Trakt
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var Movies
     */
    public $movies;

    /**
     * Trakt constructor.
     */
    public function __construct()
    {
        $this->client = TraktHttpClient::make();
        $this->createEndpointsWrappers();
    }

    /**
     * Creates a wrapper for each endpoint and loads it.
     */
    private function createEndpointsWrappers()
    {
        $this->movies = new Movies($this->client);
    }
}