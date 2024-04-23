<?php 
namespace sourse\Models\User;

class User {
    private function __construct(
        private $name,
        private $role
    ) {}

    public static function takeAdmin(string $name) {
        return new self($name, 'admin');
    }
}