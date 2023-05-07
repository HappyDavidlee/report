<?php
//error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
require_once 'controller.php';
$controller = new Controller();
# 1、平台运营指标
$data = $controller->getOperationData();
# 2、员工管理
$customer_service = $controller->getCustomer_service();
# 3、缴费管理
$payment_manager = $controller->getPayment_manager();
#4、 维修工单
$maintenance_ticket = $controller->getMaintenance_Ticket();
# 5、智慧工单
$wisdom_ticket = $controller->getWisdom_ticket();
# 6、巡检工单
$perform_inspection = $controller->getPerform_Inspection();
#7、采购库存
$procurement_inventory = $controller->getProcurement_Inventory();
#8、设施设备：
$facility_equipment = $controller->getFacility_Equipment();
#9、合同管理
$contract_management = $controller->getContract_Management();
#10、电商运营
$Ecommerce_operation = $controller->getEcommerce_Operation();
#11、健身俱乐部
$health_club = $controller->getHealth_Club();
#12、资产管理
$Resources = $controller->getResources_Management()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>运营报表</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black; /* 将表格线条颜色设为黑色 */
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #F4F5F7; /* 将表头背景色设为#F4F5F7 */
            font-weight: bold;
            color: black; /* 将表头文字颜色设为黑色 */
        }

        tr:nth-child(even) {
            background-color: #F9FBFF; /* 将交替行背景色设为#F9FBFF */
        }
        .center {
            text-align: center;
        }
        .left-aligned {
            text-align: left;
        }
    </style>
</head>
<body>
<h1>平台运营月度报告</h1>
<h2>一、业务概况</h2>
<table style="width:50%;">
    <tr>
        <th>所属区域</th>
        <td>北京、武汉、深圳、上海、杭州</td>
        <th>时间周期</th>
        <td>2023年4月1日-2022年4月30日</td>
        <th>所属平台</th>
        <td>海e平台/e生活平台</td>
    </tr>
    <tr>
        <th>一级管理处名称</th>
        <td colspan="5">"北京居住区一期、北京居住区二期、北京民生金融中心、泛海航程会、深圳太子山庄管理服务中心、深圳城市广场管理服务中心、深圳新世纪管理服务中心、上海港陆管理服务中心、泛海城市广场一期物业管理处、泛海城市广场二期物业管理处、樱悦海园物业管理处、松竹桂海园物业管理处、泛海国际SOHO城物业管理、香兰海园物业管理处、民生金融中心物业管理处、长江证券总部大楼物业管理处、芸海园物业管理处、碧海园物业管理处、武汉桂海园会所 "</td>
    </tr>
    <tr>
        <th>平台功能概述</th>
        <td colspan="5">主要包括客户服务、缴费管理、智慧工单、维修管理、采购库存、巡航巡检、设备设施、合同管理、电商运营、生活服务、绩效管理、内容运营、健康会所、资产管理。	</td>
    </tr>
    <tr>
        <th>运维概述</th>
        <td colspan="5"  class="left-aligned">
            问题总数：62<br>
            问题分类：<br>
            1、代码问题：42<br>
            2、操作问题：2<br>
            3、其他：4<br>
            4、平台建议：6<br>
            5、报表问题：1<br>
            6、历史数据问题：3<br>
            7、系统缺陷：2<br>
            8、功能优化：2<br><br>
            问题处理情况：<br>
            问题处理情况：<br>
            1、已解决：50<br>
            2、已关闭：7<br>
            3、激活：5<br><br>
            主要包含以下几类：<br>
            1、代码问题：涉及到程序运行中出现的错误或异常，导致系统无法正常运行或功能不完善。例如：合同管理-付费计划中部分合同无法勾选，系统生成工单分配不出去等问题。<br>
            2、系统缺陷：指系统在设计或实现过程中出现的缺陷，可能导致系统无法正常运行或实现某些功能。例如：库存盘点完毕后，导入盘点物料显示成功，但实际没有导入数据。<br>

            3、性能问题：与系统性能相关的问题，例如：服务器访问速度慢，导致APP端和电脑端加载速度慢等。<br>

            4、平台建议：用户对平台的使用建议，以改进和优化平台功能。例如：盘点计划中业务员仅能选择一人，实际需2人，建议修改此功能。<br>

            5、功能优化：针对现有功能进行优化或调整，以满足用户需求。例如：入库单验收人，按制度要求应该是两个部门三个人，目前验收人仅能选择一人，建议优化此功能。<br>

            6、操作问题：用户在操作过程中遇到的问题，可能与系统设计或用户操作有关。例如：员工反映APP端交接班内容填写后，无法拖拽屏幕上滑，无法点触交接确认按钮。<br>

            在此报告期内，共记录了62个问题，涵盖了代码问题、操作问题、平台建议等多个方面。经过团队的努力，已成功解决了50个问题，7个问题已关闭，5个问题处于激活状态。我们将继续关注这些问题并努力改进产品和服务。
        </td>
    </tr>
