<?php

namespace Teurat\Scandiweb\Domain\Attribute;

abstract class AbstractAttribute
{
    public function __construct(
        protected string $label,
        protected string $type,
        protected array $values
    ) {}

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValues(): array
    {
        return $this->values;
    }
}
