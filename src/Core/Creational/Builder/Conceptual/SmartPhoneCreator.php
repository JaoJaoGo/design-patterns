<?php

namespace Core\Creational\Builder\Conceptual;

class SmartPhoneCreator {
    public function __construct(protected SmartPhoneInterface $smartPhone) { }

    public function buildPhone() {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addSensors();
        $this->smartPhone->addModel();

        return $this->smartPhone->getSmartPhone();
    }

    public function buildPhoneWithoutSensors() {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addModel();

        return $this->smartPhone->getSmartPhone();
    }
}