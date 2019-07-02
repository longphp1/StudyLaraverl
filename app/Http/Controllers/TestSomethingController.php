<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;

class TestSomethingController extends Controller
{
    public $myname;

    public function testParam($id)
    {
        echo $id . "<br/>";
        $encrypted = Crypt::encryptString('Hello world.');
        //  echo "encrypted:".$encrypted."<br/>";
        $decrypted = Crypt::decryptString($encrypted);
        // echo "decrypted:".$decrypted;

        $average = collect([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->avg('foo');// 20
        $average = collect([1, 1, 2, 4])->avg();// 2
        echo $average;

        $collection = collect([1, 2, 3, 4, 5, 6, 7]);
        $chunks = $collection->chunk(4);
        $chunks->toArray();
        echo $chunks;

        $collection = collect([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
        $collapsed = $collection->collapse();
        $collapsed->all();
        echo $collapsed;

        $collection = collect([1, 2, 3, 4, 5]);
        $groups = $collection->split(6);
        $groups->toArray();
        echo $groups;


    }

}