<?php
$result = array();
function linear($inputAmount, $inputInterest, $months) {
    $amount = $inputAmount;
    $interest = $inputInterest * 0.01;
    $assetMonthly = floor($amount / $months / 100) * 100;
    $assetFirst = $amount - ($assetMonthly * $months);

    global $result;
    for ($month = 1; $month <= $months; $month++) {
        $assetPart = $month ? $assetMonthly : $assetFirst + $assetMonthly;
        $interestPart = round($amount * $interest / 12);
        $repayment = $assetPart + $interestPart;
        $values = array($month, $amount, $assetPart, $interestPart, $repayment);
        array_push($result, $values);
        $amount -= $assetPart;
    }

    return $result;
}

function annuity($inputAmount, $inputInterest, $months) {
    $amount = $inputAmount;
    $interest = ($inputInterest * 0.01) / 12;
    $annuityFactor = (pow($interest + 1, $months) - 1) / ($interest * pow($interest + 1, $months));
    $repayment = floor($amount / $annuityFactor);

    global $result;
    for ($month = 1; $month <= $months; $month++) {
        $interestPart = floor($amount * $interest);
        $assetPart = $repayment - $interestPart;
        $repayment = $assetPart + $interestPart;
        $values = array($month, $amount, $assetPart, $interestPart, $repayment);
        array_push($result, $values);
        $amount -= $assetPart;
    }

    return $result;
}
?>