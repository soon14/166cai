<?php $this->load->view("templates/head") ?>
<div class="path">您的位置：<a href="javascript:;">用户成长管理</a>&nbsp;&gt;&nbsp;<a href="/backend/Growth/pointDetail">积分明细</a></div>
<div class="mod-tab mt20">
	<div class="mod-tab-hd">
	    <ul>
		    <li ><a href="/backend/Growth/pointMonitor">积分监测</a></li>
		    <li ><a href="/backend/Growth/exchangeLog">兑换记录</a></li>
		    <li ><a href="/backend/Growth/stockManage">库存管理</a></li>
		    <li class="current"><a href="/backend/Growth/pointDetail">积分明细</a></li>
	    </ul>
  	</div>
</div>
<?php $ctype = array('购彩获得','任务获得','积分赠送','兑换红包','积分过期');?>
<div class="data-table-filter mt10">
        <form action="" method="get" id="search_form">
            <table>
                <colgroup>
                    <col width="50"/>
                    <col width="160"/>
                    <col width="50"/>
                    <col width="200"/>
                    <col width="60"/>
                    <col width="410"/>
                </colgroup>
                <tbody>
                <tr>
                    <th>关键字：</th>
                    <td>
                       <input type="text" class="ipt w130" name="name" value="<?php echo $search['name'] ?>" placeholder="用户名/真实姓名"/>
                    </td>
                    <th>交易编号：</th>
                    <td>
                       <input type="text" class="ipt w150" name="trade_no" value="<?php echo $search['trade_no'] ?>" />
                    </td>
                    <th>交易时间：</th>
                    <td>
	                    <span class="ipt ipt-date w184">
	                        <input type="text" name='created_s'  value="<?php echo $search['created_s'] ?>" class="Wdate1"/><i></i>
	                    </span>
	                    <span class="ml8 mr8">至</span>
	                    <span class="ipt ipt-date w184">
	                        <input type="text" name='created_e' value="<?php echo $search['created_e'] ?>" class="Wdate1"/><i></i>
	                    </span>
                    </td>
                </tr>
                <tr>
                    <th>交易类型：</th>
                    <td>
                        <select class="selectList w130" name="ctype">
                            <option value="">全部</option>
                            <?php foreach ($ctype as $k => $v): ?>
                            	<option value="<?php echo $k+1;?>"  <?php echo $search['ctype'] ==$k+1  ? "selected='selected'" : '';?> ><?php echo $v;?></option>
                            <?php endforeach ?>
                        </select>
                    </td>
                    <th>交易积分：</th>
                    <td>
	                    <input type="text" class="ipt w130" name="value_s" value="<?php echo $search['value_s'] ?>"/>
	                    <span class="ml8 mr8">至</span>
	                    <input type="text" class="ipt w130" name='value_e' value="<?php echo $search['value_e'] ?>" /><i></i>
                    </td>
                    <td colspan="2" style="text-indent: 8px;">
                        <input type="checkbox" name="mark" value="1" <?php echo isset($search['mark']) && $search['mark']==1 ?'checked="true"':''; ?> style="border: none;">收入交易
                        <input type="checkbox" name="mark1" value="1" <?php echo isset($search['mark1']) && $search['mark1']==1?'checked="true"':''; ?> style="border: none;">支出交易
 						&nbsp;&nbsp;<a id="searchTransction" href="javascript:void(0);" class="btn-blue ml35" >查询</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="data-table-list mt20">
        <table>
            <colgroup>
                <col width="129"/>
                <col width="100"/>
                <col width="78"/>
                <col width="105"/>
                <col width="78"/>
                <col width="85"/>
                <col width="112"/>
                <col width="120"/>
                <col width="90"/>
            </colgroup>
            <thead>
            <tr>
                <td colspan="9">
                    <div class="tal">
                        <strong>收入积分笔数</strong>
                        <span><?php echo $count[1]['mark']?$count[1]['mark']:0; ?> </span>
                        <strong class="ml20">收入积分总额</strong>
                        <span><?php echo $count[1]['value']?$count[1]['value']:0; ?></span>
                    </div>
                    <div class="tal">
                        <strong>支出积分笔数</strong>
                        <span><?php echo $count[0]['mark']?$count[0]['mark']:0; ?> </span>
                        <strong class="ml20">支出积分总额</strong>
                        <span><?php echo $count[0]['value']?$count[0]['value']:0; ?></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>交易编号</th>
                <th>用户名</th>
                <th>真实姓名</th>
                <th>交易类型</th>
                <th>收入积分</th>
                <th>支出积分</th>
                <th>账户当前积分</th>
                <th>交易时间</th>
                <th>交易说明</th>
            </tr>
            </thead>
            <tbody>
        	<?php foreach ($res as $k => $v): ?>
        	 <tr>
        		<td><?php echo $v['trade_no'] ;?></td>
        		<td><a href="/backend/User/user_manage/?uid=<?php echo $v['uid'] ;?>" target="_blank"><?php echo $v['uname'] ;?></a></td>
        		<td><?php echo $v['real_name'] ;?></td>
        		<td><?php echo $ctype[$v['ctype']] ;?></td>
        		<td><?php echo $v['mark']==1 ? $v['value'] :'--' ;?></td>
        		<td><?php echo $v['mark']==0 ? $v['value'] :'--' ; ;?></td>
        		<td><?php echo $v['uvalue'] ;?></td>
        		<td><?php echo $v['created'] ;?></td>
        		<td><?php echo $v['content'] ;?></td>
        	 </tr>
        	<?php endforeach ?>
            </tbody>
            <tfoot>

            <tr>
                <td colspan="9">
                    <div class="stat">
                        <span>本页&nbsp;<?php echo $pages[2] ?>&nbsp;条</span>
                        <span class="ml20">共&nbsp;<?php echo $pages[1] ?>&nbsp;页</span>
                        <span class="ml20">总计&nbsp;<?php echo $pages[3] ?>&nbsp;</span>
                    </div>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="page mt10 transactions_info">
        <?php echo $pages[0] ?>
    </div>
    <script src="/source/date/WdatePicker.js"></script>
    <script src="/caipiaoimg/src/layer/layer.js"></script>
    <script>
        var caipiao_cfg = jQuery.parseJSON('<?php echo json_encode($this->caipiao_cfg) ?>');
        //比较时间
        function compareDate(d1,d2)
        {
          return ((new Date(d1.replace(/-/g,"\/"))) > (new Date(d2.replace(/-/g,"\/"))));
        }
        $(function () {
        	$("#searchTransction").click(function(){
                if(compareDate($('input[name=created_s]').val(),$('input[name=created_e]').val()))
                {
        　　　　　　layer.alert('你选择的时间段错误', {icon: 2,btn:'',title:'温馨提示',time:0});
        　　　　　　return false; 
                }
                var value_s = $('input[name=value_s]').val();
                var value_e = $('input[name=value_e]').val();
                var re = /^[0-9]+$/ ;
                if(value_s && !re.test(value_s))
                {
        　　　　　　$('input[name=value_s]').val('');
                    layer.alert('交易积分区间值错误', {icon: 2,btn:'',title:'温馨提示',time:0});
        　　　　　　return false; 
                } 
                if(value_e && !re.test(value_e))
                {
        　　　　　　$('input[name=value_e]').val('');
                    layer.alert('交易积分区间值错误', {icon: 2,btn:'',title:'温馨提示',time:0});
        　　　　　　return false; 
                } 
                if(  (parseInt(value_s) > parseInt(value_e) || !re.test(value_s) || !re.test(value_e) ) && (value_e && value_s))
                {
        　　　　　　$('input[name=value_s]').val('');
                    $('input[name=value_e]').val('');
                    layer.alert('交易积分区间值错误', {icon: 2,btn:'',title:'温馨提示',time:0});
        　　　　　　return false; 
                }                
                $('#search_form').submit();
          	});

            $(".Wdate1").focus(function () {
                dataPicker();
            });

        });

    </script>
    </body>
    </html>