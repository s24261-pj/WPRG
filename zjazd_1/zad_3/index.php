<?php
class Exercise_1_3
{
    const BAD_WORDS = ['kurde', 'brzydko', 'felek'];

    public static function replace_bad_words_in_sentence(string $sentence): string
    {
        $words = explode(" ", $sentence);

        foreach ($words as $key => $word) {
            if (self::is_bad_word($word)) {
                $words[$key] = self::cover_word($word);
            }
        }

        return implode(" ", $words);
    }

    private static function is_bad_word(string $word): bool
    {
        $foundedBadWord = array_filter(self::BAD_WORDS, function ($badWord) use ($word) {
            return str_contains($word, $badWord);
        });

        return count($foundedBadWord);
    }

    private static function cover_word(string $word): string
    {
        $wordLength = strlen($word);

        return str_repeat("*", $wordLength);
    }
}

echo Exercise_1_3::replace_bad_words_in_sentence("kurde felek ale ten Pan brzydko powiedzial");
