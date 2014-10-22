<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/10/23
 * Time: 00:57
 */

namespace TencentXinge;


class TagTokenPair {

    public function __construct($tag, $token)
    {
        $this->tag = strval($tag);
        $this->token = strval($token);
    }
    public function __destruct(){}

    public $tag;
    public $token;
}