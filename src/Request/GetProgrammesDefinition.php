<?php

namespace Yuzu\Effiliation\Request;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * GetProgrammesDefinition
 *
 * @author Olivier Mouren <olivier@yuzu.co>
 */
class GetProgrammesDefinition extends AbstractRequestDefinition
{
    public function getMethod()
    {
        return 'GET';
    }

    public function getBaseUrl()
    {
        return '/apiv2/programs.json';
    }

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined([
            'filter',
            'lg',
            'mode',
            'com',
            'country',
            'categories',
            'score'
        ]);
        $resolver->setRequired('filter');
        $resolver->setAllowedValues('filter', ['all', 'mines', 'recommendation', 'active', 'pending', 'unregistered', 'refused']);
        $resolver->setAllowedValues('lg', ['fr', 'en', 'es', 'it', 'pt', 'de', 'nl']);
        $resolver->setAllowedValues('mode', ['new', 'challenge', 'exclu']);
    }
}
