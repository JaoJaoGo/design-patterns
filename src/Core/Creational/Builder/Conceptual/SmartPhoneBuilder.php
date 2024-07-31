<?php

namespace Core\Creational\Builder\Conceptual;

class SmartPhoneBuilder implements SmartPhoneInterface {
    public function __construct(
        protected SmartPhone $smartPhone,
        protected array $data,
    )
    { }

    public function reset(): void {

    }

    public function addGpu(): SmartPhoneInterface {
        $this->smartPhone->gpu = $this->data['gpu'];

        return $this;
    }

    public function addCpu(): SmartPhoneInterface {
        $this->smartPhone->cpu = $this->data['cpu'];

        return $this;
    }

    public function addRam(): SmartPhoneInterface {
        $this->smartPhone->ram = $this->data['ram'];

        return $this;
    }

    public function addSensors(): SmartPhoneInterface {
        $this->smartPhone->sensors = $this->data['sensors'];

        return $this;
    }

    public function addModel(): SmartPhoneInterface {
        $this->smartPhone->model = $this->data['model'];

        return $this;
    }

    public function getSmartPhone(): SmartPhone {
        return $this->smartPhone;
    }

}