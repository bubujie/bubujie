{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="商品详细信息"}
<!-- ######### ######### main ######### ######### -->
<h1>商品详细信息</h1>
<hr />
{foreach $results as $i}
<hr />
<h3>品名：{$i['商品名称']}</h3>
<table border="1">
  <tr>
    <th>生产许可证编号</th>
    <td>{$i['QS']}</td>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>商品名称</th>
    <td>{$i['商品名称']}</td>
    <th>商品条码</th>
    <td>{$i['生产商代码']}{$i['商品代码']}</td>
  </tr>
  <tr>
    <th>厂名</th>
    <td>{$i['厂名']}</td>
    <th>厂址</th>
    <td>{$i['厂址']}</td>
  </tr>
  <tr>
    <th>净含量</th>
    <td>{$i['净含量']}</td>
    <th>保质期</th>
    <td>{$i['保质期']}</td>
  </tr>
  <tr>
    <th>规格</th>
    <td>{$i['规格']}</td>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
</table>
{/foreach}
<!-- ######### ######### /main ######### ######### -->
{include file="footer.tpl"}
