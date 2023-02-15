<?php

declare(strict_types=1);

namespace DanOlshev\Strupper;

class StringProcessor
{
    public function __construct(private string $str)
    {
    }

    public function toUpper(int $start, int $stop): string
    {
        if ($start > $stop) {
            return $this->str;
        }

        $str = '';
        for ($i = 0; $i < mb_strlen($this->str); $i++) {
            if ($i >= $start && $i <= $stop) {
                $str .= mb_strtoupper($this->str[$i]);
                continue;
            }

            $str .= $this->str[$i];
        }

        return $str;
    }
}