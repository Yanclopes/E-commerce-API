<?php

namespace Domain\Shared\interfaces;

use Illuminate\Foundation\Http\FormRequest;

interface DataTransferObjectInterface
{
    public function __construct(array $args);

    public function toArray(): array;

    public static function fromRequest(FormRequest $request): self;
}
