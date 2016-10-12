<?php
/**
 * fill db with test data
 */
class FilldbController {
    /**
     * 
     * @return boolean
     */
    public function actionIndex() {
        $db = Db::getConnection();
        $data = [
            'id' => NULL,
            'category_id' => 7,
            'code' => 9635,
            'price' => 536,
            'availability' => 1,
            'brand' => 'G-Star',
            'image' => '',
            'description' => '',
            'is_new' => 0,
            'is_recommended' => 0,
            'status' => 1
        ];
        
        $count = 25;
        while ($count) {
            $data['code']++;
            $data['price']++;
            $data['name'] = sprintf('G-Star %d', $count);
            var_dump($data['name']);
            $result = $db->query("INSERT INTO `product` ("
                        . "`name`, "
                        . "`category_id`, "
                        . "`code`, "
                        . "`price`, "
                        . "`availability`, "
                        . "`brand`, "
                        . "`image`, "
                        . "`description`, "
                        . "`is_new`, "
                        . "`is_recommended`, "
                        . "`status`"
                    . ") "
                    . "VALUES ("
                        . "'{$data['name']}', "
                        . "'{$data['category_id']}', "
                        . "'{$data['code']}', "
                        . "'{$data['price']}', "
                        . "'{$data['availability']}', "
                        . "'{$data['brand']}', "
                        . "'{$data['image']}', "
                        . "'{$data['description']}', "
                        . "'{$data['is_new']}', "
                        . "'{$data['is_recommended']}', "
                        . "'{$data['status']}'"
                    . ")");
            
            
            $count--;
        }
        
        return true;
    }
}

