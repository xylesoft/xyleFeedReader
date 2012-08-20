<?php

namespace Xylesoft\Component\XyleFeedReader\Feed;
use DOMDocument;

/**
 * Feed Interface.
 *
 * @auhor Jeramy Wenserit <xylefeedreader@xylesoft.co.uk>
 */
interface FeedInterface
{

    /**
     * Return an array of the valid mime-types for this reader.
     */
    public function getMimeTypes();

    /**
     * Check if the DOMDocument's feed is compatible with this reader.
     */
    public function isCompatible(DOMDocument $feed);

}