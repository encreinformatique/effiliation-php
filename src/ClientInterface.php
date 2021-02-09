<?php

namespace Yuzu\Effiliation;

use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use Yuzu\Effiliation\Http\Response;

interface ClientInterface
{
    public function getClient(): GuzzleClientInterface;

    /**
     * @doc http://apiv2.effiliation.com/apiv2/doc/programs.htm
     * @param array $options
     * @return Http\Response
     */
    public function getProgrammes(array $options = []): Response;

    /**
     * @doc http://apiv2.effiliation.com/apiv2/doc/transactions.htm
     * @param array $options
     * @return Http\Response
     */
    public function getTransactions(array $options = []): Response;
}
