<?php

/*
 * This file is part of the Klipper package.
 *
 * (c) François Pluchino <francois.pluchino@klipper.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Klipper\Component\Metadata\View;

/**
 * @author François Pluchino <francois.pluchino@klipper.dev>
 */
abstract class BaseViewChildMetadata implements ViewChildMetadataInterface
{
    protected string $name;

    protected string $type;

    protected string $label;

    protected ?string $description;

    protected bool $readOnly;

    protected bool $required;

    protected ?string $input;

    protected ?array $inputConfig;

    protected bool $editablePermissions;

    /**
     * @param string      $name                The name of metadata field
     * @param string      $type                The type of metadata field
     * @param string      $label               The label of metadata field
     * @param null|string $description         The description of metadata field
     * @param bool        $readOnly            Check if the metadata is read only
     * @param bool        $required            Check if the metadata is required
     * @param null|string $input               The input type
     * @param null|array  $inputConfig         The config of input type
     * @param bool        $editablePermissions Check if the permissions can be configured for this metadata
     */
    public function __construct(
        string $name,
        string $type,
        string $label,
        ?string $description,
        bool $readOnly,
        bool $required,
        ?string $input,
        ?array $inputConfig,
        bool $editablePermissions = false
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->description = $description;
        $this->readOnly = $readOnly;
        $this->required = $required;
        $this->input = $input;
        $this->inputConfig = $inputConfig;
        $this->editablePermissions = $editablePermissions;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    public function isRequired(): bool
    {
        return $this->required;
    }

    public function getInput(): ?string
    {
        return $this->input;
    }

    public function getInputConfig(): ?array
    {
        return $this->inputConfig;
    }

    public function hasEditablePermissions(): bool
    {
        return $this->editablePermissions;
    }
}
