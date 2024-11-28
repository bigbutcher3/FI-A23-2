<?php
namespace {
}

namespace wuerfelspiel {

    use Wuerfelbecher;

    require_once('Wuerfelbecher.php');

    class GausscheGlocke
    {
        /**
         * @return array
         */
        private function gausscheGlocke(): array
        {
            $ergebnisWuerfelBecher = new Wuerfelbecher();
            $ausgabeArray = array_fill(5, 26, 0);
            for ($i = 1; $i <= 10000; $i++) {
                $ausgabeArray[$ergebnisWuerfelBecher->getErgebnis()]++;
            }
            return $ausgabeArray;
        }

        /**
         * @return array
         */
        public function getErgebnis(): array
        {
            return $this->gausscheGlocke();
        }
    }

    $test = new GausscheGlocke();
    echo '<pre>';
    print_r($test->getErgebnis());
}