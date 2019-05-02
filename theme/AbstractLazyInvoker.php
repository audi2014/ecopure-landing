<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 4/15/19
 * Time: 3:23 PM
 */

namespace EcopureTheme;


abstract class AbstractLazyInvoker {
    protected $hash_result;

    abstract protected function invoke($data);

    public function __invoke() {
        $args = func_get_args();
        $hash = hash("md5", \json_encode($args));
        if (!isset($this->hash_result[$hash])) {
            $this->hash_result[$hash] = $this->invoke($args);
        }
        return $this->hash_result[$hash];
    }

}