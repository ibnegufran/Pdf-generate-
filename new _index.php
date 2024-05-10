
<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$stylesheet = file_get_contents('pdf.css');

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="sale">
        <div class="s1 scon">
            <h1>sales person</h1>
            <P>business name</P>
            <P>nizampur</P>
            <P>bhiwandi maharashtra 421 302 </P>
            <P>india</P>

        </div>
        <div class="s2 scon">
            <h6>estimate</h6>
        </div>
    </div>
    <div class="bill">
        <div class="to scon">

            <h3>bill to</h3>
            <p>customer name</p>
            <P>nizampur</P>
            <P>bhiwandi maharashtra 421 302 </P>
            <P>india</P>
        </div>
        <div class="e-no scon">
           <!-- <p> <strong>estimate number</strong> <span>EST - 111</span></p>
           <p> <strong>estimate date</strong> <span>8 may 2024</span></p>
           <p> <strong>expiry date</strong> <span>8 may 2024</span></p> -->

           <table>
            <tr>
                <th>estimate number</th>
                <td style="">EST - 111</td>
            </tr>
            <tr>
                <th>estimate date</th>
                <td>8 may 2024</td>
            </tr>
            <tr>
                <th>expiry date</th>
                <td>8 may 2024</td>
            </tr>
           </table>


        </div>
    </div>
    <table class="table">
        <tr>
            <th style="width:70%">item name</th>
            <th style="">quantiny</th>
            <th style="">rate</th>
            <th style="">Amount</th>

        </tr>
        <tr class="border" >
            <td>item1</td>
            <td>1</td>
            <td>120</td>
            <td>120.00</td>

        </tr>
        <tr class="border" style="">
            <td>item2</td>
            <td>2</td>
            <td>240</td>
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
            <td><b>₹360.00</b></td>

        </tr>
    </table>
    <div class="notes foot">
        <p style="color:gray;font-weight:bold;text-transform:capitalize">notes</p>
        <p>Feel free to contact us toget more details</p>
    </div>
    <div class="t-c foot">                      
        <p style="color:gray;font-weight:bold;text-transform:capitalize">terms & condition</p>
        <p>This estimate valid only if accepted on or before expiry date date</p>
    </div>
    </div>
</body>
</html>';




$mpdf->WriteHTML($html);
$mpdf->Output('ab.pdf','I');


?>