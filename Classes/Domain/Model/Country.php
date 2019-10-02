<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNamePtBr = '';

    /**
     * @return string
     */
    public function getShortNamePtBr(): string
    {
        return $this->shortNamePtBr;
    }

    /**
     * @param string $shortNamePtBr
     */
    public function setShortNamePtBr(string $shortNamePtBr)
    {
        $this->shortNamePtBr = $shortNamePtBr;
    }
}