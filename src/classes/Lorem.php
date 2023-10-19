<?php

/**
 * Lorem Ipsum Generator
 *
 * PHP version 5.3+
 *
 * Licensed under The MIT License.
 * Redistribution of these files must retain the above copyright notice.
 *
 * @author    Josh Sherman <hello@joshtronic.com>
 * @copyright Copyright 2014-2022 Josh Sherman
 * @license   http://www.opensource.org/licenses/mit-license.html
 * @link      https://github.com/joshtronic/php-loremipsum
 */

class Lorem
{
    /**
     * Words
     *
     * A lorem ipsum vocabulary of sorts. Not a complete list as I'm unsure if
     * a complete list exists and if so, where to get it.
     *
     * @access private
     * @var    array<string>
     */
    private static array $words = array(
        // Lorem ipsum...
        'lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipiscing', 'elit',

        // and the rest of the vocabulary
        'a', 'ac', 'accumsan', 'ad', 'aenean', 'aliquam', 'aliquet', 'ante',
        'aptent', 'arcu', 'at', 'auctor', 'augue', 'bibendum', 'blandit',
        'class', 'commodo', 'condimentum', 'congue', 'consequat', 'conubia',
        'convallis', 'cras', 'cubilia', 'curabitur', 'curae', 'cursus',
        'dapibus', 'diam', 'dictum', 'dictumst', 'dignissim', 'dis', 'donec',
        'dui', 'duis', 'efficitur', 'egestas', 'eget', 'eleifend', 'elementum',
        'enim', 'erat', 'eros', 'est', 'et', 'etiam', 'eu', 'euismod', 'ex',
        'facilisi', 'facilisis', 'fames', 'faucibus', 'felis', 'fermentum',
        'feugiat', 'finibus', 'fringilla', 'fusce', 'gravida', 'habitant',
        'habitasse', 'hac', 'hendrerit', 'himenaeos', 'iaculis', 'id',
        'imperdiet', 'in', 'inceptos', 'integer', 'interdum', 'justo',
        'lacinia', 'lacus', 'laoreet', 'lectus', 'leo', 'libero', 'ligula',
        'litora', 'lobortis', 'luctus', 'maecenas', 'magna', 'magnis',
        'malesuada', 'massa', 'mattis', 'mauris', 'maximus', 'metus', 'mi',
        'molestie', 'mollis', 'montes', 'morbi', 'mus', 'nam', 'nascetur',
        'natoque', 'nec', 'neque', 'netus', 'nibh', 'nisi', 'nisl', 'non',
        'nostra', 'nulla', 'nullam', 'nunc', 'odio', 'orci', 'ornare',
        'parturient', 'pellentesque', 'penatibus', 'per', 'pharetra',
        'phasellus', 'placerat', 'platea', 'porta', 'porttitor', 'posuere',
        'potenti', 'praesent', 'pretium', 'primis', 'proin', 'pulvinar',
        'purus', 'quam', 'quis', 'quisque', 'rhoncus', 'ridiculus', 'risus',
        'rutrum', 'sagittis', 'sapien', 'scelerisque', 'sed', 'sem', 'semper',
        'senectus', 'sociosqu', 'sodales', 'sollicitudin', 'suscipit',
        'suspendisse', 'taciti', 'tellus', 'tempor', 'tempus', 'tincidunt',
        'torquent', 'tortor', 'tristique', 'turpis', 'ullamcorper', 'ultrices',
        'ultricies', 'urna', 'ut', 'varius', 'vehicula', 'vel', 'velit',
        'venenatis', 'vestibulum', 'vitae', 'vivamus', 'viverra', 'volutpat',
        'vulputate',
    );

    /**
     * Word
     *
     * Generates a single word of lorem ipsum.
     *
     * @access public
     * @return string generated lorem ipsum word
     */
    public static function word(): string
    {
        $word_count = count(Self::$words);
        $rand = rand(0, $word_count);
        return Self::$words[$rand];
    }

    /**
     * Words Array
     *
     * Generates an array of lorem ipsum words.
     *
     * @access public
     * @param integer $count how many words to generate
     * @return array<string> generated lorem ipsum words
     */
    private static function wordsArray(int $count): array
    {
        $word_count = count(Self::$words);
        $words = [];

        for ($i = 0; $i < $count; $i++) {
            $rand = rand(0, $word_count - 1);

            if ($i > 0 && $words[$i - 1] == Self::$words[$rand])
                $rand = ($rand + 1) % $word_count;

            $words[] = Self::$words[$rand];
        }

        return $words;
    }

    /**
     * Sentence
     *
     * Generates a full sentence of lorem ipsum.
     *
     * @access public
     * @param integer $word_count how many words per sentence
     * @return string generated lorem ipsum sentence
     */
    public static function sentence(int $word_count = 15): string
    {
        return Self::punctuate(Self::wordsArray($word_count));
    }

