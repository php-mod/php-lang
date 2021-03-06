<?php

namespace PHP\Lang;

class Object extends \stdClass {
	
	static public function alias($alias, $autoload = TRUE) {
		return class_alias ( get_called_class() , $alias , $autoload);
	}
	
	static public function getClassName() {
		return get_called_class();
	}
	
	static public function getClassMethods() {
		return get_class_methods(get_called_class());
	}
	
	static public function getClassVars() {
		return get_class_vars(get_called_class());
	}
	
	public function getVars() {
		return get_object_vars($this);
	}
	
	static public function getParentClass() {
		return get_parent_class(get_called_class());
	}
	
}
