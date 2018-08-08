<?php

namespace DesignPattern\AbstractFactory;

class ProductFactory extends AbstractFactory {
	public function createProductX() :AbstractProductX {
		return new ProductX();
	}

	public function createProductY() :AbstractProductY {
		return new ProductY();
	}
}