    /**
     * Sentences Array
     *
     * Generates an array of lorem ipsum sentences.
     *
     * @access public
     * @param integer $count how many sentences to generate
     * @param integer $word_count how many words per sentence
     * @return array<string> generated lorem ipsum sentences
     */
    private static function sentencesArray(int $count, int $word_count = 15): array
    {
        $sentences = [];
        $word_deviation = 0;

        for ($i = 0; $i < $count; $i++) {
            if ($i == $count - 1) {
                $words = Self::wordsArray($word_count - $word_deviation);
            } else if (abs($word_deviation) / ($count - $i) >= $word_count / 6) {
                $words = Self::wordsArray($word_count - $word_deviation / ($count - $i));
                $word_deviation -= $word_deviation / ($count - $i);
            } else {
                $rand = rand(-$word_count / 3, $word_count / 3);
                $words = Self::wordsArray($word_count + $rand);
                $word_deviation += $rand;
            }

            $sentences[] = Self::punctuate($words);
        }

        return $sentences;
    }


    /**
     * Paragraph
     *
     * Generates a full paragraph of lorem ipsum.
     *
     * @access public
     * @param integer $sentence_count how many sentences per paragraph
     * @param integer $word_count how many words per sentence
     * @return string generated lorem ipsum paragraph
     */
    public static function paragraph(int $sentence_count = 5, int $word_count = 15): string
    {
        return implode(" ", Self::sentencesArray($sentence_count, $word_count));
    }

    /**
     * Paragraph Array
     *
     * Generates an array of lorem ipsum paragraphs.
     *
     * @access public
     * @param integer $count how many paragraphs to generate
     * @param integer $sentence_count how many sentences per paragraph
     * @param integer $word_count how many words per sentence
     * @return array<string> generated lorem ipsum paragraphs
     */
    private static function paragraphsArray(int $count, int $sentence_count = 5, int $word_count = 15): array
    {
        $paragraphs = [];
        $sentence_deviation = 0;

        for ($i = 0; $i < $count; $i++) {
            if ($i == $count - 1) {
                $paragraph = Self::paragraph($sentence_count - $sentence_deviation, $word_count);
            } else if (abs($sentence_deviation) / ($count - $i) >= $sentence_count / 4) {
                $paragraph = Self::paragraph($sentence_count - $sentence_deviation / ($count - $i), $word_count);
                $sentence_deviation -= $sentence_deviation / ($count - $i);
            } else {
                $rand = rand(-$sentence_count / 2, $sentence_count / 2);
                $paragraph = Self::paragraph($sentence_count + $rand, $word_count);
                $sentence_deviation += $rand;
            }

            $paragraphs[] = $paragraph;
        }

        return $paragraphs;
    }

    /**
     * Paragraphs
     *
     * Generates paragraphs of lorem ipsum.
     *
     * @access public
     * @param integer $count how many paragraphs to generate
     * @param integer $sentence_count how many sentences per paragraph
     * @param integer $word_count how many words per sentence
     * @return string string of generated lorem ipsum paragraphs
     */
    public static function text(int $count, int $sentence_count = 5, int $word_count = 15, string $separator = "\n"): string
    {
        return implode($separator, Self::paragraphsArray($count, $sentence_count, $word_count));
    }

    /**
     * Gaussian Distribution
     *
     * This is some smart kid stuff. I went ahead and combined the N(0,1) logic
     * with the N(m,s) logic into this single function. Used to calculate the
     * number of words in a sentence, the number of sentences in a paragraph
     * and the distribution of commas in a sentence.
     *
     * @access private
     * @param double $mean average value
     * @param double $std_dev stadnard deviation
     * @return int calculated distribution
     */
    private static function gauss($mean, $std_dev)
    {
        $x = mt_rand() / mt_getrandmax();
        $y = mt_rand() / mt_getrandmax();
        $z = sqrt(-2 * log($x)) * cos(2 * pi() * $y);

        return intval($z * $std_dev + $mean);
    }

    /**
     * Punctuate
     *
     * Applies punctuation to a sentence. This includes a period at the end,
     * the injection of commas as well as capitalizing the first letter of the
     * first word of the sentence.
     *
     * @access private
     * @param  array<string> $sentence the sentence we would like to punctuate
     * @return string the punctuated sentence
     */
    private static function punctuate($sentence)
    {
        $words = count($sentence);

        // Only worry about commas on sentences longer than 4 words
        if ($words > 4) {
            $mean    = log($words, 6);
            $std_dev = $mean / 6;
            $commas  = Self::gauss($mean, $std_dev);

            for ($i = 1; $i <= $commas; $i++) {
                $word = round($i * $words / ($commas + 1));

                if ($word < ($words - 1) && $word > 0) {
                    $sentence[$word] .= ',';
                }
            }
        }

        return ucfirst(implode(' ', $sentence) . '.');
    }
}
