<?php
/**
 * InstagramTest.php
 *
 * @package Embera
 * @author Michael Pratt <yo@michael-pratt.com>
 * @link   http://www.michael-pratt.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Embera\Provider;

use Embera\ProviderTester;

/**
 * Test the Instagram Provider
 */
final class InstagramTest extends ProviderTester
{
    protected $tasks = [
        'valid_urls' => [
            'https://www.instagram.com/p/fA9uwTtkSN/',
            'http://www.instagram.com/p/B5VdXs7A7KG',
            'http://instagr.am/p/B5JzB9RAH-E/',
        ],
        'invalid_urls' => [
            'https://www.instagram.com/p/B5JzB9RAH-E/other-stuff',
            'https://www.instagram.com/p/',
        ],
    ];

    public function testProvider()
    {
        $this->validateProvider('Instagram', [ 'width' => 480, 'height' => 270]);
    }
}