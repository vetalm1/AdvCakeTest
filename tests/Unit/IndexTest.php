<?php

namespace tests\Unit;
use App\Index;
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{

    public function testInvertString()
    {

        $index = new Index();

        $this->AssertEquals(
            $index->invertWordsInString("Привет! Давно не виделись."),
            "Тевирп! Онвад ен ьсиледив."
        );
    }

    public function testInvertStringAnyUpperCaseAndPunctuation()
    {

        $index = new Index();

        $this->AssertEquals(
            $index->invertWordsInString("Привет! ДавНо, не ВидеЛись."),
            "Тевирп! ОнвАд, ен ЬсилЕдив."
        );

    }



}
