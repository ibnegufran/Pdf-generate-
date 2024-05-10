<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html=`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family:sans-serif;
        }
    h1{
    }
    </style>
</head>
<body>
    <div class="sale">
        <div class="s1">
            <h1>sales person</h1>
            <P>business name</P>
            <P>nizampur</P>
            <P>bhiwandi maharashtra 421 302 </P>
            <P>india</P>

        </div>
        <div class="s2">
            <h2>estimate</h2>
        </div>
    </div>
    <div class="bill">
        <div class="to">

            <h3>bill to</h3>
            <p>customer name</p>
            <P>nizampur</P>
            <P>bhiwandi maharashtra 421 302 </P>
            <P>india</P>
        </div>
        <div class="e-no">
            <strong>estimate number</strong> <span>EST - 111</span>
            <strong>estimate date</strong> <span>8 may 2024</span>
            <strong>expiry date</strong> <span>8 may 2024</span>


        </div>
    </div>
    <table>
        <tr>
            <th>item name</th>
            <th>quantiny</th>
            <th>rate</th>
            <th>Amount</th>

        </tr>
        <tr>
            <td>item1</td>
            <td>1</td>
            <td>120</td>
            <td>120.00</td>

        </tr>
        <tr>
            <td>item2</td>
            <td>2</td>
            <td>11240</td>
            <td>240.00</td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>subtotal</td>
            <td><b>360.00</b></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><b>0.00</b></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>total</td>
            <td><b>360.00</b></td>

        </tr>
    </table>
    <div class="notes foot">
        <p>notes</p>
        <p>feel free to contact us toget more <details></details></p>
    </div>
    <div class="t-c foot">
        <p>terms & condition</p>
        <p>this estimate valid only if accepted on or before expiry date<details></details></p>
    </div>
</body>
</html>`;




$mpdf->WriteHTML($html);
$mpdf->Output('ab.pdf','I');


?>