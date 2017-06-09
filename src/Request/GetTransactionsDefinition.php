<?php

namespace Yuzu\Effiliation\Request;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * GetTransactionsDefinition
 *
 * @author Olivier Mouren <olivier@yuzu.co>
 */
class GetTransactionsDefinition extends AbstractRequestDefinition
{
    public function getMethod()
    {
        return 'GET';
    }

    public function getBaseUrl()
    {
        return '/apiv2/transaction.json';
    }

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined([
            'start',
            'end',
            'type',
            'effi_id',
            'id_affilieur',
            'fields',
            'all',
        ]);
        $resolver->setAllowedValues('all', ['yes', 'no']);
        $resolver->setAllowedValues('type', ['date', 'datetran']);
    }
}
