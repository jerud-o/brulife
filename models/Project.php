<?php

class Project {
    public $id;
    public $title;
    public $dateStart;
    public $budget;
    public $description;
    public $location;
    public $imagePath;
    public $tags;

    public function __construct($item)
    {
        $this->id = $item['ID'];
        $this->title = ucwords($item['Title']);
        $this->dateStart = date("d F, Y", strtotime($item['DateStart']));
        $this->budget = ($item['Budget'] === floatval(0)) ? "No budget planned yet." : ("&#8369; " . $item['Budget']);
        $this->description = (!empty($item['Description'])) ? $item['Description'] : "No description found.";
        $this->location = (!empty($item['Location'])) ? $item['Location'] : "No location yet.";
        $this->imagePath = $item['ImagePath'];
        $this->tags = explode(",", $item['Tag']);
    }
}
?>