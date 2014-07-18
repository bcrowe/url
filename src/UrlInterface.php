<?php
/**
* This file is part of the League.url library
*
* @license http://opensource.org/licenses/MIT
* @link https://github.com/thephpleague/url/
* @version 3.0.0
* @package League.url
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace League\Url;

/**
 * A common interface for URL as Value Object
 *
 *  @package League.url
 *  @since  3.0.0
 */
interface UrlInterface
{
    /**
     * return the string representation for the current URL
     *
     * @return string
     */
    public function __toString();

    /**
     * return the string representation for the current URL
     * user info
     *
     * @return string
     */
    public function getUserInfo();

    /**
     * return the string representation for the current URL
     * authority part (user, pass, host, port components)
     *
     * @return string
     */
    public function getAuthority();

    /**
     * return the string representation for the current URL
     * including the scheme and the authority parts.
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * return the string representation for a relative URL
     * based on the current URL (the string does not
     * contain the authority part)
     *
     * @param integer $start_index the index to start from
     *                             when adding relative segment path
     *                             setting the relative URL
     *
     * @return string
     */
    public function getRelativeUrl($start_index = 0);

    /**
     * Compare two Url object and tells whether they can be considered equal
     *
     * @param {@link UrlInterface} $url
     *
     * @return boolean
     */
    public function sameValueAs(UrlInterface $url);
}