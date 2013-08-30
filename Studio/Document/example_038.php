<?php
require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// 创建新的PDF文档
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetProtection($permissions=array('copy','modify'), $user_pass='', $owner_pass=null, $mode=0, $pubkeys=null);

// 设置文档信息
$pdf->SetCreator('步步街');
$pdf->SetAuthor('步步街银川网络商城');
$pdf->SetTitle('步步街银川网络商城发货单');
$pdf->SetSubject('步步街单据');
$pdf->SetKeywords('步步街');

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(15, 0, 15, 0);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
//set auto page breaksExample of HTML text flowwewerwerdsfffddd</h1>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('droidsansfallback', 'italic', 20);


$html = <<<EOF
<style>
*{font-size:0.3cm;}
/* List */
ul { margin:0; padding:0; }
li { list-style:none; leight:1.2cm; }
li span.value { text-decoration:underline; }
/* Table */
table { border-collapse:collapse; border-spacing:0; }
.col3 { width:100%; }
.col1, .col2, .col4, .col5, .col6, .col7, .col8 { white-space:nowrap; }
.col1 { text-align:center; }
.col6, .col7, .col8 { text-align:right; }
</style>
<table>
  <tr>
    <td>
    </td>
    <td>
<ul style="width:6cm;">
  <li><span class="name">订购日期：</span> <span class="value">2012-03-03</span></li>
  <li><span class="name">发货单号：</span> <span class="value">KL-210083194667</span></li>
  <li><span class="name">收货人姓名：</span> <span class="value">张瑞</span></li>
  <li><span class="name">国家：</span> <span class="value">中国</span> <span class="name">省份：</span> <span class="value">宁夏</span></li>
  <li><span class="name">城市：</span> <span class="value">银川市</span> <span class="name">区县：</span> <span class="value">金凤区</span></li>
</ul>
    </td>
    <td>
<ul style="width:6cm;">
  <li><span class="name">地址：</span> <span class="value">灵芝巷盈难村新村部西200米158号</span></li>
  <li><span class="name">手机：</span> <span class="value">15809503950</span></li>
  <li><span class="name">电话：</span> <span class="value">0951-5171019</span></li>
  <li><span class="name">订单号：</span> <span class="value">210083194667</span></li>
</ul>
    </td>
  </tr>
</table>
<br />
<table style="width:340px;margin:0;padding:0;">
    <tr>
      <td class="col1" style="border-top:1px solid black;border-bottom:1px solid black;">序号</td>
      <td class="col2" style="border-top:1px solid black;border-bottom:1px solid black;">编码</td>
      <td class="col3" style="border-top:1px solid black;border-bottom:1px solid black;">商品名称</td>
      <td class="col4" style="border-top:1px solid black;border-bottom:1px solid black;">规格</td>
      <td class="col5" style="border-top:1px solid black;border-bottom:1px solid black;">单位</td>
      <td class="col6" style="border-top:1px solid black;border-bottom:1px solid black;">单价(元)</td>
      <td class="col7" style="border-top:1px solid black;border-bottom:1px solid black;">数量</td>
      <td class="col8" style="border-top:1px solid black;border-bottom:1px solid black;">金额(元)</td>
    </tr>
    <tr>
      <td class="col1">1</td>
      <td class="col2">436660</td>
      <td class="col3">水星（Mercury） MD895N 150M 共享上网一体机</td>
      <td class="col4"> </td>
      <td class="col5"> </td>
      <td class="col6">132</td>
      <td class="col7">1</td>
      <td class="col8">132</td>
    </tr>
    <tr>
      <td class="col1">2</td>
      <td class="col2">368884</td>
      <td class="col3">水星（Mercury） MW150U 150M 无线USB网卡</td>
      <td class="col4"></td>
      <td class="col5"></td>
      <td class="col6">27</td>
      <td class="col7">1</td>
      <td class="col8">27</td>
    </tr>
    <tr>
      <td class="col1">3</td>
      <td class="col2">164974</td>
      <td class="col3">奔腾（POVOS）电饭煲 PFF40E-C 电脑版酒红（4L）加厚内胆</td>
      <td class="col4"></td>
      <td class="col5"></td>
      <td class="col6">189</td>
      <td class="col7">1</td>
      <td class="col8">189</td>
    </tr>
    <tr>
      <td class="col1">4</td>
      <td class="col2">199739</td>
      <td class="col3">L'OREAL PARIS巴黎欧莱雅可丝莹温和染发霜535号 晶纯巧克力48ml+72ml+40ml</td>
      <td class="col4"></td>
      <td class="col5"></td>
      <td class="col6">57</td>
      <td class="col7">1</td>
      <td class="col8">57</td>
    </tr>
    <tr>
      <td class="col1" style="border-top:1px solid black;border-bottom:1px solid black;">合计：</td>
      <td class="col2" style="border-top:1px solid black;border-bottom:1px solid black;"></td>
      <td class="col3" style="border-top:1px solid black;border-bottom:1px solid black;"></td>
      <td class="col4" style="border-top:1px solid black;border-bottom:1px solid black;"></td>
      <td class="col5" style="border-top:1px solid black;border-bottom:1px solid black;"></td>
      <td class="col6" style="border-top:1px solid black;border-bottom:1px solid black;"></td>
      <td class="col7" style="border-top:1px solid black;border-bottom:1px solid black;">4</td>
      <td class="col8" style="border-top:1px solid black;border-bottom:1px solid black;">405</td>
    </tr>
