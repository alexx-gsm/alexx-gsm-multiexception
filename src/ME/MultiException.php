<?php

namespace ME;

class MultiException
    extends \Exception
    implements \Iterator, \Countable
{
    use TMagic;
    use TIterator;

    public function add(\Exception $ex){
        $this->__data[] = $ex;
    }

    public function count()
    {
        return count($this->__data);
    }
}