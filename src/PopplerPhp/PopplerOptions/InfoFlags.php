<?php

namespace Knox\PopplerPhp\PopplerOptions;

use Knox\PopplerPhp\Constants as C;

/**
 * Trait InfoFlags
 * @package Knox\PopplerPhp\PopplerOptions
 */
trait InfoFlags
{
    /**
     * @return mixed
     */
    public function setBox()
    {
        return $this->setFlag(C::_BOX);
    }

    /**
     * @return array
     */
    protected function infoFlags()
    {
        return [C::_BOX];
    }
}
