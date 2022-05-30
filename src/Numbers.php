<?php
namespace Numbers;

class Numbers
{
    public function apply($index)
    {
        $Npositivos = [];
        $Nnegativos = [];
        $Nzero = [];

        for ($i=0; $i < count($index) ; $i++) { 
            if($index[$i] === 0) {
                $Nzero[] += $index[$i];
                continue;
            }

            if($index[$i] > 0) {
                $Npositivos[] += $index[$i];
                continue;
            }

            if($index[$i] < 0) {
                $Nnegativos[] += $index[$i];
                continue;
            }
        }

        $result = [
            round(count($Npositivos)/count($index), 4),
            round(count($Nnegativos)/count($index), 4),
            round(count($Nzero)/count($index), 4),
        ];

        return $result;
    }
}
