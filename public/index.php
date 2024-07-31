<?php

require_once '../vendor/autoload.php';

// use Core\Creational\Example;

// $example = new Example();
// var_dump($example->teste());

// use Core\Creational\Builder\Conceptual\ApplePhone;
// use Core\Creational\Builder\Conceptual\SamsungPhone;
// use Core\Creational\Builder\Conceptual\SmartPhoneCreator;
// use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;

// $galaxyS20 = new SamsungPhone(
//     cpu: 'xpto',
// );

// $galaxyS20->ram = 12;
// $galaxyS20->sensors = [''];

// $galaxyS20 = new SmartPhoneBuilder(
//     smartPhone: new SamsungPhone(),
//     data: [
//         'gpu' => 'XPTO',
//         'cpu' => 'XPTO',
//         'ram' => 12,
//         'sensors' => ['XPTO'],
//         'model' => 'S20',
//     ]
// );

// $galaxyS20->addGpu();
// $galaxyS20->addCpu();
// $galaxyS20->addRam();
// $galaxyS20->addSensors();
// $galaxyS20->addModel();
// var_dump($galaxyS20->getSmartPhone());

// use Core\Creational\Builder\Conceptual\Request\MethodsEnum;
// use Core\Creational\Builder\Conceptual\Request\RequestBuilder;

// $smartPhone = new SmartPhoneBuilder(
//     smartPhone: new ApplePhone(),
//     data: [
//         'gpu' => 'XPTO',
//         'cpu' => 'XPTO',
//         'ram' => 12,
//         'sensors' => ['XPTO'],
//         'model' => 'S20',
//     ]
// );

// $smartPhoneCreator = new SmartPhoneCreator($smartPhone);
// $iPhone20 = $smartPhoneCreator->buildPhone();

// var_dump($iPhone20);

// $request = new RequestBuilder;
// $request->url('http://localhost:8080/api/v1/users');
// $reeqest->payload(['filters' => 'sdfsd']);
// $request->method(MethodsEnum::GET);
// $request->buildRequest();

/* -- Ou -- */

// $request = (new RequestBuilder)->url('http://localhost:8080/api/v1/users')
//             ->method(MethodsEnum::GET)
//             ->buildRequest();

// use Core\Creational\Builder\Practical\Address;
// use Core\Creational\Builder\Practical\Enums\Role;
// use Core\Creational\Builder\Practical\Phone;
// use Core\Creational\Builder\Practical\User;

// $pedroFounder = new User(
//     firstName: 'Pedro',
//     lastName: 'Costa',
//     email: 'pedro@pedroeng.com.br',
//     age: 30,
//     role: Role::F,
// );

// $pedroFounder->setAddress(
//     new Address(
//         street: 'Rua X',
//         city: 'Cidade Y',
//         state: 'Estado Z',
//         postalCode: 5757009,
//         country: 'BR',
//     )
// );

// $pedroFounder->setPhone(
//     new Phone(
//         ddd: 55,
//         number: 999999999,
//     )
// );

// use Core\Creational\Builder\Practical\Enums\Role;
// use Core\Creational\Builder\Practical\UserBuilder;

// $user = (new UserBuilder)
//             ->addBasicInfo(
//                 firstName: 'Pedro',
//                 lastName: 'Costa',
//                 email: 'pedro@pedroeng.com.br',
//                 age: 30,
//                 role: Role::F,
//             )->addAddress(
//                 street: 'Rua X',
//                 city: 'Cidade Y',
//                 state: 'Estado Z',
//                 postalCode: 5757009,
//                 country: 'BR',
//             )->addPhone(
//                 ddd: 55,
//                 number: 999999999,
//             )->build();

// var_dump($user);

/** 
 * Singleton Conceitual
 */ 

// use Core\Creational\Singleton\Conceptual\Singleton;

// $instanceA = Singleton::getInstance();
// $instanceB = Singleton::getInstance();

// var_dump($instanceA === $instanceB);

use Core\Creational\Singleton\Practical\DbConnection;

DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();