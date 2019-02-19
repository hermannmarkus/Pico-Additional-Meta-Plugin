<?php
/**
 * Pico Additional Meta Plugin
 *
 * The plugin let's you easily extend the meta fields you can use.
 *
 * @author  Markus Hermann
 * @link    http://picocms.org
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 1.0
 */
class AdditionalMeta extends AbstractPicoPlugin {
    /**
     * API version used by this plugin
     *
     * @var int
     */
    const API_VERSION = 2;

    /**
     * Triggered when Pico reads its known meta header fields
     *
     * @see Pico::getMetaHeaders()
     *
     * @param string[] &$headers list of known meta header fields; the array
     *     key specifies the YAML key to search for, the array value is later
     *     used to access the found value
     *
     * @return void
     */
    public function onMetaHeaders(array &$headers) {
        $keys = $this->getPico()->getConfig("AdditionalMeta.keys", "");

        foreach ($keys as $key) {
            $headers[$key] = strtolower($key);
        }
    }
}