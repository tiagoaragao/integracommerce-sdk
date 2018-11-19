<?php


namespace IntegraCommerce\Model;

use IntegraCommerce\Classes\Collection;
use IntegraCommerce\Classes\ModelBase;

class MarketplaceStructure extends ModelBase
{
    public static $attributeMap = array(
        'MarketplaceStructures' => [
            "Id" => "string",
            "Name" => "string",
            "ParentId" => "string"
        ],
    );

    /**
     * @var Collection
     */
    public $marketplaceStructures;

    public function __construct(\StdClass $data)
    {
        $this->page = $data->Page;
        $this->perPage = $data->PerPage;
        $this->total = $data->Total;

        $this->marketplaceStructures = new Collection($data->MarketplaceStructures);
    }
}