</table>
<h2>二、平台运营指标</h2>
<table style="width:50%;">
    <thead>
    <tr>
        <th>地区</th>
        <th>一级管理处</th>
        <th>平台运营指数</th>
        <th>员工活跃度</th>
        <th>员工App工作饱和度</th>
        <th>员工工单完成率</th>
        <th>住户认证率</th>
        <th>认证用户活跃度</th>
        <th>住户报修率</th>
        <th>住户缴费率</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $area => $areaData): ?>
        <?php foreach ($areaData as $index => $row): ?>
            <tr>
                <?php if ($index === 0): ?>
                    <td rowspan="<?= count($areaData) ?>"><?= $area ?></td>
                <?php endif; ?>
                <td><?= $row['communityName'] ?></td>
                <td><?= $row['operationNum'] ?></td>
                <td><?= $row['employeeActivity'] ?></td>
                <td><?= $row['saturation'] ?></td>
                <td><?= $row['completion'] ?></td>
                <td><?= $row['certification'] ?></td>
                <td><?= $row['customerActivity'] ?></td>
                <td><?= $row['reportRate'] ?></td>
                <td><?= $row['paymentRate'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
<h2>三、系统运行数据统计</h2>
<h3>1、客户服务</h3>
<table>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">业务数据</th>
        <?php foreach ($customer_service as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($customer_service as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'totalAmount', 'toCommunity', 'finishPercent', 'appNum', 'finishRate',
        'totalPraiseAmount', 'finishPraiseRate', 'approveUserNum', 'noticeNum',
        'communicationNum', 'topicNum'
    ];
    $keyNames = [
        '新增投诉单数', '完成投诉单数', '投诉处理满意率（%）', '报事单数量', '报事单完成率（%）',
        '表扬单数量', '表扬单完成率（%）', '新增业主认证', '通知公告数量', '社区活动数量', '文章发布数量'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($customer_service as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>2、缴费管理</h3>
<table>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">业务数据</th>
        <?php foreach ($payment_manager as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($payment_manager as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'feeCountNum', 'appFeeCountNum', 'appOrderCountRatio', 'feeAmount',
        'appFeeCountNum', 'appOrderAmountRatio', 'propertyFeeIncome',
        'propertyFeeCollectionRate', 'parkingFeeIncome'
    ];
    $keyNames = [
        '缴费单数', 'App缴费单数', 'App缴费单数占比', '缴费总金额（元）',
        'APP缴费金额', 'APP缴费金额占比', '物业费收入（元）',
        '物业费收缴率（截至目前）', '车位费收入（元）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($payment_manager as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>3、维修工单</h3>
<table>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">维修工单</th>
        <?php foreach ($maintenance_ticket as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($maintenance_ticket as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'timingNum', 'workTime', 'workerAvgTime', 'completeRate',
        'satisfactionRate', 'totalPrice'
    ];
    $keyNames = [
        '接单量（单）', '总工时（小时）', '人均工时数（小时）', '维修工单完成率（%）',
        '维修工单满意率（%）', '维修费收入（元）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($maintenance_ticket as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>4、智慧工单</h3>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <tr>
        <th rowspan="2" colspan="2" style="text-align: center;">智慧工单</th>
        <?php foreach ($wisdom_ticket as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($wisdom_ticket as $area => $areaData): ?>
            <?php foreach ($areaData as $communityName => $communityData): ?>
                <th style="text-align: center; width: 620px;"><?= $communityName ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'sumCompleteTimeQuota', 'sumTimeActual', 'sumTimeFixedWorkOrder', 'averageCompleteTimeQuota',
        'completeRate', 'standardRate', 'inspectRate'
    ];
    $keyNames = [
        '完成工单额定总工时(分钟)', '完成工单实际总工时(分钟)', '固定工单工作总工时（分钟）', '人均实际完成工单时长',
        '完成率(%)', '达标率(%)', '核查率(%)'
    ];
    ?>

    <?php $firstCommunityData = reset(reset($wisdom_ticket)); ?>
    <?php $departmentNames = array_keys($firstCommunityData); ?>
    <?php foreach ($departmentNames as $departmentName): ?>
        <?php foreach ($keys as $index => $key): ?>
            <tr>
                <?php if ($index === 0): ?>
                    <th rowspan="<?= count($keys) ?>"><?= $departmentName ?></th>
                <?php endif; ?>
                <th><?= $keyNames[$index] ?></th>
                <?php foreach ($wisdom_ticket as $area => $areaData): ?>
                    <?php foreach ($areaData as $communityData): ?>
                        <td><?= isset($communityData[$departmentName][$key]) ? $communityData[$departmentName][$key] : '-' ?></td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </tbody>
</table>


<h3>5、巡检工单</h3>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">巡检工单</th>
        <?php foreach ($perform_inspection  as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($perform_inspection  as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'cruiseNum', 'cruiseRate', 'cruiseCompletedRate', 'workNum',
        'workRate', 'workCompletedRate'
    ];
    $keyNames = [
        '巡航工单（数量）', '巡航工单完成率（%）', '巡航核查率（%）', '巡检工单（数量）',
        '巡检工单完成率（%）', '巡检工单核查率（%）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($perform_inspection  as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>6、采购库存</h3>
<table>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">采购库存</th>
        <?php foreach ($procurement_inventory as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($procurement_inventory as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'budget', 'extraList', 'toDayList', 'property_stock'
    ];
    $keyNames = [
        '采购预算（元）', '当月采购金额（元）', '累计采购金额（元）', '库存物料金额（元）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($procurement_inventory as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>7、设备设施</h3>
<table>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">设备设施</th>
        <?php foreach ($facility_equipment as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($facility_equipment as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'deviceSum', 'normalRate'
    ];
    $keyNames = [
        '设备总数（台）', '设备完好率（%）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($facility_equipment as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>8、合同管理</h3>
<table>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">合同管理</th>
        <?php foreach ($contract_management as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($contract_management as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'new_contract', 'maturity', 'contract_progress', 'actual_payment',
        'tangible_receipts', 'payment_plan', 'collection_plan'
    ];
    $keyNames = [
        '新增合同（单）', '到期合同（单）', '执行中合同（单）', '计划收款（元）',
        '实际收款（元）', '计划付款（元）', '实际付款（元）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($contract_management as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>9、资产管理</h3>
<h4>此模块为更新模块数据需要6月份才能展示5月份数据</h4>
<table>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">资产管理</th>
        <?php foreach ($Resources as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($Resources as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'resource_property', 'resource_quantity', 'signed_quantity', 'vacancy_rate',
        'operating_revenue', 'last_year_operating_revenue', 'growth_rate', 'yield_ratio',
        'collection_rate', 'collection_timeliness_rate'
    ];
    $keyNames = [
        '资源属性', '资源数量', '已签约数量', '资源空置率', '经营收入（应收）',
        '上年同期经营收入', '增长率', '收益占比', '收缴率', '收缴及时率'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($Resources as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>10、电商运营</h3>
<table style="width:10%;">
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">电商运营</th>
        <?php foreach ($Ecommerce_operation as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($Ecommerce_operation as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'orderAmount', 'orderTotal', 'refundAmount'
    ];
    $keyNames = [
        '下单金额（元）', '订单数（单）', '退款金额（元）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($Ecommerce_operation as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>11、健身会所</h3>
<table style="width:20%;">
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center;">健身会所</th>
        <?php foreach ($health_club as $area => $areaData): ?>
            <th colspan="<?= count($areaData) ?>" style="text-align: center;"><?= $area ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($health_club as $area => $areaData): ?>
            <?php foreach ($areaData as $index => $row): ?>
                <th style="text-align: center; width: 620px;"><?= $row['communityName'] ?></th>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $keys = [
        'memberNum', 'privateCoachNum', 'private_training_amount', 'cardUsedNum',
        'unpassNum', 'dining_reservation_quantity', 'foodRevenue'
    ];
    $keyNames = [
        '新增会员数（人）', '私教购买（单）', '私教购买金额（元）', '刷卡（次）',
        '场地预约（次）', '餐饮预订数量（份）', '餐饮收入（元）'
    ];
    ?>
    <?php foreach ($keys as $index => $key): ?>
        <tr>
            <th><?= $keyNames[$index] ?></th>
            <?php foreach ($health_club as $area => $areaData): ?>
                <?php foreach ($areaData as $row): ?>
                    <td><?= $row[$key] ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</html>