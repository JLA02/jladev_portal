<?php
namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class ItemEnumType extends AbstractEnumType
{
    public const VIDEO = 'VIDEO';
    public const PICTURE = 'PICTURE';

    protected static $choices = [
        self::VIDEO => 'VIDEO',
        self::PICTURE => 'PICTURE'
    ];
}
?>