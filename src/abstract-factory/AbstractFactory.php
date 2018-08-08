<?php

namespace DesignPattern\AbstractFactory;

abstract class AbstractFactory {
	abstract public function createProductX(): AbstractProductX ;
}