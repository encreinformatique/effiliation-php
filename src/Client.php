<?php

namespace Yuzu\Effiliation;

use Yuzu\Effiliation\Http\Response;
use Yuzu\Effiliation\Request\GetProgrammesDefinition;
use Yuzu\Effiliation\Request\GetTransactionsDefinition;
use Yuzu\Effiliation\Request\RequestDefinitionInterface;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;

/**
 * Class Client
 *
 * @author Olivier Mouren <olivier@yuzu.co>
 */
class Client implements ClientInterface
{
    const EFFILIATION_API_ENDPOINT = 'http://apiv2.effiliation.com';

    private $apiToken;

    protected $httpClient;

    /**
     * Constructor.
     * @param $apiToken
     */
    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;
    }

    public function getClient(): GuzzleClientInterface
    {
        if (empty($this->httpClient)) {
            $this->httpClient = new GuzzleClient([
                'base_uri' => self::EFFILIATION_API_ENDPOINT
            ]);
        }

        return $this->httpClient;
    }

    private function send(RequestDefinitionInterface $definition)
    {
        $definition->addRequiredOption('key', $this->apiToken);

        $response = $this->getClient()->request(
            $definition->getMethod(),
            $definition->getUrl()
        );

        return new Response($response->getStatusCode(), $response->getBody()->getContents());
    }

    /**
     * @doc http://apiv2.effiliation.com/apiv2/doc/programs.htm
     * @param array $options
     * @return Http\Response
     */
    public function getProgrammes(array $options = []): Response
    {
        return $this->send(new GetProgrammesDefinition($options));
    }

    /**
     * @doc http://apiv2.effiliation.com/apiv2/doc/transactions.htm
     * @param array $options
     * @return Http\Response
     */
    public function getTransactions(array $options = []): Response
    {
        return $this->send(new GetTransactionsDefinition($options));
    }
}
