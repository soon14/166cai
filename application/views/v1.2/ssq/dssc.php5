<?php 
$hmselling = 0;
$hmendTime = $info['next']['seFsendtime']/1000 - $lotteryConfig[SSQ]['united_ahead'] * 60;
if(!$lotteryConfig[SSQ]['status']) {
	$selling = 0;
}elseif (isset($info['current']['endTime']) && time() > floor($info['current']['seFsendtime']/1000) && time() < floor($info['current']['endTime']/1000)) {
	$selling = 1;
}else {
	$selling = 2;
	if ($lotteryConfig[SSQ]['united_status']) {
		$hmselling = 1;
	}
}?>
<script type="text/javascript">
var ISSUE = "<?php echo $info['next']['issue']?>", ENDTIME = "<?php echo date('Y-m-d H:i:s', $info['next']['seFsendtime']/1000)?>", tzjqurl = "<?php echo $tzjqurl?>", chases = $.parseJSON('<?php echo json_encode($chases)?>'), 
chaselength = <?php echo $chaselength?>, selling = <?php echo $selling?>, hmendTime = '<?php echo $hmendTime?>', hmDate = new Date(hmendTime * 1000), hmselling = '<?php echo $hmselling?>', 
realendTime = '<?php echo date('Y-m-d H:i:s', $info['next']['seEndtime']/1000)?>', playType = 1, MULTI = <?php echo (int)$multi?> || 1;
</script>
<script type="text/javascript" src="<?php echo getStaticFile('/caipiaoimg/v1.1/js/math.min.js');?>"></script>
<script type="text/javascript" src="<?php echo getStaticFile('/caipiaoimg/v1.2/js/ssq.min.js');?>"></script>
<div class="wrap cp-box bet-num bet-ssq">
  <!--彩票信息-->
    <?php $this->load->view('v1.2/elements/lottery/info_panel', array('noIssue' => true)); ?>
    <div class='_clearToEmpty' style="display: none;"></div>
    <!--彩票信息end-->
    <div class="cp-box-bd bet">
        <div class="bet-main">
        	<div class="bet-link-bd">
        		<div class="bet-pick-area bet-tab">
	        		<div class="bet-tab-hd"><ul><li><a href="/ssq?playType=default">普通投注</a></li><li><a href="/ssq?playType=dt">胆拖投注</a></li><li data-type="ddsh"><a href="/ssq?playType=ddsh">定胆杀号</a></li><li  class="current dssc"><a href="/ssq/dssc">单式上传</a></li></ul></div>
	            <!-- 数字彩投注区 start -->
              <div class="bet-tab-bd">
               <!--单式上传dssc-->
                <div class="bet-tab-bd-inner dssc">
                    <div class="pick-area">
                        <p class="pick-area-explain"><i class="icon-font">&#xe61b;</i>玩法说明：上传方案中的单式号码与开奖号码相同，即中一等奖，单注最高奖金1000万元！</p>
                    </div>
                    <div class="upload">
                        <div class="rule">
                            <h3>上传规则：</h3>
                            <ol>
                                <li>1、单式上传提前<span class="dsjzsj">15</span>分钟截止，上传文件必须是（.txt）文本，文件大小不能超过256KB；</li>
                                <li>2、每个号码为2位数字，一行一个投注号，只支持单式号码上传；</li>
                                <li>3、红球间用“空格”或“,”或“.”分隔，红球和蓝球间用“|”或“+”或“:”分隔；</li>
                                <li class="example">
                                    <span>4、投注示例：</span>
                                    <div class="example-cnt">
                                        <p>01 02 03 04 05 06:05</p>
                                        <p>01,02,03,04,05,06+05</p>
                                        <p>01.02.03.04.05.06|05</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div id="uploader" class="up-prog">
                            <div id="picker0">选择文件</div>
                            <div id="thelist0" class="uploader-list"><span class="uploader-list-tips">未选择任何文件</span></div>
                            <a href="javascript:;" id="ctlBtn0" class="btn btn-default">开始上传</a>
                        </div>
                    </div>
                </div>    
              </div>
	             <!-- 数字彩投注区 end -->
             	</div>
             </div>
            <div class="cast-basket">
                <div class="bet-area-txt">
                  已选<strong class="num-multiple betNum _betNum">0</strong>注，投
                  <div class="multi-modifier">
                    <a href="javascript:;" class="minus">-</a><label><input class="multi number" type="text" value="<?php echo $multi?>" autocomplete="off"  /></label><a href="javascript:;" class="plus" data-max="99">+</a>
                  </div>
                  倍（最大99倍），共计<strong class="num-money betMoney _betMoney">0</strong>元
                </div>
                <!-- 追号系统 start -->
                <div class="buy-type tab-radio">
                    <div class="buy-type-hd tab-radio-hd">
                    	<div class="chase-number-notes">由购买人自行全额购买彩票，独享奖金<span class="mod-tips"><i class="icon-font bubble-tip" tiptext="<em>自购：</em>选好投注号码后，由自己全额<br>支付购彩款。中奖后，自己独享全部<br>税后奖金。">&#xe613;</i></span></div>
                        <em>购买方式：</em>
                        <ul class='_select_buy_way'>
                        	<li><label for="ordertype0"><input type="radio" id="ordertype0" name="chaseNumberTab" checked>自购</label></li>
                        	<li style="display: none;"><label for="ordertype1" class="main-color-s"><input type="radio" id="ordertype1" name="chaseNumberTab">我要追号</label><div class="mod-tips-t ptips-bd">花小钱，追百万大奖 <i class="ptips-bd-close">×</i><b></b><s></s></div></li>
                        	<li><label for="ordertype2" class="main-color-s"><input type="radio" id="ordertype2" name="chaseNumberTab">发起合买</label></li>
                        </ul>
                    </div>
                    <div class="buy-type-bd tab-radio-bd">
                    	<div class="tab-radio-inner hide"></div>
                      <div class="tab-radio-inner hide"></div>
                    	<!-- 追号弹层start -->
