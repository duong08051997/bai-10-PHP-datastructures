<?php

class Dancer
{
    public $name;
    public $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}

$queueOne = new SplQueue();
$queueTwo = new SplQueue();

$dancer1 = new Dancer('luc', 'male');
$dancer2 = new Dancer('tung', 'male');
$dancer3 = new Dancer('cuong', 'male');
$dancer4 = new Dancer('manh', 'male');

$queueOne->enqueue($dancer1);
$queueOne->enqueue($dancer2);
$queueOne->enqueue($dancer3);
$queueOne->enqueue($dancer4);
echo '<pre>';
print_r($queueOne);
echo '<br>';


$dancer5 = new Dancer('hoa', 'female');
$dancer6 = new Dancer('mai', 'female');
$dancer7 = new Dancer('lan', 'female');

$queueTwo->enqueue($dancer5);
$queueTwo->enqueue($dancer6);
$queueTwo->enqueue($dancer7);

echo '<pre>';
print_r($queueTwo);
echo '<br>';


function creatCouple($queueOne, $queueTwo)
{
        $list = [];
    if ($queueOne != NULL && $queueTwo != NULL) {
        $coupleOne = $queueOne->shift();
        $coupleTwo = $queueTwo->shift();
        array_push($list, $coupleOne);
        array_push($list, $coupleTwo);

    }return $list;
}

//function numberOfWaiting($queueOne, $queueTwo)
//{
//    if (count($queueOne) > count($queueTwo)) {
//        return 'number of people waiting is ' .(count($queueOne)-count($queueTwo));
//    } else {
//        return 'number of people waiting is ' .(count($queueOne)-count($queueTwo) );
//    }
//}
function waiting($queueOne,$queueTwo)
{
    if ($queueOne->count() > $queueTwo->count()) {
        return 'number of people waiting is '.$queueOne->count();
    }else{
        return 'number of people waiting is '.$queueTwo->count();
    }

}

echo '<pre>';
print_r(creatCouple($queueOne, $queueTwo));
echo '<pre>';
print_r(creatCouple($queueOne, $queueTwo));
echo '<pre>';
print_r(creatCouple($queueOne, $queueTwo));
echo '<br>';

print_r(waiting($queueOne, $queueTwo));