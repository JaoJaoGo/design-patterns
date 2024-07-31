<?php

namespace Core\Creational\Builder\Conceptual;

interface SmartPhoneInterface {
    public function reset(): void;
    public function addGpu(): SmartPhoneInterface;
    public function addCpu(): SmartPhoneInterface;
    public function addRam(): SmartPhoneInterface;
    public function addSensors(): SmartPhoneInterface;
    public function addModel(): SmartPhoneInterface;
    public function getSmartPhone(): SmartPhone;
}