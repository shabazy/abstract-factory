<?php

namespace DesignPattern\AbstractFactory;

class ProductY extends AbstractProductY {
	public function badProduct(): string {
		return 'No, no, no This is bad product.';
	}

	public function accessAnotherProduct(AbstractProductX $product): string {
		$super = $product->superProduct();
		return 'Product type: '. $super;
	}
}