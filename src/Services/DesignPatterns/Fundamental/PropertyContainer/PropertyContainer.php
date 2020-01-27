<?php


namespace App\Services\DesignPatterns\Fundamental\PropertyContainer;


class PropertyContainer implements PropertyContainerInterface
{

    private $propertyContainer = [];

    /**
     * @param string $propertyName
     * @param $value
     */
    public function addProperty(string $propertyName, $value): PropertyContainerInterface
    {
        $this->propertyContainer[$propertyName] = $value;
        return $this;
    }

    /**
     * @param string $propertyName
     */
    public function deleteProperty(string $propertyName): void
    {
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @param string $propertyName
     * @return mixed
     */
    public function getProperty(string $propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @param string $propertyName
     * @param $value
     */
    public function setProperty(string $propertyName, $value): void
    {
        if(!isset($this->propertyContainer[$propertyName])){
            throw new \Exception("dont find property #".$propertyName);
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}