</table>
<table style="margin:0;padding-top:10px;text-align:left;">
  <tr>
    <td style="">总计：￥405.00</td>
    <td style="">已收款：￥405.00</td>
    <td style="">应收款：￥0.00</td>
    <td style="">客户签收：</td>
  </tr>
</table>
EOF;

$colophon = <<<EOF
<div style="text-align:center;margin:0;padding:0;font-size:36px;">非常感谢您在步步街 http://www.bubujie.com 购物，我们期待您的再次光临！</div>
EOF;
//============================================================+
// 增加一页
$pdf->AddPage('P', 'A4');
// 附加二维码
$pdf->write2DBarcode('http://www.bubujie.com', 'QRCODE,L', 20, 30, 20, 20, $style, 'N');
// 添加Logo
$pdf->SetXY(13, 10);
$pdf->Image('../images/logo_doc_header.gif', '', '', 72, 16, '', '', '', false, 300, '', false, false, 0, false, false, false);
// 输出正文
$pdf->SetXY(20, 30);
$pdf->writeHTML($html, true, 0, true, 0);
$pdf->SetXY(140, 12);
$pdf->Write(0, '配送单存根联', '', 0, '', true, 0, false, false, 0);
// 输出拔
$pdf->SetXY(20, 130);
$pdf->writeHTML($colophon, true, 0, true, 0);

//============================================================+
$style = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 4, 'color' => array(0, 0, 0));
$pdf->Line(0, 150, 210, 150, $style);
//============================================================+
// 附加二维码
$pdf->write2DBarcode('http://www.bubujie.com', 'QRCODE,L', 20, 180, 20, 20, $style, 'N');
// 添加Logo
$pdf->SetXY(13, 160);
$pdf->Image('../images/logo_doc_header.jpg', '', '', 72, 16, '', '', '', false, 300, '', false, false, 0, false, false, false);
// 输出正文
$pdf->SetXY(20, 180);
$pdf->writeHTML($html, true, 1000, true, 0);
$pdf->SetXY(140, 162);
$pdf->Write(0, '配送单客户联', '', 0, '', true, 0, false, false, 0);
// 输出拔
$pdf->SetXY(20, 272);
$pdf->writeHTML($colophon, true, 0, true, 0);

//============================================================+


//============================================================+
//Close and output PDF document
$pdf->Output('bubuje_order.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
