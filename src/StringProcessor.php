<?php

declare(strict_types=1);

namespace DanOlshev\Strupper;

class StringProcessor
{
    private string $str;

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function toUpper(int $start, int $stop): string
    {
        if ($start > $stop) {
            return $this->str;
        }

        $result = '';
        for ($i = 0; $i < mb_strlen($this->str); $i++) {
            if ($i >= $start && $i <= $stop) {
                $result .= mb_strtoupper($this->str[$i]);
                continue;
            }

            $result .= $this->str[$i];
        }

        return $result;
    }
}