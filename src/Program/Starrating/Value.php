<?php
namespace XMLTV\Program\StarRating;

use \Xmltv\XmltvElement;

/**
 * XMLTV program star rating value
 *
 * @author
 *   Belkacem Alidra <dev@b-alidra.com>
 */
class Value extends XmltvElement
{
    public function getTagName()
    {
        return 'value';
    }

    public function getAllowedAttributes()
    {
        return [];
    }

    public function getAllowedChildren()
    {
        return [];
    }
}
