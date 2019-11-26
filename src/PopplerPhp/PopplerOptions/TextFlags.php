<?php

namespace Knox\PopplerPhp\PopplerOptions;

use Knox\PopplerPhp\Constants as C;

/**
 * Trait TextFlags
 * @package Knox\PopplerPhp\PopplerOptions
 */
trait TextFlags
{
    /**
     * @return mixed
     */
    public function setBboxLayout()
    {
        return $this->setFlag(C::_BBOX_LAYOUT);
    }

    /**
     * @return mixed
     */
    public function setLayout()
    {
        return $this->setFlag(C::_LAYOUT);
    }

    /**
     * @return array
     */
    protected function textFlags()
    {
        return [C::_BBOX_LAYOUT, C::_LAYOUT];
    }
}
