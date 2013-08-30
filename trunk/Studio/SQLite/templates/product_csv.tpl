{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="商品 CSV 批量转换"}
<!-- ######### ######### main ######### ######### -->
<h1>商品 CSV 批量转换</h1>
<hr />
<pre class="prettyprint linenums">
{foreach $results as $i}
{*
【01-商品  ID】*}{$i['ID']};{*
【02-是否启用】*}{$i['是否在售']};{*
【03-商品名称】*}{$i['商品名称']};{*
【04-商品分类】*};{*
【05-含税价格】*}{$i['售价']};{*
【06-税规  ID】*};{*
【07-供货价格】*}{$i['供价']};{*
【08-是否在售】*}{$i['是否在售']};{*
【09-折扣数量】*};{*
【10-折扣比率】*};{*
【11-优惠起始】*};{*
【12-优惠结束】*};{*
【13-参考    】*};{*
【14-供家参考】*};{*
【15-供应商  】*};{*
【16-生产商  】*};{*
【17-EAN 条码】*}{$i['convert(生产商代码']}{$i['convert(商品代码']};{*
【18-UPC 条码】*}{$i['商品代码)']};{*
【19-生态税  】*};{*
【20-重量    】*}{$i['重量']};{*
【21-库存    】*}100;{*
【22-简述    】*}{$i['商品简述']};{*
【23-介绍    】*}{$i['商品介绍']};{*
【24-标签    】*};{*
【25-M标题   】*}{$i['Meta标题']};{*
【26-M关键词 】*}{$i['Meta关键词']};{*
【27-M描述   】*}{$i['Meta描述']};{*
【28-URL重写 】*};{*
【29-有库存T 】*};{*
【30-可预订T 】*};{*
【31-可否预订】*};{*
【32-创建日期】*};{*
【33-显示价格】*};{*
【34-图片URLs】*};{*
【35-删除旧图】*};{*
【36-功能    】*};{*
【37-仅网售  】*};{*
【38-条件    】*}new{*
*}
{/foreach}
</pre>
<hr />
      <ol class="item-desc">
        <li>ID <span>【商品ID】</span></li>
        <li> Active (0/1) <span>【是否启用】</span></li>
        <li> Name * <span>【商品名称】</span></li>
        <li> Categories (x,y,z...) <span>【商品分类】</span></li>
        <li> Price tax excl. <span>【含税价】</span></li>
        <li> Tax rules ID <span>【计税规则ID】</span></li>
        <li> Wholesale price <span>【批发价】</span></li>
        <li> On sale (0/1) <span>【是否在售】</span></li>
        <li> Discount amount <span>【折扣数量】</span></li>
        <li> Discount percent <span>【折扣百分比】</span></li>
        <li> Discount from (yyyy-mm-dd) <span>【优惠起始日】</span></li>
        <li> Discount to (yyyy-mm-dd) <span>【优惠结束日】</span></li>
        <li> Reference # <span>【参考】</span></li>
        <li> Supplier reference # <span>【供应商参考】</span></li>
        <li> Supplier <span>【供应商】</span></li>
        <li> Manufacturer <span>【生产商】</span></li>
        <li> EAN13 <span>【条码】</span></li>
        <li> UPC <span>【UPC条码】</span></li>
        <li> Ecotax <span>【生态税】</span></li>
        <li> Weight <span>【重量】</span></li>
        <li> Quantity <span>【数量】</span></li>
        <li> Short description <span>【简述】</span></li>
        <li> Description <span>【介绍】</span></li>
        <li> Tags (x,y,z...)<span>【标签】</span></li>
        <li> Meta-title <span>【Meta标题】</span></li>
        <li> Meta-keywords <span>【Meta关键词】</span></li>
        <li> Meta-description <span>【Meta描述】</span></li>
        <li> URL rewritten <span>【URL重写】</span></li>
        <li> Text when in stock <span>【有库存时显示的字样】</span></li>
        <li> Text when backorder allowed <span>【缺货但可订购时显示的字样】</span></li>
        <li> <strong style="color:red;">Available for order <span>【可以订购】</span></strong></li>
        <li> <strong style="color:red;">Product creation date <span>【商品创建日期】</span></strong></li>
        <li> <strong style="color:red;">Show price <span>【是否显示价格】</span></strong></li>
        <li> Image URLs (x,y,z...) <span>【图片URLs】</span></li>
        <li> <strong style="color:red;">Delete existing images (0 = No, 1 = Yes) <span>【删除已存在的图片】</span></strong></li>
        <li> Feature <span>【功能】</span></li>
        <li> Available online only <span>【仅在线销售】</span></li>
        <li> <strong style="color:red;">Condition <span>【条件：全新/二手/翻新】</span></strong></li>
      </ol>
<!-- ######### ######### /main ######### ######### -->
{include file="footer.tpl"}
