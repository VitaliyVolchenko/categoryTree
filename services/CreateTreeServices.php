<?php

namespace services;

trait CreateTreeServices
{
    public function buildTree(array $elements, $parentId = 0) {

        $branch = array();

        foreach ($elements as $element) {

            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);

                if ($children) {
                    $element['children'] =  $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }
}