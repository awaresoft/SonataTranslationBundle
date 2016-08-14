<?php

namespace Awaresoft\Sonata\TranslationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * AwaresoftSonataTranslationBundle class
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class AwaresoftSonataTranslationBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataTranslationBundle';
    }
}