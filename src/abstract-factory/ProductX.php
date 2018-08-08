<?php

namespace DesignPattern\AbstractFactory;

class ProductX extends AbstractProductX {
	public function superProduct() :string {
		return 'This is super product';
	}
}