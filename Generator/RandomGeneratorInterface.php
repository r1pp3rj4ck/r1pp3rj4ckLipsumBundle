<?php

namespace r1pp3rj4ck\LipsumBundle\Generator;

interface RandomGeneratorInterface
{

    const PUNCTUATION_NONE = 0;

    const PUNCTUATION_AT_END = 1;

    const PUNCTUATION_ON = 2;

    /**
     * Gets a random string
     *
     * @param int $wordCount   Word count
     * @param int $punctuation Punctuation (none, at end, on)
     *
     * @return mixed
     */
    public function getRandom($wordCount = 42, $punctuation = self::PUNCTUATION_ON);
}