<!--                       <div class="tab-radio-inner">
                          <div class="chase-number-table">
                              <table class="chase-number-table-hd">
                                  <thead>
                                      <colgroup><col width="40"><col width="200"><col width="80"><col width="140"><col width="160"></colgroup>
                                      <tr><th>序号</th><th class="tal"><input checked type="checkbox">追<input type="text" value="10" data-max="<?php echo count($chases) > 50 ? 50 : count($chases)?>" class="ipt-txt follow-issue">期<s>（共50期）</s></th>
                                      <th><input type="text" class="ipt-txt follow-multi" data-max="99" value="<?php echo $multi?>">倍</th><th>方案金额（元）</th><th>预计开奖时间</th></tr>
                                  </thead>
                              </table>
                              <div class="chase-number-table-bd">
                                  <table>
                                      <colgroup><col width="40"><col width="200"><col width="80"><col width="140"><col width="140"></colgroup>
                                      <tbody>
                                      <?php 
                                      $k = 0;
                                      foreach ($chases as $issue => $chase) {
                                        if ($k < $chaselength) {?>
                                        <tr data-issue="<?php echo $issue?>">
                                              <td><?php echo $k+1?></td>
                                              <td class="tal"><input type="checkbox" checked><?php echo $issue."期"; if ($issue == $info['next']['issue']) {?><span class="main-color-s">（当前期）</span><?php }?></td>
                                              <td><input type="text" value="<?php echo $multi?>" class="ipt-txt follow-multi">倍</td>
                                              <td><span class="main-color-s follow-money"><?php echo $chase['money']?></span>元</td>
                                              <td><?php echo substr($chase['award_time'], 0, -3)?></td>
                                          </tr>
                                      <?php 
                                        $k++;
                                      }else {
                                        break;
                                      }
                                      }?>
                                      </tbody>
                                  </table>
                              </div>
                              <table class="chase-number-table-ft">
                                  <colgroup><col width="50%"><col width="50%"></colgroup>
                                  <tfoot>
                                      <tr>
                                          <td><span class="fbig">共追号<em>7</em>期，总投注金额<em>14</em>元</span></td>
                                          <td class="tar">
                                            <div>
                                                  <input type="checkbox">中奖金额><input class="ipt-txt setMoney" value="5000" type="text">元后停止追号
                                                  <span class="mod-tips">
                                                    <i class="icon-font">&#xe613;</i><div class="mod-tips-t"><em>中奖停追：</em>勾选后，您的追号方案中的某一期中<br>奖金额大于您设定的金额后，后续的追号订单将<br>被撤销，资金返还您的账户中。如不勾选，系统<br>一直帮您购买所有的追号投注任务。<b></b><s></s></div>
                                                  </span>
                                              </div>
                                          </td>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div> -->
	                    <!-- 追号弹层end -->
	                    <div class="tab-radio-inner"><?php $this->load->view('v1.2/elements/lottery/hemai');?></div>
                    </div> 
                </div>
                <div class="btn-group">
		            <a id="pd_ssq_buy" class="btn btn-main <?php echo $showBind ? ' not-bind': '';?>" >确认预约</a>
                    <p class="btn-group-txt"><input class="ipt_checkbox" type="checkbox" checked="checked" id="agreenment"><label for="agreenment">我已阅读并同意</label><a href="javascript:;" class='lottery_pro'>《用户委托投注协议》</a></p>
                </div>
            </div>
        </div>

    <!-- 投注页侧边栏模块 -->
    <div class="bet-side">
      <div class="bet-side-item bet-side-jc">
        <h2 class="bet-side-title"><a href="<?php echo $baseUrl; ?>kaijiang/ssq" target="_blank">双色球奖池</a></h2>
        <?php $pool = explode('|', $info['current']['pool'])?>
        <p class="num-jc"><em><?php if (!empty($pool[0])) { ?><b><?php echo $pool[0]?></b>亿<?php }?><?php if (empty($pool[0]) && empty($pool[1])) {?>奖池更新中...<?php }else {?><b><?php echo $pool[1]?></b>万<?php }?></em></p>
        <p>至少可开出<em><?php echo empty($pool[3]) ? '--' : $pool[3]?></em>注500万大奖</p>
      </div>
      <div class="bet-side-item bet-side-notice">
        <h2 class="bet-side-title">
        	<a href="<?php echo $baseUrl; ?>kaijiang/ssq" target="_blank">双色球开奖结果</a>
        	<a href="<?php echo $baseUrl; ?>activity/yfqmcp" class="bet-side-qwimg" target="_blank"><img src="/caipiaoimg/v1.1/img/img-ssq-lnk.png" width="106" height="28" alt="注册送3元"></a>
        </h2>
        <div class="ball-group-box">
          <p class="ball-group-title"><a href="<?php echo $baseUrl; ?>kaijiang/ssq" target="_blank" class="more lnk-detail">详情<i>»</i></a>双色球第<b><?php echo $info['current']['issue']?></b>期</p>
          <?php $awardArr = explode(":", $info['current']['awardNum'])?>
          <div class="ball-group-s">
          <?php foreach (explode(',', $awardArr[0]) as $award) {?><span><?php echo $award?></span><?php } foreach (explode(',', $awardArr[1]) as $award) {?><span class="ball-blue"><?php echo $award?></span><?php }?>
          </div>
        </div>
        <?php $this->load->view('v1.1/static/ssq_kj');?>
        <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqzonghe.html" target="_blank" class="more lnk-more">更多<i>»</i></a>
      </div>
      <div class="bet-side-item ">
        <h2 class="bet-side-title"><a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqzonghe.html" target="_blank">双色球走势图</a></h2>
        <div class="lnk-chart">
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqzonghe.html" target="_blank">基本走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqhezhi.html" target="_blank">和值走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/jioushuangma.html" target="_blank">红球奇偶走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqdaxiao.html" target="_blank">大小走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqlanqiuzonghe.html" target="_blank">蓝球走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqsanfq.html" target="_blank">红球三区走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqwuxing.html" target="_blank">五行走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqweishudingwei.html" target="_blank">红球尾走势</a>
          <a rel="nofollow" href="https://zoushi.166cai.cn/cjwssq/view/ssqzhihe.html" target="_blank">红球质合走势</a>
        </div>
      </div>
      <?php $this->load->view('v1.1/static/ssq_info');$this->load->view('v1.1/elements/common/lottery_help');?>
    </div>
  </div>
</div>
<!--容器end-->
<script type="text/javascript" src="<?php echo getStaticFile('/source/js/webuploader.min.js');?>"></script>
<script type="text/javascript" src="<?php echo getStaticFile('/caipiaoimg/v1.2/js/dssc.min.js');?>"></script>
<script type="text/javascript">
  $(function(){
    $('.dsjzsj').html(<?php echo $dsjzsj;?>);
    $('.bet-tab-hd li').unbind();
    cx._basket_.setType('dssc');
  });
</script>