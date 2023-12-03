<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s)
{
    // ...
}

do_stuff(Suit::Clubs);

enum JapaneseWeekdays: string
{
    case Sunday = '日曜日';
    case Monday = '月曜日';
    case Tuesday = '火曜日';
    case Wednesday = '水曜日';
    case Thursday = '木曜日';
    case Friday = '金曜日';
    case Saturday = '土曜日';
}

// Illegal enum value
// enum Status: bool
// {
//     case Active = true;
//     case Inactive = false;
// }

enum Status: int
{
    case Inactive = 0;
    case Active = 1;
    case Pending = 2;
}

// print JapaneseWeekdays::Friday->value;

enum Gender
{
    case Male;
    case Female;
    case Other;
}

class Student
{
    public string $name;
    public string $email;
    public Gender $gender;
    public int $age;

    public function __construct(string $name, string $email, Gender $gender, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->age = $age;
    }
}

$rin = new Student('rin', 'rin@gmail.com', Gender::Female, 17);

// $properties = get_object_vars($rin);
// foreach ($properties as $property => $value) {
//     echo $property . ': ' . json_encode($value) . PHP_EOL;
// }

print_r($rin);
// echo json_encode(get_object_vars($rin));
