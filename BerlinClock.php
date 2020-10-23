<?php


class BerlinClock {

    public function convert(int $heures, int $minutes, int $secondes):array {
        $res = self::emptyClock();
        if ($minutes>=5) {
            $res[3][0] = "J";
            if($minutes === 10){
                $res[3][1]="J";
            }elseif($minutes === 11) {
                $res[3][1]="J";
                $res[4][0]="J";
            }
            else{
                $res=$this->modifySingleMinutes($res, $minutes-5);
            }

        }else{
            $res = $this->modifySingleMinutes($res, $minutes);
        }
        return $res;
    }

    public static function emptyClock():array {
        return array(
            array(""),
            array("", "", "", ""),
            array("", "", "", ""),
            array("", "", "", "", "", "", "", "", "", "", ""),
            array("", "", "", "")
        );
    }

    private function modifySingleMinutes(array $clock, int $minutes): array {
        for ($i = 0; $i < $minutes; $i++) {
            $clock[4][$i] = "J";
        }
        return $clock;
    }
}