<?php
class repla
{
    public function replace($a)
        {
            return preg_replace('/[^0-9]/', '', $a);
        
        }
}