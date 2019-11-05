<?php


namespace App\Services\DesignPatterns\Fundamental\PropertyContainer;


interface PropertyContainerInterface
{


    /**
     * @param string $propertyName
     * @param $value
     */
    public function addProperty(string $propertyName, $value): PropertyContainerInterface ;

    /**
     * @param string $propertyName
     */
    public function deleteProperty(string $propertyName): void ;

    /**
     * @param string $propertyName
     * @return mixed
     */
    public function getProperty(string $propertyName);

    /**
     * @param string $propertyName
     * @param $value
     */
    public function setProperty(string $propertyName, $value): void ;

}