<?php
/**
 * Created by PhpStorm.
 * @author: Kate
 * @date: 2023/4/8 6:32 PM
 */


require_once 'db.php';

class Controller
{
    private $db;
    private $order = [
        '北京地区' => [
            '泛海国际居住区一期管理处',
            '泛海国际居住区二期管理处',
            '北京民生金融中心',
            '泛海国际居住区一期会所',
            '泛海国际居住区二期世家会所',
            '泛海国际居住区二期容郡会所'
        ],
        '深圳地区' => [
            '深圳新世纪',
            '深圳城市广场',
            '深圳太子山庄'
        ],
        '武汉地区' => [
            '泛海城市广场一期物业管理处',
            '泛海城市广场二期物业管理处',
            '泛海国际SOHO城物业管理处',
            '松竹桂海园物业管理处',
            '香兰海园物业管理处',
            '民生金融中心物业管理处',
            '樱悦海园物业管理处',
            '碧海园物业管理处',
            '芸海园物业管理处',
            '长江证券总部大楼物业管理处',
            '武汉桂海园会所'
        ],
        '上海地区' => [
            '上海港陆黄浦'
        ],
        '潍坊地区' => [
            '潍坊城市花园'
        ],
        '西安地区' => [
            '西安兵马俑国际旅游广场'
        ],
        '济南地区' => [
            '济南山东商会大厦'
        ],
        '杭州地区' => [
            '杭州国际中心'
        ],
        '青岛地区' => [
            '青岛市民中心'
        ]
    ];

    private $wisdom =  [
        '北京地区' => [
            '泛海国际居住区一期管理服务中心',
            '泛海国际居住区二期管理处',
            '北京民生金融中心管理服务中心',
            '泛海国际居住区一期会所',
            '泛海国际居住区二期世家会所',
            '泛海国际居住区二期容郡会所'
        ],
        '深圳地区' => [
            '深圳新世纪管理服务中心',
            '深圳城市广场管理服务中心',
            '深圳太子山庄管理服务中心'
        ],
        '武汉地区' => [
            '武汉•泛海城市广场一期',
            '武汉•泛海城市广场二期',
            '泛海国际SOHO城物业管理处',
            '松竹桂海园物业管理处',
            '香兰海园物业管理处',
            '民生金融中心物业管理处',
            '樱悦海园物业管理处',
            '碧海园物业管理处',
            '芸海园物业管理处',
            '长江证券总部大楼物业管理处',
            '武汉桂海园会所'
        ],
        '上海地区' => [
            '上海港陆管理服务中心'
        ],
        '潍坊地区' => [
            '潍坊城市花园管理服务中心'
        ],
        '西安地区' => [
            '西安兵马俑旅游广场管理服务中心'
        ],
        '济南地区' => [
            '济南山东商会大厦管理服务中心'
        ],
        '杭州地区' => [
            '杭州国际中心管理服务中心'
        ],
        '青岛地区' => [
            '青岛市民中心管理服务中心'
        ]
    ];

    private $getMaintenance_order = [
        '北京地区' => [
            '泛海国际居住区一期管理处',
            '泛海国际居住区二期管理处',
            '北京民生金融中心',
            '泛海国际居住区一期会所',
            '泛海国际居住区二期世家会所',
            '泛海国际居住区二期容郡会所'
        ],
        '深圳地区' => [
            '深圳新世纪',
            '深圳城市广场',
            '深圳太子山庄'
        ],
        '武汉地区' => [
            '武汉•泛海城市广场一期',
            '武汉•泛海城市广场二期',
            '武汉•桂海园',
            '武汉•松海园',
            '武汉•竹海园',
            '武汉•长江证券',
            '武汉•SOHO12',
            '武汉•SOHO11',
            '武汉•香兰海园',
            '武汉•民生金融中心',
            '武汉•樱海园',
            '武汉•悦海园',
            '武汉•碧海园',
            '武汉•芸海园'
        ],
        '上海地区' => [
            '上海港陆黄浦'
        ],
        '潍坊地区' => [
            '潍坊城市花园'
        ],
        '西安地区' => [
            '西安兵马俑国际旅游广场'
        ],
        '济南地区' => [
            '济南山东商会大厦'
        ],
        '杭州地区' => [
            '杭州国际中心'
        ],
        '青岛地区' => [
            '青岛市民中心'
        ]
    ];

