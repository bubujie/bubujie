{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="商品列表"}
<!-- ######### ######### main ######### ######### -->
<h1>商品列表</h1>
<hr />
<table border="1">
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>

    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>

    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>

    <th>16</th>
    <th>17</th>
    <th>18</th>
    <th>19</th>
    <th>20</th>

    <th>21</th>
    <th>22</th>
    <th>23</th>
    <th>24</th>
    <th>25</th>

    <th>26</th>
    <th>27</th>
    <th>28</th>
    <th>29</th>
    <th>30</th>

    <th>31</th>
    <th>32</th>
    <th>33</th>
    <th>34</th>
    <th>35</th>

    <th>36</th>
    <th>37</th>
    <th>38</th>
  </tr>
  <tr>
    <th>ID</th>
    <th>启用</th>
    <th>名称</th>
    <th>分类</th>
    <th>含税价</th>

    <th>税规</th>
    <th>供价</th>
    <th>在售</th>
    <th>折量</th>
    <th>折率</th>

    <th>折始</th>
    <th>折束</th>
    <th>参考</th>
    <th>供参</th>
    <th>供者</th>

    <th>生产商</th>
    <th>条码</th>
    <th>UPC</th>
    <th>态税</th>
    <th>重量</th>

    <th>库存</th>
    <th>简述</th>
    <th>介绍</th>
    <th>标签</th>
    <th>M标题</th>

    <th>M关键词</th>
    <th>M描述</th>
    <th>URL</th>
    <th>售T</th>
    <th>订T</th>

    <th>可订</th>
    <th>TIME</th>
    <th>显价</th>
    <th>IMG</th>
    <th>删除</th>

    <th>功能</th>
    <th>OL</th>
    <th>条件</th>
  </tr>
{foreach $results as $i}
  <tr>
    <td>{$i['ID']}</td>
    <td>{$i['是否在售']}</td>
    <td>{$i['商品名称']}</td>
    <td></td>
    <td>{$i['售价']}</td>

    <td></td>
    <td>{$i['供价']}</td>
    <td>{$i['是否在售']}</td>
    <td></td>
    <td></td>

    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

    <td>{$i['生产商代码']}</td>
    <td>{$i['生产商代码']}{$i['商品代码']}</td>
    <td></td>
    <td></td>
    <td>{$i['重量']}</td>

    <td></td>
    <td>{$i['商品简述']}</td>
    <td>{$i['商品介绍']}</td>
    <td></td>
    <td>{$i['Meta标题']}</td>

    <td>{$i['Meta关键词']}</td>
    <td>{$i['Meta描述']}</td>
    <td>hlm</td>
    <td></td>
    <td></td>

    <td>{$i['是否在售']}</td>
    <td>{$i['TIME']}</td>
    <td></td>
    <td></td>
    <td></td>

    <td></td>
    <td>0</td>
    <td>new</td>
  </tr>
{/foreach}
</table>
<!-- ######### ######### /main ######### ######### -->
{include file="footer.tpl"}
