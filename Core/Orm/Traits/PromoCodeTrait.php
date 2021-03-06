<?php
//Last updated: 2019-09-27 10:25:27
namespace MillenniumFalcon\Core\Orm\Traits;

trait PromoCodeTrait
{
    /**
     * @param $pdo
     */
    static public function initData($pdo, $container)
    {

    }
    
    /**
     * @return bool
     */
    public function isValid() {
        if ($this->getStatus() != 1) {
            return false;
        }
        if ($this->getStart() && strtotime($this->getStart()) >= time()) {
            return false;
        }
        if ($this->getEnd() && strtotime($this->getEnd()) <= time()) {
            return false;
        }
        return true;
    }
}