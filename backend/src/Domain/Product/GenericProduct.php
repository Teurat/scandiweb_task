<?php
namespace Teurat\Scandiweb\Domain\Product;

final class GenericProduct extends AbstractProduct
{
    public array  $gallery     = [];
    public array  $prices      = [];
    public array  $attributes  = [];
    public string $description = '';

    public function getAttributeLabel(): string
    {
        return '';
    }

    public function getAttributeValue(): string
    {
        return '';
    }
}
