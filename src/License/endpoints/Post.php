<?php


namespace XPack\License\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Post
 *
 * @category License
 * @package  XPack\License\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

class Post extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        return "_xpack/license";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return [
            'acknowledge'
        ];
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return "POST";
    }
}