    private $getPerform_InspectionOrder = [
        '北京地区' => [
            '泛海国际居住区一期管理服务中心',
            '泛海国际居住区二期管理服务中心',
            '北京民生金融中心管理服务中心',
            '泛海国际居住区一期会所',
            '泛海国际居住区二期世家会所',
            '泛海国际居住区二期容郡会所'
        ],
        '深圳地区' => [
            '深圳新世纪管理服务中心',
            '深圳城市广场管理服务中心',
            '深圳太子山庄管理服务中心'
        ],
        '武汉地区' => [
            '武汉•泛海城市广场一期',
            '武汉•泛海城市广场二期',
            '武汉•桂海园',
            '武汉•松海园',
            '武汉•竹海园',
            '武汉•长江证券',
            '武汉•SOHO12',
            '武汉•SOHO11',
            '武汉•香兰海园',
            '武汉•民生金融中心',
            '武汉•樱海园',
            '武汉•悦海园',
            '武汉•碧海园',
            '武汉•芸海园'
        ],
        '上海地区' => [
            '上海港陆管理服务中心'
        ],
        '潍坊地区' => [
            '潍坊城市花园管理服务中心'
        ],
        '西安地区' => [
            '西安兵马俑旅游广场管理服务中心'
        ],
        '济南地区' => [
            '济南山东商会大厦管理服务中心'
        ],
        '杭州地区' => [
            '杭州国际中心管理服务中心'
        ],
        '青岛地区' => [
            '青岛市民中心管理服务中心'
        ]
    ];

