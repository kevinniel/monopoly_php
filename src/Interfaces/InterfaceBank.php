<?php

namespace Interface;

interface InterfaceBank {
    public function giveMoney(int $amount): bool;
}