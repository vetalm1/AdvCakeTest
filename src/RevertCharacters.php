<?php

namespace Src;

class RevertCharacters
{

    public function invertWordsInString(string $string): string
    {
        $wordsArr = explode(" ", $string);

        $result = null;

        foreach ($wordsArr as $word){
            $result .= $this->invertWord($word).' ';
        }

        return mb_substr($result,0,-1);

    }

    public function invertWord(string $word): string
    {
        $lettersArr = mb_str_split($word);

        $punctuation ='';

        if (ctype_punct(end($lettersArr))) {

            $punctuation = end($lettersArr);
            array_splice($lettersArr, count($lettersArr)-1);
        }

        $qtyIterations = round(count($lettersArr)/2);
        $arrLength = count($lettersArr)-1;

        for ($i = 0; $i < $qtyIterations; $i++){

            $temp = $lettersArr[$i];

            ($temp === mb_strtoupper($temp))
                ? $lettersArr[$i] = mb_strtoupper($lettersArr[$arrLength-$i])
                : $lettersArr[$i] = mb_strtolower($lettersArr[$arrLength-$i]);

            ($lettersArr[$arrLength-$i] === mb_strtoupper($lettersArr[$arrLength-$i]))
                ? $lettersArr[$arrLength-$i] = mb_strtoupper($temp)
                : $lettersArr[$arrLength-$i] = mb_strtolower($temp);

        }

        return implode($lettersArr).$punctuation;

    }

}
