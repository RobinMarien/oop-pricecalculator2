<?php
declare(strict_types=1);
class GroupsLoader
{
    private $groups=[];
    public function __construct()
    {
        $json=json_decode(file_get_contents("Data/groups.json"),true);
        foreach ($json AS $groupJson){
            if(isset($groupJson['variable_discount'])) {
                $discount = new Discount(Discount::VARIABLE, $groupJson['variable_discount']);
            } else {
                $discount = new Discount(Discount::FIXED, $groupJson['fixed_discount']);
            }
            $group = null;
            if(!empty($groupJson['group_id'])) {
                $group = $this->groups[$groupJson['group_id']];
            }
            $this->groups[$groupJson["id"]]= new Group($groupJson['id'], $groupJson['name'], $discount, $group);
        }
    }

    public function loadGroups(): array{
        return $this->groups;
    }

    public function loadGroupById (int $groupId) :? Group {
       return $this->groups[$groupId];
    }
}
