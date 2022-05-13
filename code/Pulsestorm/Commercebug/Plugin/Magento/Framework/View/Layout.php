<?php
namespace Pulsestorm\Commercebug\Plugin\Magento\Framework\View;
class Layout
{
    function beforeGenerateElements($subject){
        \Pulsestorm\Commercebug\Model\All::addTo(
            'request_layout_xml', $subject->getNode()->asXml());
    }
}
