<?php
namespace App\Components;

use App\Menu;

/**
 *
 */
class MenuRecusive
{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }
    public function MenuRecusiveAdd($parentId = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $item) {
            $this->html .= '<option value="' . $item->id . '">' . $subMark . $item->name . '</option>';
            $this->MenuRecusiveAdd($item->id, $subMark . '&nbsp&nbsp&nbsp&nbsp');
        }
        return $this->html;
    }
    public function menuRecusiveEdit($parentIdMenuEdit, $parentId = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $item) {
            if ($parentIdMenuEdit == $item->id) {
                $this->html .= '<option selected value="' . $item->id . '">' . $subMark . $item->name . '</option>';

            } else {
                $this->html .= '<option value="' . $item->id . '">' . $subMark . $item->name . '</option>';

            }
            $this->menuRecusiveEdit($parentIdMenuEdit,$item->id, $subMark . '&nbsp&nbsp&nbsp&nbsp');
        }
        return $this->html;
    }
}