    public function __construct()
    {
        $this->db = (new DB())->connect();
    }
    // 1、平台运营指标
    public function getOperationData()
    {
        $result = $this->db->query("SELECT * FROM operation where `date` = '202304'");

        $operations = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($operations[$area])) {
                $operations[$area] = [];
            }
            $operations[$area][] = $row;
        }
        return $operations;
    }
    // 4、客服管理
    public function getCustomer_service()
    {
        $result = $this->db->query("SELECT * FROM customer_service where `date` = '202304'");

        $customer_service = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($customer_service[$area])) {
                $customer_service[$area] = [];
            }
            $customer_service[$area][$row['communityName']] = $row;
        }

        $order = $this->order;

        $sorted_customer_service = [];

        foreach ($order as $area => $communityNames) {
            if (isset($customer_service[$area])) {
                $sorted_customer_service[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($customer_service[$area][$communityName])) {
                        $sorted_customer_service[$area][] = $customer_service[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_customer_service;
    }


    // 5、智慧工单
    public function getWisdom_ticket()
    {
        $result = $this->db->query("SELECT * FROM wisdom_ticket where `date` = '202304'");

        $wisdom_ticket = [];

        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            $communityName = $row['communityName'];
            $departmentName = $row['departmentName'];

            if (!isset($wisdom_ticket[$area])) {
                $wisdom_ticket[$area] = [];
            }

            if (!isset($wisdom_ticket[$area][$communityName])) {
                $wisdom_ticket[$area][$communityName] = [];
            }

            $completeRate = $row['completeRate'] != '-' ? round($row['completeRate'] * 100, 2) . '%' : '-';
            $standardRate = $row['standardRate'] != '-' ? round($row['standardRate'] * 100, 2) . '%' : '-';
            $inspectRate = $row['inspectRate'] != '-' ? round($row['inspectRate'] * 100, 2) . '%' : '-';

            $wisdom_ticket[$area][$communityName][$departmentName] = [
                'sumCompleteTimeQuota' => $row['sumCompleteTimeQuota'],
                'sumTimeActual' => $row['sumTimeActual'],
                'sumTimeFixedWorkOrder' => $row['sumTimeFixedWorkOrder'],
                'averageCompleteTimeQuota' => $row['averageCompleteTimeQuota'],
                'completeRate' => $completeRate,
                'standardRate' => $standardRate,
                'inspectRate' => $inspectRate
            ];
        }

        $order = $this->wisdom;

        $sorted_wisdom_ticket = [];

        foreach ($order as $area => $communityNames) {
            if (isset($wisdom_ticket[$area])) {
                $sorted_wisdom_ticket[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($wisdom_ticket[$area][$communityName])) {
                        $sorted_wisdom_ticket[$area][$communityName] = $wisdom_ticket[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_wisdom_ticket;
    }

//    public function getWisdom_ticket()
//    {
//        $result = $this->db->query("SELECT * FROM wisdom_ticket where `date` = '202304'");
//
//        $wisdom_ticket = [];
//
//        while ($row = $result->fetch_assoc()) {
//            $area = $row['area'];
//            $communityName = $row['communityName'];
//            $departmentName = $row['departmentName'];
//
//            if (!isset($wisdom_ticket[$area])) {
//                $wisdom_ticket[$area] = [];
//            }
//
//            if (!isset($wisdom_ticket[$area][$communityName])) {
//                $wisdom_ticket[$area][$communityName] = [];
//            }
//
//            $wisdom_ticket[$area][$communityName][$departmentName] = [
//                'sumCompleteTimeQuota' => $row['sumCompleteTimeQuota'],
//                'sumTimeActual' => $row['sumTimeActual'],
//                'sumTimeFixedWorkOrder' => $row['sumTimeFixedWorkOrder'],
//                'averageCompleteTimeQuota' => $row['averageCompleteTimeQuota'],
//                'completeRate' => $row['completeRate'],
//                'standardRate' => $row['standardRate'],
//                'inspectRate' => $row['inspectRate']
//            ];
//        }
//
//        return $wisdom_ticket;
//    }
    // 缴费管理
    public function getPayment_manager()
    {
        $result = $this->db->query("SELECT * FROM payment_manager where `date` = '202304'");

        $payment_manager = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($payment_manager[$area])) {
                $payment_manager[$area] = [];
            }
            $row['feeAmount'] = number_format($row['feeAmount'], 2, '.', '');
            $payment_manager[$area][$row['communityName']] = $row;
        }

        $order = $this->order;

        $sorted_payment_manager = [];

        foreach ($order as $area => $communityNames) {
            if (isset($payment_manager[$area])) {
                $sorted_payment_manager[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($payment_manager[$area][$communityName])) {
                        $sorted_payment_manager[$area][$communityName] = $payment_manager[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_payment_manager;
    }


    // 维修工单
    public function getMaintenance_Ticket()
    {
        $result = $this->db->query("SELECT * FROM maintenance_ticket where `date` = '202304'");

        $maintenance_ticket = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($maintenance_ticket[$area])) {
                $maintenance_ticket[$area] = [];
            }
            $maintenance_ticket[$area][$row['communityName']] = $row;
        }

        $order = $this->order;

        $sorted_maintenance_ticket = [];

        foreach ($order as $area => $communityNames) {
            if (isset($maintenance_ticket[$area])) {
                $sorted_maintenance_ticket[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($maintenance_ticket[$area][$communityName])) {
                        $sorted_maintenance_ticket[$area][$communityName] = $maintenance_ticket[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_maintenance_ticket;
    }


    // 巡航巡检
    public function getPerform_Inspection()
    {
        $result = $this->db->query("SELECT * FROM perform_inspection where `date` = '202304'");

        $perform_inspection = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($perform_inspection[$area])) {
                $perform_inspection[$area] = [];
            }
            $perform_inspection[$area][] = $row;
        }

        $order = $this->getPerform_InspectionOrder;

        $sorted_perform_inspection = [];

        foreach ($order as $area => $communityNames) {
            if (isset($perform_inspection[$area])) {
                $sorted_perform_inspection[$area] = [];
                foreach ($perform_inspection[$area] as $inspection) {
                    if (in_array($inspection['communityName'], $communityNames)) {
                        $sorted_perform_inspection[$area][] = $inspection;
                    }
                }
            }
        }

        return $sorted_perform_inspection;
    }


    //6、采购库存
    public function getProcurement_Inventory()
    {
        $result = $this->db->query("SELECT * FROM procurement_inventory where `date` = '202304'");

        $procurement_inventory = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($procurement_inventory[$area])) {
                $procurement_inventory[$area] = [];
            }
            $row['extraList'] = isset($row['extraList']) ? round($row['extraList'], 2) : $row['extraList'];
            $row['toDayList'] = isset($row['toDayList']) ? round($row['toDayList'], 2) : $row['toDayList'];
            $row['property_stock'] = isset($row['property_stock']) ? round($row['property_stock'], 2) : $row['property_stock'];
            $procurement_inventory[$area][$row['communityName']] = $row;
        }

        $order = $this->order;

        $sorted_procurement_inventory = [];

        foreach ($order as $area => $communityNames) {
            if (isset($procurement_inventory[$area])) {
                $sorted_procurement_inventory[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($procurement_inventory[$area][$communityName])) {
                        $sorted_procurement_inventory[$area][$communityName] = $procurement_inventory[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_procurement_inventory;
    }



    //7、设施设备：
    public function getFacility_Equipment()
    {
        $result = $this->db->query("SELECT * FROM facility_equipment where `date` = '202304'");

        $facility_equipment = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($facility_equipment[$area])) {
                $facility_equipment[$area] = [];
            }
            $facility_equipment[$area][$row['communityName']] = $row;
        }

        $order = $this->getMaintenance_order;

        $sorted_facility_equipment = [];

        foreach ($order as $area => $communityNames) {
            if (isset($facility_equipment[$area])) {
                $sorted_facility_equipment[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($facility_equipment[$area][$communityName])) {
                        $sorted_facility_equipment[$area][] = $facility_equipment[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_facility_equipment;
    }


    //8、合同管理：
    public function getContract_Management()
    {
        $result = $this->db->query("SELECT * FROM contract_management where `date` = '202304'");

        $contract_management = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($contract_management[$area])) {
                $contract_management[$area] = [];
            }
            $contract_management[$area][$row['communityName']] = $row;
        }

        $order = $this->order;

        $sorted_contract_management = [];

        foreach ($order as $area => $communityNames) {
            if (isset($contract_management[$area])) {
                $sorted_contract_management[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($contract_management[$area][$communityName])) {
                        $sorted_contract_management[$area][] = $contract_management[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_contract_management;
    }

    //8、资产管理：
    public function getResources_Management()
    {
        $result = $this->db->query("SELECT * FROM resources where `date` = '202304'");

        $resources_management = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($resources_management[$area])) {
                $resources_management[$area] = [];
            }
            $resources_management[$area][$row['communityName']] = $row;
        }

        $order = $this->order;

        $sorted_resources_management = [];

        foreach ($order as $area => $communityNames) {
            if (isset($resources_management[$area])) {
                $sorted_resources_management[$area] = [];
                foreach ($communityNames as $communityName) {
                    if (isset($resources_management[$area][$communityName])) {
                        $sorted_resources_management[$area][] = $resources_management[$area][$communityName];
                    }
                }
            }
        }

        return $sorted_resources_management;
    }

    //9、电商运营
    public function getEcommerce_Operation()
    {
        $result = $this->db->query("SELECT * FROM ecommerce_operation where `date` = '202304'");

        $ecommerce_operation = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($ecommerce_operation[$area])) {
                $ecommerce_operation[$area] = [];
            }
            $ecommerce_operation[$area][] = $row;
        }

        return $ecommerce_operation;
    }

    //10、健康会所
    public function getHealth_Club()
    {
        $result = $this->db->query("SELECT * FROM health_club where `date` = '202304'");

        $health_club = [];
        while ($row = $result->fetch_assoc()) {
            $area = $row['area'];
            if (!isset($health_club[$area])) {
                $health_club[$area] = [];
            }
            $health_club[$area][] = $row;
        }

        return $health_club;
    }


}