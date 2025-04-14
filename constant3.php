<?php
class MyClass {
    public const PUBLIC_CONST = "Visible";
    protected const PROTECTED_CONST = "Only in class or child";
    private const PRIVATE_CONST = "Only in class";

    public function getConsts() {
        echo self::PUBLIC_CONST;
        echo self::PROTECTED_CONST;
        echo self::PRIVATE_CONST;
    }
}
?>